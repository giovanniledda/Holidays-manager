<?php

namespace Zoba\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Zoba\StoreBundle\Entity\Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="Zoba\StoreBundle\Repository\CategoryRepository")
 */
class Category {

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
     */
    protected $products;


    public function __construct() {
        $this->products = new ArrayCollection();
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
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