<?php

namespace Siteweb\UserBundle\Form;

use Siteweb\BackBundle\Form\DemographicType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('fname')
            ->add('lname')
            ->add('mname')
            ->add('sname')
            ->add('organization')
            ->add('summitbadgename')
            ->add('summitbadgecity')
            ->add('summitbadgestate')
            ->add('academictitle')
            ->add('jobtitle')
            ->add('degree1')
            ->add('degree2')
            ->add('degree3')
            ->add('introduction')
            ->add('telephone')
            ->add('telephone2')
            ->add('address')
            ->add('address2')
            ->add('city')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('photo','file')
            ->add('demographic',new DemographicType())
            ->add('publicprofile','choice',array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                      true => 'Yes',
                      false => 'No'

                    )
                ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\UserBundle\Entity\User'
        ));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_user_registration';
    }
}
