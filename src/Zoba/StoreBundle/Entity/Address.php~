<?php

namespace Zoba\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zoba\StoreBundle\Entity\Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity(repositoryClass="Zoba\StoreBundle\Repository\AddressRepository")
 */
class Address {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $address
     */
    private $address;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address) {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress() {
        return $this->address;
    }

}