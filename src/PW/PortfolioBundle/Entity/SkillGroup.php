<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SkillGroup
 *
 * @ORM\Table(name="skill_groupe")
 * @ORM\Entity(repositoryClass="PW\PortfolioBundle\Repository\SkillGroupRepository")
 */
class SkillGroup
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
     * @ORM\Column(name="SkillGroupName", type="string", length=255, unique=true)
     */
    private $skillGroupName;

    /**
     * SkillGroup constructor.
     */
    private $skill;


    public function __construct()
    {
        $this->skills = new ArrayCollection();
    }

    public function addSkill(SkillGroup $skills)
    {
        $this->skills[] = $skills;
        return $this;
    }

    public function removeSkill(SkillGroup $skills)
    {
        $this->skills->removeElement($skills);
    }

    public function getSkills()
    {
        return $this->skills;
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
     * Set skillGroupName
     *
     * @param string $skillGroupName
     * @return SkillGroup
     */
    public function setSkillGroupName($skillGroupName)
    {
        $this->skillGroupName = $skillGroupName;

        return $this;
    }

    /**
     * Get skillGroupeName
     *
     * @return string
     */
    public function getSkillGroupName()
    {
        return $this->skillGroupName;
    }
}
