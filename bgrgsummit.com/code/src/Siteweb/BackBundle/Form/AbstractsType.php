<?php

namespace Siteweb\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AbstractsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('submiter')
            ->add('submiteremail')
            ->add('speaker')
            ->add('speakeremail')
            ->add('author')
            ->add('authoremail')
            ->add('background')
            ->add('methods')
            ->add('results')
            ->add('conclusions')
            ->add('speaker_agreement')
            ->add('status')
            ->add('coauthers','collection',array(
                    'label'=>' ',
                    'type' => new AbstractuserType(),
                    'allow_add' => true,
                    'options'  => array('required'  => false,),
                    'allow_delete' => true,
                    'prototype' => true
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\BackBundle\Entity\Abstracts'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_backbundle_abstracts';
    }
}
