<?php

namespace Zoba\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface as UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface as AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Zoba\UserBundle\Entity\User
 *
 * @ORM\Table(name="zoba_users")
 * @ORM\Entity(repositoryClass="Zoba\UserBundle\Repository\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @ORM\ManyToMany(targetEntity="UserGroup", inversedBy="users")
     *
     */
    private $groups;

    public function __construct() {
        $this->groups = new ArrayCollection();
        $this->is_active = true;
        $this->salt = md5(uniqid(null, true));
    }

    public function getRoles() {
        return $this->groups->toArray();
    }

    /**
     * @inheritDoc
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        
    }

    /**
     * @inheritDoc
     */
    public function equals(UserInterface $user) {
        return $this->username === $user->getUsername();
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->is_active;
    }

    /**
     * serialize the username
     * @return serialize
     */
    public function serialize() {
        return serialize($this->username);
    }

    /**
     * unserialize
     * @param $data 
     */
    public function unserialize($data) {
        $this->username = unserialize($data);
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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Add groups
     *
     * @param Zoba\UserBundle\Entity\Group $groups
     */
    public function addGroup(\Zoba\UserBundle\Entity\Group $groups)
    {
        $this->groups[] = $groups;
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add groups
     *
     * @param Zoba\UserBundle\Entity\UserGroup $groups
     */
    public function addUserGroup(\Zoba\UserBundle\Entity\UserGroup $groups)
    {
        $this->groups[] = $groups;
    }
}