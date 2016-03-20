<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Training
 *
 * @ORM\Table(name="training")
 * @ORM\Entity(repositoryClass="PW\PortfolioBundle\Repository\TrainingRepository")
 */
class Training
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
     * @ORM\Column(name="TrainingName", type="string", length=255)
     */
    private $trainingName;

    /**
     * @var string
     *
     * @ORM\Column(name="TrainingDiploma", type="string", length=255)
     */
    private $trainingDiploma;

    /**
     * @var string
     *
     * @ORM\Column(name="TrainingAddress", type="string", length=255)
     */
    private $trainingAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="TrainingZipCode", type="string", length=255)
     */
    private $trainingZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="TrainingCity", type="string", length=255)
     */
    private $trainingCity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TrainingDate", type="date")
     */
    private $trainingDate;

    /**
     * @var string
     *
     * @ORM\Column(name="TrainingDescriptive", type="string", length=255)
     */
    private $trainingDescriptive;


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
     * Set trainingName
     *
     * @param string $trainingName
     * @return Training
     */
    public function setTrainingName($trainingName)
    {
        $this->trainingName = $trainingName;

        return $this;
    }

    /**
     * Get trainingName
     *
     * @return string 
     */
    public function getTrainingName()
    {
        return $this->trainingName;
    }

    /**
     * Set trainingDiploma
     *
     * @param string $trainingDiploma
     * @return Training
     */
    public function setTrainingDiploma($trainingDiploma)
    {
        $this->trainingDiploma = $trainingDiploma;

        return $this;
    }

    /**
     * Get trainingDiploma
     *
     * @return string 
     */
    public function getTrainingDiploma()
    {
        return $this->trainingDiploma;
    }

    /**
     * Set trainingAddress
     *
     * @param string $trainingAddress
     * @return Training
     */
    public function setTrainingAddress($trainingAddress)
    {
        $this->trainingAddress = $trainingAddress;

        return $this;
    }

    /**
     * Get trainingAddress
     *
     * @return string 
     */
    public function getTrainingAddress()
    {
        return $this->trainingAddress;
    }

    /**
     * Set trainingZipCode
     *
     * @param string $trainingZipCode
     * @return Training
     */
    public function setTrainingZipCode($trainingZipCode)
    {
        $this->trainingZipCode = $trainingZipCode;

        return $this;
    }

    /**
     * Get trainingZipCode
     *
     * @return string 
     */
    public function getTrainingZipCode()
    {
        return $this->trainingZipCode;
    }

    /**
     * Set trainingCity
     *
     * @param string $trainingCity
     * @return Training
     */
    public function setTrainingCity($trainingCity)
    {
        $this->trainingCity = $trainingCity;

        return $this;
    }

    /**
     * Get trainingCity
     *
     * @return string 
     */
    public function getTrainingCity()
    {
        return $this->trainingCity;
    }

    /**
     * Set trainingDate
     *
     * @param \DateTime $trainingDate
     * @return Training
     */
    public function setTrainingDate($trainingDate)
    {
        $this->trainingDate = $trainingDate;

        return $this;
    }

    /**
     * Get trainingDate
     *
     * @return \DateTime 
     */
    public function getTrainingDate()
    {
        return $this->trainingDate;
    }

    /**
     * Set trainingDescriptive
     *
     * @param string $trainingDescriptive
     * @return Training
     */
    public function setTrainingDescriptive($trainingDescriptive)
    {
        $this->trainingDescriptive = $trainingDescriptive;

        return $this;
    }

    /**
     * Get trainingDescriptive
     *
     * @return string 
     */
    public function getTrainingDescriptive()
    {
        return $this->trainingDescriptive;
    }
    /**
     * @var string
     */
    private $nameTraining;

    /**
     * @var string
     */
    private $qualification;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $adress;

    /**
     * @var string
     */
    private $user;


    /**
     * Set nameTraining
     *
     * @param string $nameTraining
     * @return Training
     */
    public function setNameTraining($nameTraining)
    {
        $this->nameTraining = $nameTraining;

        return $this;
    }

    /**
     * Get nameTraining
     *
     * @return string 
     */
    public function getNameTraining()
    {
        return $this->nameTraining;
    }

    /**
     * Set qualification
     *
     * @param string $qualification
     * @return Training
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * Get qualification
     *
     * @return string 
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Training
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return Training
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Training
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }
}
