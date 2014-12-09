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


class PaymentController  extends PayumController
{
    public function preparePaypalExpressCheckoutPaymentAction()
    {
        $paymentName = 'bgrg_membership_paypal_payment';

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
        $paymentDetails['PAYMENTREQUEST_0_AMT'] = '0.01';
        $paymentDetails['L_PAYMENTREQUEST_0_AMT0'] = '0.01';
        $paymentDetails['L_PAYMENTREQUEST_0_QTY0'] = '1';
        $paymentDetails['L_PAYMENTREQUEST_0_NAME0'] = ''.$usermembership->getUsermembershiptype()->getTitle();
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

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('SitewebUserBundle:User')->findOneById($this->getUser()->getId());

        $status = new SimpleStatusRequest($token);

        $payment->execute($status);

        if ($status->isSuccess()) {

            $em = $this->getDoctrine()->getManager();

            $usermemberships = $em->getRepository('SitewebBackBundle:Usermembership')->findBy(array(
                'user'=> $user
            ));

            foreach($usermemberships as $membership){
                if($membership->getUsermembershiptype()->getId() < 15){
                    $usermembership = $membership;
                }
            }

            $usermembership->setStatus('Paid');
                $date = new \DateTime("now");
                $usermembership->setActivated($date);
                $usermembership->setExpiration($date->add(new \DateInterval('P1Y')));
                $em->persist($usermembership);
                $em->flush();

            $this->get('session')->getFlashBag()->set(

                'notice',

                'Your registration is complete'

            );

        } else if ($status->isPending()) {

            $this->get('session')->getFlashBag()->set(

                'notice',

                'Error !! Your payment is pending'

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