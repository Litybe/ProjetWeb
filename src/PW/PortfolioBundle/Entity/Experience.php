<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 */
class Experience
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $job;

    /**
     * @var string
     */
    private $firm;

    /**
     * @var string
     */
    private $mission;


    /**
     * @ORM\OneToMany(targetEntity="PW\Portfolio\Entity\Adress", mappedBy="experience")
     */
    private $adress;

    /**
     * @ORM\ManyToMany(targetEntity="PW\TrainingBundle\Entity\Skill", cascade={"persist"})
     */
    private $skill;

    /**
     * @ORM\ManyToMany(targetEntity="PW\TrainingBundle\Entity\Date", cascade={"persist"})
     */
    private $date;

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
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress(Address $adress)
    {
        $this->adress = $adress;
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
     * Set job
     *
     * @param string $job
     * @return Experience
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set firm
     *
     * @param string $firm
     * @return Experience
     */
    public function setFirm($firm)
    {
        $this->firm = $firm;

        return $this;
    }

    /**
     * Get firm
     *
     * @return string 
     */
    public function getFirm()
    {
        return $this->firm;
    }

    /**
     * Set mission
     *
     * @param string $mission
     * @return Experience
     */
    public function setMission($mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string 
     */
    public function getMission()
    {
        return $this->mission;
    }
}
