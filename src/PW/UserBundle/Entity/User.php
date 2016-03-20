<?php

namespace PW\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PW\PortfolioBundle\Entity\Address;
use PW\PortfolioBundle\Entity\Date;
use PW\PortfolioBundle\Entity\Experience;
use PW\PortfolioBundle\Entity\HomePage;
use PW\PortfolioBundle\Entity\Image;
use PW\PortfolioBundle\Entity\Project;
use PW\PortfolioBundle\Entity\Skill;
use PW\PortfolioBundle\Entity\SkillGroup;
use PW\PortfolioBundle\Entity\Theme;
use PW\PortfolioBundle\Entity\Training;
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
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(name="salt", type="string", length=255,nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

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
     * @var bool
     *
     * @ORM\Column(name="IsVisble_LastName", type="boolean",nullable=true)
     */
    private $isVisbleLastName;

    /**
     * @ORM\Column(name="roles", type="array")
     */
    private $roles = array();

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_FirstName", type="boolean",nullable=true)
     */
    private $isVisbleFirstName;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_Email", type="boolean",nullable=true)
     */
    private $isVisbleEmail;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_Cellphone", type="boolean",nullable=true)
     */
    private $isVisbleCellphone;

    /**
     * @var bool
     *
     * @ORM\Column(name="IsVisble_Year", type="boolean",nullable=true)
     */
    private $isVisbleYear;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Address", cascade={"persist"})
     */
    private $address;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Experience", cascade={"persist"})
     */
    private $experience;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Skill", cascade={"persist"})
     */
    private $skill;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\SkillGroup", cascade={"persist"})
     */
    private $skillGroup;

    /**
     * @ORM\OneToOne(targetEntity="PW\PortfolioBundle\Entity\HomePage", cascade={"persist"})
     */
    private $homePage;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Image", cascade={"persist"})
     */
    private $image;
    /*
        /**
         * @ORM\OneToMany(targetEntity="PW\PortfolioBundle\Entity\Theme", mappedBy="user")
         *
        private $theme;
    */

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Project", cascade={"persist"})
     */
    private $project;
    /*
        /**
         * @ORM\OneToMany(targetEntity="PW\PortfolioBundle\Entity\Date", mappedBy="user")
         *
        private $date;*/


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
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set roles
     *
     * @param array $roles
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    public function eraseCredentials()
    {
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->experience = new \Doctrine\Common\Collections\ArrayCollection();
        $this->skill = new \Doctrine\Common\Collections\ArrayCollection();
        $this->skillGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
        $this->project = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add address
     *
     * @param \PW\PortfolioBundle\Entity\Address $address
     * @return User
     */
    public function addAddress(\PW\PortfolioBundle\Entity\Address $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \PW\PortfolioBundle\Entity\Address $address
     */
    public function removeAddress(\PW\PortfolioBundle\Entity\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAddress()
    {
        return $this->address;
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
     * Get experience
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Add skill
     *
     * @param \PW\PortfolioBundle\Entity\Skill $skill
     * @return User
     */
    public function addSkill(\PW\PortfolioBundle\Entity\Skill $skill)
    {
        $this->skill[] = $skill;

        return $this;
    }

    /**
     * Remove skill
     *
     * @param \PW\PortfolioBundle\Entity\Skill $skill
     */
    public function removeSkill(\PW\PortfolioBundle\Entity\Skill $skill)
    {
        $this->skill->removeElement($skill);
    }

    /**
     * Get skill
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkill()
    {
        return $this->skill;
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

    /**
     * Get skillGroup
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkillGroup()
    {
        return $this->skillGroup;
    }

    /**
     * Set homePage
     *
     * @param \PW\PortfolioBundle\Entity\HomePage $homePage
     * @return User
     */
    public function setHomePage(\PW\PortfolioBundle\Entity\HomePage $homePage = null)
    {
        $this->homePage = $homePage;

        return $this;
    }

    /**
     * Get homePage
     *
     * @return \PW\PortfolioBundle\Entity\HomePage 
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * Add image
     *
     * @param \PW\PortfolioBundle\Entity\Image $image
     * @return User
     */
    public function addImage(\PW\PortfolioBundle\Entity\Image $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \PW\PortfolioBundle\Entity\Image $image
     */
    public function removeImage(\PW\PortfolioBundle\Entity\Image $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImage()
    {
        return $this->image;
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
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProject()
    {
        return $this->project;
    }
}
