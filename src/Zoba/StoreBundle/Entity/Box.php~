<?php

namespace Zoba\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zoba\StoreBundle\Entity\Box
 *
 * @ORM\Table(name="box")
 * @ORM\Entity(repositoryClass="Zoba\StoreBundle\Repository\BoxRepository")
 */
class Box {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="boxes")
     */
    protected $products;

    /**
     * @var string $name
     * 
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Add products
     *
     * @param Zoba\StoreBundle\Entity\Product $products
     */
    public function addProduct(\Zoba\StoreBundle\Entity\Product $products) {
        $this->products[] = $products;
    }

    /**
     * Get products
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProducts() {
        return $this->products;
    }

}