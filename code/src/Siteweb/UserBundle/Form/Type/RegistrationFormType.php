<?php



namespace Siteweb\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType {

    

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
                ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'form.password'),
                    'second_options' => array('label' => 'form.password_confirmation'),
                    'invalid_message' => 'fos_user.password.mismatch',
                ))
                ->add('Roles', 'choice', array(
                    'choices' => array(
                        'ROLE_ADMIN' => 'Admin',
                        'ROLE_Founder' => 'Founder',
                        'ROLE_DIRECTOR' => 'director'
                    ),
                        'multiple' => true,
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\UserBundle\Entity\User'        ));
    }

    public function getName() {
        return 'Siteweb_user_registration';
    }

}
