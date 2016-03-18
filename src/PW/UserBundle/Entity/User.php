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
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="PW\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

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

    /**
     * @ORM\OneToMany(targetEntity="PW\PortfolioBundle\Entity\Theme", mappedBy="user")
     */
    private $theme;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Project", cascade={"persist"})
     */
    private $project;

    /**
     * @ORM\OneToMany(targetEntity="PW\PortfolioBundle\Entity\Date", mappedBy="user")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\Training", cascade={"persist"})
     */
    private $training;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
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
    public function setExperience(Experience $experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * @param mixed $skill
     */
    public function setSkill(Skill $skill)
    {
        $this->skill = $skill;
    }

    /**
     * @return mixed
     */
    public function getSkillGroup()
    {
        return $this->skillGroup;
    }

    /**
     * @param mixed $skillGroup
     */
    public function setSkillGroup(SkillGroup $skillGroup)
    {
        $this->skillGroup = $skillGroup;
    }

    /**
     * @return mixed
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * @param mixed $homePage
     */
    public function setHomePage(HomePage $homePage)
    {
        $this->homePage = $homePage;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage(Image $image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme(Theme $theme)
    {
        $this->theme = $theme;
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
    public function setProject(Project $project)
    {
        $this->project = $project;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate(Date $date)
    {
        $this->date = $date;
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
    public function setTraining(Training $training)
    {
        $this->training = $training;
    }


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
     * Set roles
     *
     * @param array $roles
     * @return User
     */
  /*  public function setRoles($roles)
    {
        $this->rolesUser = $roles;

        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->adress = new \Doctrine\Common\Collections\ArrayCollection();
        $this->experience = new \Doctrine\Common\Collections\ArrayCollection();
        $this->skill = new \Doctrine\Common\Collections\ArrayCollection();
        $this->skillGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
        $this->theme = new \Doctrine\Common\Collections\ArrayCollection();
        $this->project = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \Doctrine\Common\Collections\ArrayCollection();
        $this->training = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add theme
     *
     * @param \PW\PortfolioBundle\Entity\Theme $theme
     * @return User
     */
    public function addTheme(\PW\PortfolioBundle\Entity\Theme $theme)
    {
        $this->theme[] = $theme;

        return $this;
    }

    /**
     * Remove theme
     *
     * @param \PW\PortfolioBundle\Entity\Theme $theme
     */
    public function removeTheme(\PW\PortfolioBundle\Entity\Theme $theme)
    {
        $this->theme->removeElement($theme);
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
     * Add date
     *
     * @param \PW\PortfolioBundle\Entity\Date $date
     * @return User
     */
    public function addDate(\PW\PortfolioBundle\Entity\Date $date)
    {
        $this->date[] = $date;

        return $this;
    }

    /**
     * Remove date
     *
     * @param \PW\PortfolioBundle\Entity\Date $date
     */
    public function removeDate(\PW\PortfolioBundle\Entity\Date $date)
    {
        $this->date->removeElement($date);
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
}
