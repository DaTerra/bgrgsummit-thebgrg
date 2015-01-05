<?php

namespace Siteweb\BackBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EventType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('time','time',array(
                'widget' => 'single_text',
            ))
            ->add('name')
            ->add('keynotes','collection',array(
                'label'=>' ',
                'type' => 'text',
                'allow_add' => true,
                'options'  => array('required'  => false,),
                'allow_delete' => true,
                'prototype' => true
            ))
            ->add('description')
            ->add('moderator')
            ->add('local')
            ->add('abstracts', 'entity', array(
                'required' =>true,
                'label'=>'Abstracts',
                'class' => 'SitewebBackBundle:Abstracts',
                'property' => 'title',
                'expanded'=>true,
                'multiple'=>true,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('a')
                        ->where('a.event IS NULL');
                }
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\BackBundle\Entity\Event'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_backbundle_event';
    }
}
