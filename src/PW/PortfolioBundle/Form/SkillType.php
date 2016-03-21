<?php

namespace PW\PortfolioBundle\Form;

use PW\PortfolioBundle\Entity\Skill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillType extends AbstractType
{
    private $skillGroupName;

    public function __construct(array $options = array())
    {
        $resolver = new OptionsResolver();
        $this->setDefaultOptions($resolver);
        $this->options = $resolver->resolve($options);
    }

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
            ->add('skillGroup', 'entity', array(
                'class'    => 'PWPortfolioBundle:SkillGroup',
                'property' => 'skillGroupName',
                'multiple' => true
            ))
           /* ->add('skillGroup',    CollectionType::class, array(
                'data' => $this->getSkillGroupName()
            )) */
           /* ->add('skillGroup',     'collection', array(
                'type'          =>  new SkillGroupType(),
                'allow_add'     =>  true,
                'allow_delete'  =>  true
            ))*/
            ->add('validate',       'submit')
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

    /**
     * @return mixed
     */
    public function getSkillGroupName()
    {
        return $this->skillGroupName;
    }

    /**
     * @param mixed $skillGroupName
     */
    public function setSkillGroupName($skillGroupName)
    {
        $this->skillGroupName = $skillGroupName;
    }
}

