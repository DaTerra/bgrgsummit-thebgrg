<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 08/09/14
 * Time: 15:06
 */

namespace Siteweb\FrontBundle\Controller;

use Payum\Bundle\PayumBundle\Controller\PayumController;
use Payum\Core\Exception\RequestNotSupportedException;
use Payum\Core\Request\GetHumanStatus;
use Payum\Core\Request\Sync;
use Symfony\Component\HttpFoundation\Request;


class PaymentController  extends PayumController
{
    public function preparePaypalExpressCheckoutPaymentAction()
    {
        $paymentName = 'summit_paypal_payment';

        $storage = $this->getPayum()->getStorage('Siteweb\FrontBundle\Entity\PaymentDetails');

        /** @var $paymentDetails PaymentDetails */
        $paymentDetails = $storage->createModel();
        $paymentDetails['PAYMENTREQUEST_0_CURRENCYCODE'] = 'USD';
        $paymentDetails['PAYMENTREQUEST_0_AMT'] = '150';
        $paymentDetails['L_PAYMENTREQUEST_0_AMT0'] = '150';
        $paymentDetails['L_PAYMENTREQUEST_0_QTY0'] = '1';
        $paymentDetails['L_PAYMENTREQUEST_0_NAME0'] = 'SUMMIT2015_Attendees';
        $storage->updateModel($paymentDetails);

        $notifyToken = $this->getTokenFactory()->createNotifyToken($paymentName, $paymentDetails);

        $captureToken = $this->getTokenFactory()->createCaptureToken(
            $paymentName,
            $paymentDetails,
            'summit_paypal_payment_done'
        );

        $paymentDetails['RETURNURL'] = $captureToken->getTargetUrl();
        $paymentDetails['CANCELURL'] = $captureToken->getTargetUrl();
        $paymentDetails['PAYMENTREQUEST_0_NOTIFYURL'] = $notifyToken->getTargetUrl();
        $paymentDetails['INVNUM'] = $paymentDetails->getId();
        $storage->updateModel($paymentDetails);

        return $this->redirect($captureToken->getTargetUrl());
    }

    public function captureDoneAction(Request $request)
    {
        $token = $this->getHttpRequestVerifier()->verify($request);

        $payment = $this->getPayum()->getPayment($token->getPaymentName());

        try {
            $payment->execute(new Sync($token));
        } catch (RequestNotSupportedException $e) {}

        $status = new GetHumanStatus($token);

        $payment->execute($status);

        if ($status->isSuccess()) {

            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('SitewebUserBundle:User')->findOneById($this->getUser()->getId());

            if($user){
                $user->setPayment($payment);
                $usermembership = $em->getRepository('SitewebBackBundle:Usermembership')->findOneBy(array(
                        'user'=>$user
                    ));
                $usermembership->setStatus('Paid');
                $usermembership->setActivated(new \DateTime());
                $usermembership->expiration($usermembership->getUsermembershiptype()->getExpiration());
                $user->setPayment($payment);
                $em->persist($user);
                $em->persist($usermembership);

                $em->flush();
            }

            $this->get('session')->getFlashBag()->set(
                'notice',
                'Payment success. Credits were added'
            );


        } else if ($status->isPending()) {
            $this->get('session')->getFlashBag()->set(
                'notice',
                'Payment is still pending. Credits were not added'
            );
        } else {
            $this->get('session')->getFlashBag()->set('notice', 'Payment failed');
        }

        return $this->redirect('fos_user_profile_show');
    }

    /**
     * @return RegistryInterface
     */
    protected function getPayum()
    {
        return $this->get('payum');
    }

    /**
     * @return GenericTokenFactoryInterface
     */
    protected function getTokenFactory()
    {
        return $this->get('payum.security.token_factory');
    }
}