<?php

namespace Siteweb\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Siteweb\FrontBundle\Entity\Contact;
use Siteweb\FrontBundle\Form\ContactType;

/**
 * Contact controller.
 *
 */
class ContactController extends Controller
{

    /**
     * Creates a new Contact entity.
     *
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createCreateForm($contact);
        $form->handleRequest($request);

        if ($form->isValid()) {
           $contact = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject('BGRG | - You have a new message')
                ->setFrom($contact->getEmail())
                ->setTo('submissions@bgrgsummit.com')
                ->setBody(
                    $this->renderView(
                        'SitewebFrontBundle:Contact:email.txt.twig',
                        array('contact' => $contact)
                    )) ;
            $this->get('mailer')->send($message);
            $this->get('session')->getFlashBag()->set('notice','Your Message is sent');

            return $this->redirect($this->generateUrl('siteweb_front_homepage'));
        }

        return $this->render('SitewebFrontBundle:Contact:contact.html.twig', array(
            'entity' => $contact,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Contact entity.
    *
    * @param Contact $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Contact $entity)
    {
        $form = $this->createForm(new ContactType(), $entity, array(
            'action' => $this->generateUrl('new_summit_contact'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Contact entity.
     *
     */

}
