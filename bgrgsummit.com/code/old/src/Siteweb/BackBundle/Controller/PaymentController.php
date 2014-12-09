<?php
/**
 * Created by PhpStorm.
 * User: Toshiba
 * Date: 08/09/14
 * Time: 15:06
 */

namespace Siteweb\FrontBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Payum\Core\Request\GetHumanStatus;
use Siteweb\FrontBundle\Entity\PaymentDetails;
use Payum\Core\Security\GenericTokenFactoryInterface;
use Payum\Paypal\ExpressCheckout\Nvp\Api;
use Payum\Core\Registry\RegistryInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Range;


class PaymentController extends Controller
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

        $captureToken = $this->getTokenFactory()->createCaptureToken(
            $paymentName,
            $paymentDetails,
            'summit_paypal_payment_done'
        );

        $paymentDetails['RETURNURL'] = $captureToken->getTargetUrl();
        $paymentDetails['CANCELURL'] = $captureToken->getTargetUrl();
        $paymentDetails['INVNUM'] = $paymentDetails->getId();
        $storage->updateModel($paymentDetails);

        return $this->redirect($captureToken->getTargetUrl());
    }

    public function captureDoneAction(Request $request)
    {
        $token = $this->get('payum.security.http_request_verifier')->verify($request);

        $payment = $this->get('payum')->getPayment($token->getPaymentName());

        $payment->execute($status = new GetHumanStatus($token));
        if ($status->isSuccess()) {

            $em = $this->getDoctrine()->getManager();
            $userManager = $this->get('fos_user.user_manager');

            $user = $userManager->findUserByEmail($this->get('security.context')->getToken()->getUser()->getEmail());

            if($user){
                $user->setPayment($payment);
                $usermembership = $em->getRepository('SitewebBackBundle:Usermembership')->findOneBy(array(
                        'user'=>$user
                    ));
                $usermembership->setStatus('Paid');
                $usermembership->setActivated(new \DateTime());
                $usermembership->expiration($usermembership->getUsermembershiptype()->getExpiration());
                $userManager->updateUser($user,false);
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