<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Date
 */
class Date
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * @ORM\ManyToOne(targetEntity="PW\Portfolio\Entity\Project", mappedBy="address")
     */
    private $project;

    public function __construct()
    {
        $this->dateTime = new Date();
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
     * Set dateTime
     *
     * @param \DateTime $dateTime
     * @return Date
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * Get dateTime
     *
     * @return \DateTime 
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return Date
     */
    public function setProject(Project $project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @var string
     */
    private $experience;

    /**
     * @var string
     */
    private $training;

    /**
     * @var string
     */
    private $user;


    /**
     * Set experience
     *
     * @param string $experience
     * @return Date
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set training
     *
     * @param string $training
     * @return Date
     */
    public function setTraining($training)
    {
        $this->training = $training;

        return $this;
    }

    /**
     * Get training
     *
     * @return string 
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Date
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
