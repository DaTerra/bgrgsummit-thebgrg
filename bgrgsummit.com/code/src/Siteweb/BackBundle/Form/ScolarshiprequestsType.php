<?php

namespace Siteweb\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ScolarshiprequestsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('previousscolarship', 'choice', array(
                'multiple' => false,
                'expanded' => true,
                'data' => false,
                'required' => true,
                'choices'  => array(
                    true => 'Yes',
                    false => 'No',
                )))
            ->add('summitabstract', 'choice', array(
                'multiple' => false,
                'expanded' => true,
                'data' => false,
                'required' => true,
                'choices'  => array(
                    true => 'Yes (please provide the title and authors)',
                    false => 'No',
                )))
            ->add('summitabsracttitle')
            ->add('summitabstractauthor')
            ->add('naesmabstract', 'choice', array(
                'multiple' => false,
                'expanded' => true,
                'data' => false,
                'required' => true,
                'choices'  => array(
                    true => 'Yes (please provide the title and authors)',
                    false => 'No',
                )))
            ->add('naesmabstracttitle')
            ->add('naesmabstractauthor')
            ->add('reason')
            ->add('experience')
            ->add('plans')
            ->add('status')
            ->add('user')
            ->add('scholarship','choice',array(
                'multiple' => true,
                'expanded' => true,
                'required' => true,
                'choices'=>array(
                    'Registration fee for the conference' => 'Registration fee for the conference',
                    'Travel' => 'Travel',
                    'Accommodation' => ' Accommodation ',

                )
            ))

            ->add('accomodations','choice',array(
                'multiple' => true,
                'expanded' => true,
                'required' => true,
                'choices'=>array(
                    'Tue., Jan. 13, 2015' => 'Tue., Jan. 13, 2015',
                    'Wed., Jan. 14, 2015' => 'Wed., Jan. 14, 2015',
                    'Thu., Jan. 15, 2015' => 'Thu., Jan. 15, 2015',
                    'Fri., Jan. 16, 2015' => 'Fri., Jan. 16, 2015',
                    'Sat., Jan. 17, 2015' => 'Sat., Jan. 17, 2015',

                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\BackBundle\Entity\Scolarshiprequests'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_backbundle_scolarshiprequests';
    }
}
