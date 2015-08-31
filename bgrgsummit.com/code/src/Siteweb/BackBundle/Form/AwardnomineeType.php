<?php

namespace Siteweb\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AwardnomineeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('fname')
            ->add('organization')
            ->add('lname')
            ->add('jobtitle')
            ->add('mname')
            ->add('sname')
            ->add('email', 'repeated', array(
                'type' => 'email',
                'invalid_message' => 'The email fields must match.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Email'),
                'second_options' => array('label' => 'Confirm Email'),
            ))
            ->add('degree1')
            ->add('degree2')
            ->add('degree3')
            ->add('telephone')
            ->add('telephone2')
            ->add('address')
            ->add('address2')
            ->add('city')
            ->add('state')
            ->add('country')
            ->add('postalcode')
            ->add('statement')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\BackBundle\Entity\Awardnominee'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_backbundle_awardnominee';
    }
}
