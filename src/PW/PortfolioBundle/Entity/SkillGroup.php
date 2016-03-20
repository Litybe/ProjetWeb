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
     * @ORM\Column(name="SkillGroupName", type="string", length=255)
     */
    private $skillGroupName;

    /**
     * @var string
     */
    private $nameSkillGroup;

    /**
     * @ORM\OneToMany(targetEntity="PW\Portfolio\Entity\SkillGroup", mappedBy="skillGroup")
     */
    private $skillList;

    public function __construct()
    {
        $this->skillList = new ArrayCollection();
    }

    public function addSkillGroup(SkillGroup $skillList)
    {
        $this->skillList[] = $skillList;
        return $this;
    }

    public function removeSkillList(SkillGroup $skillList)
    {
        $this->skillList->removeElement($skillList);
    }

    public function getSkillList()
    {
        return $this->skillList;
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
