<?php

namespace Siteweb\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MeetingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('location','choice', array(
                'choices'   => array(
                    'A' => 'A',
                    'B' => 'B',
                    'C' => 'C',
                    'D' => 'D',
                    'E' => 'E',
                    'F' => 'F',
                    'G' => 'G',
                    'H' => 'H',
                    'I' => 'I',
                    'J' => 'J',
                ),
                'required'  => true,
            ))
            ->add('time','text')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\BackBundle\Entity\Meeting'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_backbundle_meeting';
    }
}
