<?php

namespace PW\PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TrainingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('trainingName',           'text')
            ->add('trainingDiploma',          'text')
            ->add('trainingDescriptive',    'text')
            ->add('trainingDate',                   'text')
            ->add('trainingAddress',        'text')
            ->add('validate',               'submit')
            ->add('trainingAddress',    'text')
            ->add('trainingZipCode',    'text')
            ->add('trainingCity',    'text')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PW\PortfolioBundle\Entity\Training'
        ));
    }
}
