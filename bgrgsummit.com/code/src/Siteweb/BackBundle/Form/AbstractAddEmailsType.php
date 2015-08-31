<?php

namespace Siteweb\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Siteweb\BackBundle\Form\AbstractuserType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AbstractAddEmailsType extends AbstractType
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
            ->add('authoremail',null,array(
                'required' => true,
            ))
            ->add('coauthers','collection',array(
                    'label'=>' ',
                    'type' => new AbstractuserType(),
                    'allow_add' => true,
                    'options'  => array('required'  => false,),
                    'allow_delete' => true,
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
        return 'siteweb_backbundle_abstract_add_emails';
    }
}
