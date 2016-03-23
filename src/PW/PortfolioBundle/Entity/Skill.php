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
     * @ORM\Column(name="Skill_Name", type="string", length=255, unique=true)
     */
    private $skillName;

    /**
     * @var int
     * @ORM\Column(name="Skill_Mastery", type="integer", length=255, unique=false)
     */
    private $skillMastery;

    /**
     * @var int
     *@ORM\Column(name="Skill_Order", type="integer", length=255, unique=false, nullable = true)
    */
    private $skillOrder;

    /**
     * @return int
     */
    public function getSkillOrder()
    {
        return $this->skillOrder;
    }

    /**
     * @param int $skillOrder
     */
    public function setSkillOrder($skillOrder)
    {
        $this->skillOrder = $skillOrder;
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
