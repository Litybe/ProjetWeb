<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PW\UserBundle\Entity\User;

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
     * @ORM\ManyToOne(targetEntity="PW\UserBundle\Entity\User", mappedBy="theme"})
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
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
