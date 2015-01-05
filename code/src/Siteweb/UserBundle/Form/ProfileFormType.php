<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Siteweb\UserBundle\Form;

use Siteweb\BackBundle\Form\DemographicType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword as OldUserPassword;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ProfileFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (class_exists('Symfony\Component\Security\Core\Validator\Constraints\UserPassword')) {
            $constraint = new UserPassword();
        } else {
            // Symfony 2.1 support with the old constraint class
            $constraint = new OldUserPassword();
        }

        $this->buildUserForm($builder, $options);

        $builder->add('current_password', 'password', array(
            'label' => 'form.current_password',
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => $constraint,
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'intention'  => 'profile',
        ));
    }

    public function getName()
    {
        return 'fos_user_profile';
    }

    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fname',null,array(
                'required' => true
            ))
            ->add('lname',null,array(
                'required' => true
            ))
            ->add('mname')
            ->add('sname')
            ->add('organization',null,array(
                'required' => true
            ))
            ->add('summitbadgename')
            ->add('summitbadgecity',null,array(
                'required' => true
            ))
            ->add('summitbadgestate',null,array(
                'required' => true
            ))
            ->add('academictitle')
            ->add('jobtitle')
            ->add('degree1',null,array(
                'required' => true
            ))
            ->add('degree2',null,array(
                'required' => false
            ))
            ->add('degree3')
            ->add('introduction')
            ->add('telephone',null,array(
                'required' => true
            ))
            ->add('telephone2')
            ->add('address',null,array(
                'required' => true
            ))
            ->add('address2')
            ->add('city',null,array(
                'required' => true
            ))
            ->add('state',null,array(
                'required' => true
            ))
            ->add('country',null,array(
                'required' => true
            ))
            ->add('postalcode',null,array(
                'required' => true
            ))

            ->add('photoattach', 'file', array(
                'required' =>false
            ))

            ->add('documentattach','file',array(
                'required' => false
            ))
            ->add('cvattach','file',array(
                'required' => false
            ))
            ->add('publicprofile', 'choice', array(
                'multiple' => false,
                'expanded' => true,
                'data' => false,
                'required' => true,
                'choices'  => array(
                    true => 'Yes',
                    false => 'No',
                )));

    }
}
