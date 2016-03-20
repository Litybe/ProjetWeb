<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Theme
 *
 * @ORM\Table(name="theme")
 * @ORM\Entity(repositoryClass="PW\PortfolioBundle\Repository\ThemeRepository")
 */
class Theme
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
     * @ORM\Column(name="ThemeName", type="string", length=255)
     */
    private $themeName;

    /**
     * @var string
     *
     * @ORM\Column(name="ThemeImage", type="string", length=255)
     */
    private $themeImage;

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
    public function setUser($user)
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
     * Set themeName
     *
     * @param string $themeName
     * @return Theme
     */
    public function setThemeName($themeName)
    {
        $this->themeName = $themeName;

        return $this;
    }

    /**
     * Get themeName
     *
     * @return string 
     */
    public function getThemeName()
    {
        return $this->themeName;
    }

    /**
     * Set themeImage
     *
     * @param string $themeImage
     * @return Theme
     */
    public function setThemeImage($themeImage)
    {
        $this->themeImage = $themeImage;

        return $this;
    }

    /**
     * Get themeImage
     *
     * @return string 
     */
    public function getThemeImage()
    {
        return $this->themeImage;
    }
    /**
     * @var string
     */
    private $nameTheme;


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
