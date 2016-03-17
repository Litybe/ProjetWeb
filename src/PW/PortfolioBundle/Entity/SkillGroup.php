<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SkillGroup
 */
class SkillGroup
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameSkillGroup;

    /**
     * @ORM\ManyToMany(targetEntity="PW\Portfolio\Entity\Skill", cascade={"persist"})
     */
    private $skill;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameSkillGroup
     *
     * @param string $nameSkillGroup
     * @return SkillGroup
     */
    public function setNameSkillGroup($nameSkillGroup)
    {
        $this->nameSkillGroup = $nameSkillGroup;

        return $this;
    }

    /**
     * Get nameSkillGroup
     *
     * @return string 
     */
    public function getNameSkillGroup()
    {
        return $this->nameSkillGroup;
    }
}
