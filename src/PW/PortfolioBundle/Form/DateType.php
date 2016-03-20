<?php

namespace PW\PortfolioBundle\Form;

use PW\PortfolioBundle\Entity\Experience;
use PW\PortfolioBundle\Entity\Project;
use PW\PortfolioBundle\Entity\Training;
use PW\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DateType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('dateTime',       new Date())
            ->add('experience',     new Experience())
            ->add('training',       'text')
            ->add('user',           new User())
            ->add('project',        new Project())
            ->add('validate',               'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            //'data_class' => 'PW\PortfolioBundle\Entity\Date'
        ));
    }
}
