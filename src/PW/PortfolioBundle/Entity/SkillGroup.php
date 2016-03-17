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
