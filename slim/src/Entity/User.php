<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

use Model\Base;

/**
 * @ORM\Entity
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}))
 */
class User extends Base
{
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $avatar;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $slug;

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getFirstname() : string
    {
        return $this->firstname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getLastname() : string
    {
        return $this->lastname;
    }

    /**
     * Set the User username
     *
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * Get User username
     *
     * @ORM\return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * Get User slug
     *
     * @ORM\return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get User avatar
     *
     * @ORM\return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
