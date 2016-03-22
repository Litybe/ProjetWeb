<?php

namespace PW\PortfolioBundle\Form;

use PW\PortfolioBundle\Entity\Skill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillGroupType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('skillGroupName', 'text')
            ->add('categories', 'collection', array(
                'type'         => new SkillType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('Ajouter',       'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PW\PortfolioBundle\Entity\SkillGroup'
        ));
    }

    public function getName()
    {
        return 'PW_portfoliobundle_skillgroup';
    }
}
