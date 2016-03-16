<?php

namespace PW\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="PW\UserBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="FirstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="Cellphone", type="string", length=255)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="UserPassword", type="string", length=255)
     */
    private $userPassword;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_LastName", type="boolean")
     */
    private $isVisbleLastName;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_FirstName", type="boolean")
     */
    private $isVisbleFirstName;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_Email", type="boolean")
     */
    private $isVisbleEmail;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_Cellphone", type="boolean")
     */
    private $isVisbleCellphone;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_Year", type="boolean")
     */
    private $isVisbleYear;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     * @return User
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string 
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set isVisbleLastName
     *
     * @param boolean $isVisbleLastName
     * @return User
     */
    public function setIsVisbleLastName($isVisbleLastName)
    {
        $this->isVisbleLastName = $isVisbleLastName;

        return $this;
    }

    /**
     * Get isVisbleLastName
     *
     * @return boolean 
     */
    public function getIsVisbleLastName()
    {
        return $this->isVisbleLastName;
    }

    /**
     * Set isVisbleFirstName
     *
     * @param boolean $isVisbleFirstName
     * @return User
     */
    public function setIsVisbleFirstName($isVisbleFirstName)
    {
        $this->isVisbleFirstName = $isVisbleFirstName;

        return $this;
    }

    /**
     * Get isVisbleFirstName
     *
     * @return boolean 
     */
    public function getIsVisbleFirstName()
    {
        return $this->isVisbleFirstName;
    }

    /**
     * Set isVisbleEmail
     *
     * @param boolean $isVisbleEmail
     * @return User
     */
    public function setIsVisbleEmail($isVisbleEmail)
    {
        $this->isVisbleEmail = $isVisbleEmail;

        return $this;
    }

    /**
     * Get isVisbleEmail
     *
     * @return boolean 
     */
    public function getIsVisbleEmail()
    {
        return $this->isVisbleEmail;
    }

    /**
     * Set isVisbleCellphone
     *
     * @param boolean $isVisbleCellphone
     * @return User
     */
    public function setIsVisbleCellphone($isVisbleCellphone)
    {
        $this->isVisbleCellphone = $isVisbleCellphone;

        return $this;
    }

    /**
     * Get isVisbleCellphone
     *
     * @return boolean 
     */
    public function getIsVisbleCellphone()
    {
        return $this->isVisbleCellphone;
    }

    /**
     * Set isVisbleYear
     *
     * @param boolean $isVisbleYear
     * @return User
     */
    public function setIsVisbleYear($isVisbleYear)
    {
        $this->isVisbleYear = $isVisbleYear;

        return $this;
    }

    /**
     * Get isVisbleYear
     *
     * @return boolean 
     */
    public function getIsVisbleYear()
    {
        return $this->isVisbleYear;
    }
}
