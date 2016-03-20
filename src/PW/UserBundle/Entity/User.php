<?php

namespace PW\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="PW\UserBundle\Repository\UserRepository")
 */
class User implements UserInterface
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Cellphone", type="string", length=255)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $Email;

    /**
     * @return string
     */

    /**
     * @var string
     *
     * @ORM\Column(name="UserAddress", type="string", length=255)
     */
    private $userAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="UserZipCode", type="string", length=255)
     */
    private $userZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="UserCity", type="string", length=255)
     */
    private $userCity;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisibleLastName", type="boolean")
     */
    private $isVisibleLastName;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisibleFirstName", type="boolean")
     */
    private $isVisibleFirstName;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisibleEmail", type="boolean")
     */
    private $isVisibleEmail;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisibleCellphone", type="boolean")
     */
    private $isVisibleCellphone;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisibleAddress", type="boolean")
     */
    private $isVisibleAddress;

    /**
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = array();

    /**
     * @ORM\Column(name="salt", type="string", length=255,nullable=true)
     */
    private $salt;


    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Project", cascade={"persist"})
     */
    private $project;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Experience", cascade={"persist"})
     */
    private $experience;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Training", cascade={"persist"})
     */
    private $training;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\SkillGroup", cascade={"persist"})
     */
    private $skillGroup;


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
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
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
     * Set userAddress
     *
     * @param string $userAddress
     * @return User
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    /**
     * Get userAddress
     *
     * @return string 
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * Set userZipCode
     *
     * @param string $userZipCode
     * @return User
     */
    public function setUserZipCode($userZipCode)
    {
        $this->userZipCode = $userZipCode;

        return $this;
    }

    /**
     * Get userZipCode
     *
     * @return string 
     */
    public function getUserZipCode()
    {
        return $this->userZipCode;
    }

    /**
     * Set userCity
     *
     * @param string $userCity
     * @return User
     */
    public function setUserCity($userCity)
    {
        $this->userCity = $userCity;

        return $this;
    }

    /**
     * Get userCity
     *
     * @return string 
     */
    public function getUserCity()
    {
        return $this->userCity;
    }

    /**
     * Set isVisibleLastName
     *
     * @param boolean $isVisibleLastName
     * @return User
     */
    public function setIsVisibleLastName($isVisibleLastName)
    {
        $this->isVisibleLastName = $isVisibleLastName;

        return $this;
    }

    /**
     * Get isVisibleLastName
     *
     * @return boolean 
     */
    public function getIsVisibleLastName()
    {
        return $this->isVisibleLastName;
    }

    /**
     * Set isVisibleFirstName
     *
     * @param boolean $isVisibleFirstName
     * @return User
     */
    public function setIsVisibleFirstName($isVisibleFirstName)
    {
        $this->isVisibleFirstName = $isVisibleFirstName;

        return $this;
    }

    /**
     * Get isVisibleFirstName
     *
     * @return boolean 
     */
    public function getIsVisibleFirstName()
    {
        return $this->isVisibleFirstName;
    }

    /**
     * Set isVisibleEmail
     *
     * @param boolean $isVisibleEmail
     * @return User
     */
    public function setIsVisibleEmail($isVisibleEmail)
    {
        $this->isVisibleEmail = $isVisibleEmail;

        return $this;
    }

    /**
     * Get isVisibleEmail
     *
     * @return boolean 
     */
    public function getIsVisibleEmail()
    {
        return $this->isVisibleEmail;
    }

    /**
     * Set isVisibleCellphone
     *
     * @param boolean $isVisibleCellphone
     * @return User
     */
    public function setIsVisibleCellphone($isVisibleCellphone)
    {
        $this->isVisibleCellphone = $isVisibleCellphone;

        return $this;
    }

    /**
     * Get isVisibleCellphone
     *
     * @return boolean 
     */
    public function getIsVisibleCellphone()
    {
        return $this->isVisibleCellphone;
    }

    /**
     * Set isVisibleAddress
     *
     * @param boolean $isVisibleAddress
     * @return User
     */
    public function setIsVisibleAddress($isVisibleAddress)
    {
        $this->isVisibleAddress = $isVisibleAddress;

        return $this;
    }

    /**
     * Get isVisibleAddress
     *
     * @return boolean 
     */
    public function getIsVisibleAddress()
    {
        return $this->isVisibleAddress;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * @param mixed $training
     */
    public function setTraining($training)
    {
        $this->training = $training;
    }

    /**
     * @return mixed
     */
    public function getSkillGroup()
    {
        return $this->skillGroup;
    }

    /**
     * @param mixed $skillGroupe
     */
    public function setSkillGroup($skillGroup)
    {
        $this->skillGroup = $skillGroup;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->project = new \Doctrine\Common\Collections\ArrayCollection();
        $this->experience = new \Doctrine\Common\Collections\ArrayCollection();
        $this->training = new \Doctrine\Common\Collections\ArrayCollection();
        $this->skillGroupe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add project
     *
     * @param \PW\PortfolioBundle\Entity\Project $project
     * @return User
     */
    public function addProject(\PW\PortfolioBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \PW\PortfolioBundle\Entity\Project $project
     */
    public function removeProject(\PW\PortfolioBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Add experience
     *
     * @param \PW\PortfolioBundle\Entity\Experience $experience
     * @return User
     */
    public function addExperience(\PW\PortfolioBundle\Entity\Experience $experience)
    {
        $this->experience[] = $experience;

        return $this;
    }

    /**
     * Remove experience
     *
     * @param \PW\PortfolioBundle\Entity\Experience $experience
     */
    public function removeExperience(\PW\PortfolioBundle\Entity\Experience $experience)
    {
        $this->experience->removeElement($experience);
    }

    /**
     * Add training
     *
     * @param \PW\PortfolioBundle\Entity\Training $training
     * @return User
     */
    public function addTraining(\PW\PortfolioBundle\Entity\Training $training)
    {
        $this->training[] = $training;

        return $this;
    }

    /**
     * Remove training
     *
     * @param \PW\PortfolioBundle\Entity\Training $training
     */
    public function removeTraining(\PW\PortfolioBundle\Entity\Training $training)
    {
        $this->training->removeElement($training);
    }

    /**
     * Add skillGroupe
     *
     * @param \PW\PortfolioBundle\Entity\SkillGroupe $skillGroupe
     * @return User
     */
    public function addSkillGroupe(\PW\PortfolioBundle\Entity\SkillGroupe $skillGroupe)
    {
        $this->skillGroupe[] = $skillGroupe;

        return $this;
    }

    /**
     * Remove skillGroupe
     *
     * @param \PW\PortfolioBundle\Entity\SkillGroupe $skillGroupe
     */
    public function removeSkillGroupe(\PW\PortfolioBundle\Entity\SkillGroupe $skillGroupe)
    {
        $this->skillGroupe->removeElement($skillGroupe);
    }

    /**
     * Add skillGroup
     *
     * @param \PW\PortfolioBundle\Entity\SkillGroup $skillGroup
     * @return User
     */
    public function addSkillGroup(\PW\PortfolioBundle\Entity\SkillGroup $skillGroup)
    {
        $this->skillGroup[] = $skillGroup;

        return $this;
    }

    /**
     * Remove skillGroup
     *
     * @param \PW\PortfolioBundle\Entity\SkillGroup $skillGroup
     */
    public function removeSkillGroup(\PW\PortfolioBundle\Entity\SkillGroup $skillGroup)
    {
        $this->skillGroup->removeElement($skillGroup);
    }
}
