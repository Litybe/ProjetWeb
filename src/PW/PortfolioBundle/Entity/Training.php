<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="Training")
 * @ORM\Entity(repositoryClass="PW\PortfolioBundle\Repository\FormationRepository")
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
     * @ORM\Column(name="name_training", type="string", length=255)
     */
    private $nameTraining;

    /**
     * @var string
     *
     * @ORM\Column(name="qualification", type="string", length=255)
     */
    private $qualification;

    /**
     * @var string
     *
     * @ORM\Column(name="training_descriptive", type="string", length=255)
     */
    private $trainingDescriptive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;


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
     * Set address
     *
     * @param string $address
     * @return Training
     */
    public function setAddress($address)
    {
        $this->adress = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
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
