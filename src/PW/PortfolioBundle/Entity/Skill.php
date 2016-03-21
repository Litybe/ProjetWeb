<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\Column(name="SkillName", type="string", length=255, unique=true)
     */
    private $skillName;

    /**
     * @var string
     */
    private $skillMastery;

    /**
     * @ORM\ManyToMany(targetEntity="PW\PortfolioBundle\Entity\SkillGroup", cascade={"persist"})
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
