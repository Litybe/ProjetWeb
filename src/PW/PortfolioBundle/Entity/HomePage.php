<?php

namespace PW\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PW\UserBundle\Entity\User;

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
     * @ORM\OneToOne(targetEntity="PW\User\Entity\User", cascade={"persist"})
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="PW\TrainingBundle\Entity\Image", mappedBy="homePage"})
     *
    private $image;
*/
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
     * @return mixed
     *
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     *
    public function setImage(Image $image)
    {
        $this->image = $image;
    }*/

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
