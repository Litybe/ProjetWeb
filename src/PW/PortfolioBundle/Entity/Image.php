<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $srcImage;

    /**
     * @var string
     */
    private $altImage;

   /* /**
     * @ORM\ManyToOne(targetEntity="PW\TrainingBundle\Entity\HomePage", mappedBy="image"})
     *
    private $homePage;*/

    /**
     * @return mixed
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * @param mixed $homePage
     */
    public function setHomePage(HomePage $homePage)
    {
        $this->homePage = $homePage;
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
     * Set srcImage
     *
     * @param string $srcImage
     * @return Image
     */
    public function setSrcImage($srcImage)
    {
        $this->srcImage = $srcImage;

        return $this;
    }

    /**
     * Get srcImage
     *
     * @return string 
     */
    public function getSrcImage()
    {
        return $this->srcImage;
    }

    /**
     * Set altImage
     *
     * @param string $altImage
     * @return Image
     */
    public function setAltImage($altImage)
    {
        $this->altImage = $altImage;

        return $this;
    }

    /**
     * Get altImage
     *
     * @return string 
     */
    public function getAltImage()
    {
        return $this->altImage;
    }
}
