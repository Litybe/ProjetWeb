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
            ->add('qualification',          'text')
            ->add('trainingDescriptive',    'textarea')
            ->add('date',                   'text')
            ->add('trainingAddress',        'text')
            ->add('validate',               'submit')
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
