<?php

namespace Zoba\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zoba\StoreBundle\Entity\Shipping
 *
 * @ORM\Table(name="shipping")
 * @ORM\Entity(repositoryClass="Zoba\StoreBundle\Repository\ShippingRepository")
 */
class Shipping {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumn(name="address_id", referencedColumnName="id")
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
     * @param Zoba\StoreBundle\Entity\Address $address
     * @param string $address_str
     */
    public function setAddress(\Zoba\StoreBundle\Entity\Address $address, $address_str = null) {
        $this->address = $address_str ? $address->setAddress($address_str) : $address;
    }


    /**
     * Get address
     *
     * @return Zoba\StoreBundle\Entity\Address 
     */
    public function getAddress() {
        return $this->address;
    }

}