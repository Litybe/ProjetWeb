<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HomePage
 */
class HomePage
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $homePageDesciptive;


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
     * Set homePageDesciptive
     *
     * @param string $homePageDesciptive
     * @return HomePage
     */
    public function setHomePageDesciptive($homePageDesciptive)
    {
        $this->homePageDesciptive = $homePageDesciptive;

        return $this;
    }

    /**
     * Get homePageDesciptive
     *
     * @return string 
     */
    public function getHomePageDesciptive()
    {
        return $this->homePageDesciptive;
    }
}
