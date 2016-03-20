<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\ManyToMany(targetEntity="PW\Portfolio\Entity\SkillGroup", cascade={"persist"})
     */
    private $skillGroup;

    public function __construct()
    {
        $this->skillGroup = new ArrayCollection();
    }

    public function addCategory(SkillGroup $skillGroup)
    {
        // Ici, on utilise l'ArrayCollection vraiment comme un tableau
        $this->skillGroup[] = $skillGroup;
        return $this;
    }

    public function removeCategory(SkillGroup $skillGroup)
    {
        // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
        $this->skillGroup->removeElement($skillGroup);
    }

    // Notez le pluriel, on récupère une liste de catégories ici !
    public function getCategories()
    {
        return $this->skillGroup;
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
