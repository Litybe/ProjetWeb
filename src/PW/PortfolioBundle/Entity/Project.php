<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameProject;

    /**
     * @var string
     */
    private $projectDescriptive;

    /**
     * @var string
     */
    private $linkProject;

    /**
     * @ORM\OneToMany(targetEntity="PW\Portfolio\Entity\Date", mappedBy="project")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity="PW\Portfolio\Entity\Image", cascade={"persist"})
     */
    private $image;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate(Date $date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage(Image $image)
    {
        $this->image = $image;
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
