<?php
namespace PW\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ProfileType extends AbstractType
{
    private $lastname;
    private $isVisibleLastName;
    private $firstname;
    private $isVisibleFirstName;
    private $email;
    private $isVisibleEmail;
    private $cellphone;
    private $isVisibleCellphone;
    private $password;



    public function __construct(array $options = array())
    {
        $resolver = new OptionsResolver();
        $this->setDefaultOptions($resolver);
        $this->options = $resolver->resolve($options);
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('LastName',    TextType::class,array(
                'data' => $this->getLastName()
            ))
            ->add('isVisibleLastName',    'checkbox',array(
                'data' => $this->getIsVisibleLastName()
            ))
            ->add('FirstName',     TextType::class,array(
                'data' => $this->getFirstName()
            ))
            ->add('isVisibleFirstName',    'checkbox',array(
                'data' => $this->getIsVisibleFirstName()
            ))
            ->add('Email',    TextType::class,array(
                'data' => $this->getEmail()
            ))
            ->add('isVisibleEmail',    'checkbox',array(
                'data' => $this->getIsVisibleEmail()
            ))
            ->add('Cellphone',       TextType::class,array(
                'data' => $this->getCellphone()
            ))
            ->add('isVisibleCellphone',    'checkbox',array(
                'data' => $this->getIsVisibleCellphone()
            ))
            //->add('BirthDate',       BirthdayType::class)
            ->add('Password',      PasswordType::class,array(
                'data' => $this->getPassword()
            ))
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

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * @param mixed $cellphone
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getIsVisibleLastName()
    {
        return $this->isVisibleLastName;
    }

    /**
     * @param mixed $isVisibleLastName
     */
    public function setIsVisibleLastName($isVisibleLastName)
    {
        $this->isVisibleLastName = $isVisibleLastName;
    }

    /**
     * @return mixed
     */
    public function getIsVisibleFirstName()
    {
        return $this->isVisibleFirstName;
    }

    /**
     * @param mixed $isVisibleFirstName
     */
    public function setIsVisibleFirstName($isVisibleFirstName)
    {
        $this->isVisibleFirstName = $isVisibleFirstName;
    }

    /**
     * @return mixed
     */
    public function getIsVisibleEmail()
    {
        return $this->isVisibleEmail;
    }

    /**
     * @param mixed $isVisibleEmail
     */
    public function setIsVisibleEmail($isVisibleEmail)
    {
        $this->isVisibleEmail = $isVisibleEmail;
    }

    /**
     * @return mixed
     */
    public function getIsVisibleCellphone()
    {
        return $this->isVisibleCellphone;
    }

    /**
     * @param mixed $isVisibleCellphone
     */
    public function setIsVisibleCellphone($isVisibleCellphone)
    {
        $this->isVisibleCellphone = $isVisibleCellphone;
    }
}