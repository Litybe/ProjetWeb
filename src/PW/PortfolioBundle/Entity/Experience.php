<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Experience
 *
 * @ORM\Table(name="experience")
 * @ORM\Entity(repositoryClass="PW\PortfolioBundle\Repository\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="ExperienceDate", type="string", length=255)
     */
    private $experienceDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ExperienceJob", type="string", length=255)
     */
    private $experienceJob;

    /**
     * @var string
     *
     * @ORM\Column(name="ExperienceCompagny", type="string", length=255)
     */
    private $experienceCompagny;

    /**
     * @var string
     *
     * @ORM\Column(name="ExperienceDetail", type="string", length=255)
     */
    private $experienceDetail;

    /**
     * @var string
     *
     * @ORM\Column(name="ExperienceAddress", type="string", length=255)
     */
    private $experienceAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="ExperienceZipCode", type="string", length=255)
     */
    private $experienceZipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="ExperienceCity", type="string", length=255)
     */
    private $experienceCity;


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
     * Set experienceDate
     *
     * @param string $experienceDate
     * @return Experience
     */
    public function setExperienceDate($experienceDate)
    {
        $this->experienceDate = $experienceDate;

        return $this;
    }

    /**
     * Get experienceDate
     *
     * @return string 
     */
    public function getExperienceDate()
    {
        return $this->experienceDate;
    }

    /**
     * Set experienceJob
     *
     * @param string $experienceJob
     * @return Experience
     */
    public function setExperienceJob($experienceJob)
    {
        $this->experienceJob = $experienceJob;

        return $this;
    }

    /**
     * Get experienceJob
     *
     * @return string 
     */
    public function getExperienceJob()
    {
        return $this->experienceJob;
    }

    /**
     * Set experienceCompagny
     *
     * @param string $experienceCompagny
     * @return Experience
     */
    public function setExperienceCompagny($experienceCompagny)
    {
        $this->experienceCompagny = $experienceCompagny;

        return $this;
    }

    /**
     * Get experienceCompagny
     *
     * @return string 
     */
    public function getExperienceCompagny()
    {
        return $this->experienceCompagny;
    }

    /**
     * Set experienceDetail
     *
     * @param string $experienceDetail
     * @return Experience
     */
    public function setExperienceDetail($experienceDetail)
    {
        $this->experienceDetail = $experienceDetail;

        return $this;
    }

    /**
     * Get experienceDetail
     *
     * @return string 
     */
    public function getExperienceDetail()
    {
        return $this->experienceDetail;
    }

    /**
     * Set experienceAddress
     *
     * @param string $experienceAddress
     * @return Experience
     */
    public function setExperienceAddress($experienceAddress)
    {
        $this->experienceAddress = $experienceAddress;

        return $this;
    }

    /**
     * Get experienceAddress
     *
     * @return string 
     */
    public function getExperienceAddress()
    {
        return $this->experienceAddress;
    }

    /**
     * Set experienceZipCode
     *
     * @param string $experienceZipCode
     * @return Experience
     */
    public function setExperienceZipCode($experienceZipCode)
    {
        $this->experienceZipCode = $experienceZipCode;

        return $this;
    }

    /**
     * Get experienceZipCode
     *
     * @return string 
     */
    public function getExperienceZipCode()
    {
        return $this->experienceZipCode;
    }

    /**
     * Set experienceCity
     *
     * @param string $experienceCity
     * @return Experience
     */
    public function setExperienceCity($experienceCity)
    {
        $this->experienceCity = $experienceCity;

        return $this;
    }

    /**
     * Get experienceCity
     *
     * @return string 
     */
    public function getExperienceCity()
    {
        return $this->experienceCity;
    }
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
