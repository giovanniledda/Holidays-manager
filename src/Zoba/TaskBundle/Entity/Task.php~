<?php

namespace Zoba\TaskBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Zoba\TaskBundle\Repository\TaskRepository")
 * @ORM\Table(name="task")
 */
class Task {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=180)
     * @Assert\NotBlank()
     */
    protected $task;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\NotBlank()
     */
    protected $due_date;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set task
     *
     * @param string $task
     */
    public function setTask($task) {
        $this->task = $task;
    }

    /**
     * Get task
     *
     * @return string 
     */
    public function getTask() {
        return $this->task;
    }

    /**
     * Set due_date
     *
     * @param datetime $due_date
     */
    public function setDueDate($due_date) {
        $this->due_date = $due_date;
    }

    /**
     * Get dueDate
     *
     * @return datetime 
     */
    public function getDueDate() {
        return $this->due_date;
    }

    /**
     * Get task 
     *
     * @return string 
     */
    public function getDescription() {
        return $this->getTask();
    }

}