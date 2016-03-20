<?php
namespace PW\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('LastName',    TextType::class)
            ->add('FirstName',     TextType::class)
            ->add('Email',    TextType::class)
            ->add('Cellphone',       TextType::class)
            //->add('BirthDate',       BirthdayType::class)
            ->add('Password',      PasswordType::class)
            ->add('validate',   'submit')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PW\UserBundle\Entity\User'
        ));
    }
}