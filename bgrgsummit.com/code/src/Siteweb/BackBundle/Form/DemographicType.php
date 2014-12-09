<?php

namespace Siteweb\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemographicType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('agerange','choice',array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'Under 20' => ' Under 20 ',
                        '20-24' => ' 20-24 ',
                        '25-34' => '  25-34 ',
                        '35-44' => ' 35-44 ',
                        '45-54' => ' 45-54 ',
                        ' 55-64' => ' 55-64 ',
                        '65+' => ' 65+ ',

                    )
                ))
            ->add('currentgender','choice',array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'Male' => '  Male ',
                        'Female' => ' Female ',
                        'TransMale/Transman' => ' TransMale/Transman ',
                        'Genderqueer' => ' Genderqueer ',
                        'TransFemale/Transwomen' => ' TransFemale/Transwomen ',
                        'Decline to answer' => '  Decline to answer ',
                        'Additional Category' => ' Additional Category ',


                    )
                ))

            ->add('currentgenderother',null,array(
                    'attr'=>array(
                        'class'=>'input-white'
                    )
                ))
            ->add('birthgender','choice',array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'Male' => '  Male ',
                        'Female' => ' Female ',
                        'Decline to answer' => '  Decline to answer ',
                    )
                ))
            ->add('ethnicity','choice',array(
                    'multiple' => true,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'Asian/Pacific Islander/Native Hawaiian' => '  Asian/Pacific Islander/Native Hawaiian ',
                        'Black/African American' => ' Black/African American ',
                        'Latino/Hispanic' => '  Latino/Hispanic ',
                        'Mixed Race/Heritage' => ' Mixed Race/Heritage ',
                        'White/ Caucasian' => ' White/ Caucasian ',
                        'Genderqueer' => ' Genderqueer ',
                        'Other (Please specify)' => ' Other (Please specify) ',

                    )
                ))
            ->add('ethnicityother',null,array(

                'attr'=>array(
                    'class'=>'input-white'
                )
    ))
            ->add('hiv','choice',array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'Positive' => '  Positive ',
                        'Negative' => ' Negative ',
                        'Unknown' => ' Unknown ',
                        'Undeclared' => '  Undeclared ',
                    )
                ))
            ->add('geographicallocation','choice',array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'Northeast' => '  Northeast ',
                        'Midwest' => ' Midwest ',
                        'South' => ' South ',
                        'West' => '  West ',
                    )
                ))
            ->add('geographicaltype','choice',array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'Rural' => '  Rural ',
                        'Suburban' => ' Suburban ',
                        'Urban' => ' Urban ',
                        'Other' => '  Other ',
                    )
                ))
            ->add('pastattendance', 'choice', array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'  => array(
                        'no'     => 'No',
                        'yes' => 'Yes',


                    ),
                ))
            ->add('pastattendanceedition', 'choice', array(
                    'multiple' => true,
                    'expanded' => true,
                    'required' => true,
                        'choices'  => array(
                            'UCLA 2011/Los Angeles' => 'UCLA 2011/Los Angeles',
                            'UCLA 2013/Los Angeles'     => 'UCLA 2013/Los Angeles',
                            'BGRG 2003/Brooklyn'    => 'BGRG 2003/Brooklyn',
                            'BGRG 2005/Brooklyn'    => 'BGRG 2005/Brooklyn',
                            'BGRG 2010/Atlanta'    => 'BGRG 2010/Atlanta',
                            'BGRG 2012/New Orleans'    => 'BGRG 2012/New Orleans',
                    ),
                ))

            ->add('organizationtype','choice',array(
                    'multiple' => true,
                    'expanded' => true,
                    'required' => true,
                    'choices'=>array(
                        'AIDS-specific organization '   =>'AIDS-specific organization ',
                        'Community Health Clinic'=>'Community Health Clinic',
                        'Health Department'=>'Health Department',
                        'Religious/Faith-based organization'=>'Religious/Faith-based organization',
                        'PLWHA Coalition'=>'PLWHA Coalition',
                        'University'=>'University',
                        'Hospital'=>'Hospital',
                        'Minority-specific organization'=>'Minority-specific organization',
                        'Federal/State Government'=>'Federal/State Government',
                        'Other' =>'Other',
                    )
                ))

            ->add('organizationother',null,array(
                    'attr'=>array(
                        'class'=>'input-white'
                    )
                ))
            ->add('naasm', 'choice', array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'  => array(
                        'yes' => 'Yes',
                        'no'     => 'No',

                    ),
                ))
            ->add('focusgroup', 'choice', array(
                    'multiple' => false,
                    'expanded' => true,
                    'required' => true,
                    'choices'  => array(
                        'yes' => 'Yes',
                        'no'     => 'No',
                    ),
                ))
            ->add('focusgroupemail','checkbox',array(
                'required'  => false,
            ))
            ->add('summitreason',null,array(

                    'attr'=>array(
                        'class' => 'text-845',
                        'rows' => '6',
                        'placeholder' => '(e.g., what personal goals do you hope to accomplish by participating in the Summit?)'
                    )
                ))
            ->add('demographiccol')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Siteweb\BackBundle\Entity\Demographic'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_backbundle_demographic';
    }
}
