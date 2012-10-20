<?php

namespace Zoba\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface as UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface as AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface as EquatableInterface;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Zoba\UserBundle\Entity\User
 *
 * @ORM\Entity(repositoryClass="Zoba\UserBundle\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements AdvancedUserInterface, EquatableInterface, \Serializable {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $is_active;

    public function __construct() {
        parent::__construct();

        $this->groups = new ArrayCollection();
        $this->is_active = true;
        $this->salt = md5(uniqid(null, true));
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        
    }

    public function isEqualTo(UserInterface $user) {
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
    public function getId() {
        return $this->id;
    }

    /**
     * Set is_active
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive) {
        $this->is_active = $isActive;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive() {
        return $this->is_active;
    }

    

}