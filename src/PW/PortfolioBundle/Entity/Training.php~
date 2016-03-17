<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Training
 */
class Training
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameTraining;

    /**
     * @var string
     */
    private $qualification;

    /**
     * @var string
     */
    private $trainingDescriptive;

    /**
     * @ORM\OneToOne(targetEntity="PW\Portfolio\Entity\Date", cascade={"persist"})
     */
    private $date;

    /**
     * @ORM\OneToOne(targetEntity="PW\Portfolio\Entity\Adress", cascade={"persist"})
     */
    private $adress;

    /**
     * @ORM\OneToOne(targetEntity="PW\User\Entity\User", cascade={"persist"})
     */
    private $user;

    public function __construct()
    {
        $this->date = new Date();
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
     * @param  Date $date
     * @return Training
     */
    public function setDate(Date $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     * @return Date
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
