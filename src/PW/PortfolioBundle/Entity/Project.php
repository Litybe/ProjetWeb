<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="PW\PortfolioBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="ProjectName", type="string", length=255)
     */
    private $projectName;

    /**
     * @var string
     *
     * @ORM\Column(name="ProjectDescriptive", type="string", length=255)
     */
    private $projectDescriptive;

    /**
     * @var string
     *
     * @ORM\Column(name="ProjectImage", type="string", length=255)
     */
    private $projectImage;

    /**
     * @var string
     *
     * @ORM\Column(name="ProjectLink", type="string", length=255)
     */
    private $projectLink;


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
     * Set projectName
     *
     * @param string $projectName
     * @return Project
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string 
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set projectDescriptive
     *
     * @param string $projectDescriptive
     * @return Project
     */
    public function setProjectDescriptive($projectDescriptive)
    {
        $this->projectDescriptive = $projectDescriptive;

        return $this;
    }

    /**
     * Get projectDescriptive
     *
     * @return string 
     */
    public function getProjectDescriptive()
    {
        return $this->projectDescriptive;
    }

    /**
     * Set projectImage
     *
     * @param string $projectImage
     * @return Project
     */
    public function setProjectImage($projectImage)
    {
        $this->projectImage = $projectImage;

        return $this;
    }

    /**
     * Get projectImage
     *
     * @return string 
     */
    public function getProjectImage()
    {
        return $this->projectImage;
    }

    /**
     * Set projectLink
     *
     * @param string $projectLink
     * @return Project
     */
    public function setProjectLink($projectLink)
    {
        $this->projectLink = $projectLink;

        return $this;
    }

    /**
     * Get projectLink
     *
     * @return string 
     */
    public function getProjectLink()
    {
        return $this->projectLink;
    }
    /**
     * @var string
     */
    private $nameProject;

    /**
     * @var string
     */
    private $linkProject;


    /**
     * Set nameProject
     *
     * @param string $nameProject
     * @return Project
     */
    public function setNameProject($nameProject)
    {
        $this->nameProject = $nameProject;

        return $this;
    }

    /**
     * Get nameProject
     *
     * @return string 
     */
    public function getNameProject()
    {
        return $this->nameProject;
    }

    /**
     * Set linkProject
     *
     * @param string $linkProject
     * @return Project
     */
    public function setLinkProject($linkProject)
    {
        $this->linkProject = $linkProject;

        return $this;
    }

    /**
     * Get linkProject
     *
     * @return string 
     */
    public function getLinkProject()
    {
        return $this->linkProject;
    }
}
