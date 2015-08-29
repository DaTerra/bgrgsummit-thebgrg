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
use Payum\Core\Request\SimpleStatusRequest;
use Payum\Core\Request\Sync;
use Payum\Core\Registry\RegistryInterface;
use Payum\Core\Security\HttpRequestVerifierInterface;
use Symfony\Component\HttpFoundation\Request;


class RenewPaymentController  extends PayumController
{
    public function prepareRenewPaymentAction()
    {
        $paymentName = 'bgrg_membership_renew_paypal_payment';

        $storage = $this->getPayum()->getStorage('Siteweb\FrontBundle\Entity\PaymentDetails');

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('SitewebUserBundle:User')->findOneById($this->getUser()->getId());

        $usermemberships = $this->getDoctrine()->getRepository('SitewebBackBundle:Usermembership')->findBy(array(
            'user' => $user
        ));

        foreach($usermemberships as $membership){
            if($membership->getUsermembershiptype()->getId() < 15){
                $usermembership = $membership;
            }
        }

        /** @var $paymentDetails PaymentDetails */
        $paymentDetails = $storage->createModel();
        $paymentDetails['PAYMENTREQUEST_0_CURRENCYCODE'] = 'USD';
        $paymentDetails['PAYMENTREQUEST_0_AMT'] = ''.$usermembership->getUsermembershiptype()->getPrice();
        $paymentDetails['L_PAYMENTREQUEST_0_AMT0'] = ''.$usermembership->getUsermembershiptype()->getPrice();
        $paymentDetails['L_PAYMENTREQUEST_0_QTY0'] = '1';
        $paymentDetails['L_PAYMENTREQUEST_0_NAME0'] = ''.$usermembership->getUsermembershiptype()->getTitle().'_renew';
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
        $token = $this->get('payum.security.http_request_verifier')->verify($request);

        $payment = $this->get('payum')->getPayment($token->getPaymentName());

        $status = new SimpleStatusRequest($token);

        $payment->execute($status);

        if ($status->isSuccess()) {

            $em = $this->getDoctrine()->getManager();

            $user = $em->getRepository('SitewebUserBundle:User')->findOneById($this->getUser()->getId());

            $usermemberships = $em->getRepository('SitewebBackBundle:Usermembership')->findBy(array(
                'user'=> $user
            ));

            foreach($usermemberships as $membership){
                if($membership->getUsermembershiptype()->getId() < 15){
                    $usermembership = $membership;
                }
            }




            $usermembership->setStatus('Paid');
                $usermembership->setActivated(new \DateTime());
                $usermembership->setExpiration(new \DateTime() + \DateInterval::createFromDateString('+365 day'));
                $em->persist($usermembership);
                $em->flush();

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

        return $this->redirect($this->generateUrl('fos_user_profile_show'));
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