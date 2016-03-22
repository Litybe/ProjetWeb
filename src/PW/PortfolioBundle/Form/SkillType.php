<?php

namespace PW\PortfolioBundle\Form;

use PW\PortfolioBundle\Entity\Skill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('skillName',      'text')
            ->add('skillMastery',   'integer', array(
                'attr' => array(
                    'min' => 1,
                    'max' => 5,
                    'step' => 1,
                    'default' => 1
                )))
            ->add('Ajouter',       'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PW\PortfolioBundle\Entity\Skill'
        ));
    }

}

