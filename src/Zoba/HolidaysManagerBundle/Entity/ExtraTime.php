<?php

namespace Zoba\HolidaysManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="extra_time")
 * @ORM\Entity(repositoryClass="Zoba\HolidaysManagerBundle\Repository\ExtraTimeRepository")
 */
class ExtraTime {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */
    protected $date;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $hours = 0;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date) {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set hours
     *
     * @param decimal $hours
     */
    public function setHours($hours) {
        $this->hours = $hours;
    }

    /**
     * Get hours
     *
     * @return decimal 
     */
    public function getHours() {
        return $this->hours;
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

}