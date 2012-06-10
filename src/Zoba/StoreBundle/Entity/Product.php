<?php

namespace Zoba\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="Zoba\StoreBundle\Repository\ProductRepository")
 */
class Product {

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $price;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $rating = 0;

    /**
     * @ORM\Column(type="integer")
     */
    protected $rate_number = 0;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\OneToOne(targetEntity="Shipping")
     * @ORM\JoinColumn(name="shipping_id", referencedColumnName="id")
     */
    protected $shipping;

    /**
     * @ORM\ManyToMany(targetEntity="Box", inversedBy="products")
     * @ORM\JoinTable(name="products_boxes")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $boxes;

    public function __construct() {
        $this->boxes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set price
     *
     * @param decimal $price
     */
    public function setPrice($price) {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return decimal 
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set category
     *
     * @param Zoba\StoreBundle\Entity\Category $category
     */
    public function setCategory(\Zoba\StoreBundle\Entity\Category $category) {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Zoba\StoreBundle\Entity\Category 
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set shipping
     *
     * @param Zoba\StoreBundle\Entity\Shipping $shipping
     */
    public function setShipping(\Zoba\StoreBundle\Entity\Shipping $shipping) {
        $this->shipping = $shipping;
    }

    /**
     * Get shipping
     *
     * @return Zoba\StoreBundle\Entity\Shipping 
     */
    public function getShipping() {
        return $this->shipping;
    }

    /**
     * Add a box
     *
     * @param Zoba\StoreBundle\Entity\Box $box
     */
    public function addBox(\Zoba\StoreBundle\Entity\Box $box) {

        $box->addProduct($this); // synchronously updating inverse side
        $this->boxes[] = $box;
    }

    /**
     * Get boxes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBoxes() {
        return $this->boxes;
    }

    /**
     * Set rating
     *
     * @param decimal $rating
     */
    public function setRating($rating) {
        $this->rating = $rating;
    }

    /**
     * Get rating
     *
     * @return decimal 
     */
    public function getRating() {
        return $this->rating;
    }

    /**
     * Set rate_number
     *
     * @param integer $rateNumber
     */
    public function setRateNumber($rateNumber) {
        $this->rate_number = $rateNumber;
    }

    /**
     * Get rate_number
     *
     * @return integer 
     */
    public function getRateNumber() {
        return $this->rate_number;
    }

}