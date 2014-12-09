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
            ->add('email',null,array(
                    'required' => true
                ))
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
                'required' => true
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
            ->add('photo','file',array(
                    'required' => false
                ))
            ->add('demographic',new DemographicType())
            ->add('publicprofile', 'choice', array(
                'multiple' => false,
                'expanded' => true,
                'data' => false,
                'required' => true,
                'choices'  => array(
                    true => 'yes',
                    false     => 'no',
                )));
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
