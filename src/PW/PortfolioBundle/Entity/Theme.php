<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 */
class Theme
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nameTheme;


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
     * Set nameTheme
     *
     * @param string $nameTheme
     * @return Theme
     */
    public function setNameTheme($nameTheme)
    {
        $this->nameTheme = $nameTheme;

        return $this;
    }

    /**
     * Get nameTheme
     *
     * @return string 
     */
    public function getNameTheme()
    {
        return $this->nameTheme;
    }
}
