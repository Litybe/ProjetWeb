<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 *
 * @ORM\Table(name="skill")
 * @ORM\Entity(repositoryClass="PW\PortfolioBundle\Repository\SkillRepository")
 */
class Skill
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
     * @ORM\Column(name="SkillName", type="string", length=255)
     */
    private $skillName;

    /**
     * @ORM\ManyToOne(targetEntity="PW\Portfolio\Entity\SkillGroup", mappedBy="skillList")
     */
    private $skillGroup;

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
    public function setSkillGroup($skillGroup)
    {
        $this->skillGroup = $skillGroup;
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
     * Set skillName
     *
     * @param string $skillName
     * @return Skill
     */
    public function setSkillName($skillName)
    {
        $this->skillName = $skillName;

        return $this;
    }

    /**
     * Get skillName
     *
     * @return string
     */
    public function getSkillName()
    {
        return $this->skillName;
    }

    /**
     * @var string
     */
    private $nameSkill;

    /**
     * @var string
     */
    private $skillMastery;


    /**
     * Set nameSkill
     *
     * @param string $nameSkill
     * @return Skill
     */
    public function setNameSkill($nameSkill)
    {
        $this->nameSkill = $nameSkill;

        return $this;
    }

    /**
     * Get nameSkill
     *
     * @return string
     */
    public function getNameSkill()
    {
        return $this->nameSkill;
    }

    /**
     * Set skillMastery
     *
     * @param string $skillMastery
     * @return Skill
     */
    public function setSkillMastery($skillMastery)
    {
        $this->skillMastery = $skillMastery;

        return $this;
    }

    /**
     * Get skillMastery
     *
     * @return string
     */
    public function getSkillMastery()
    {
        return $this->skillMastery;
    }
}
