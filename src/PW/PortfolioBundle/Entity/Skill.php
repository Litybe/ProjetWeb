<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skill
 */
class Skill
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameSkill;

    /**
     * @var string
     */
    private $skillMastery;

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
