<?php

namespace Symfony\Bundle\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="string", length=255)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="orders", type="string", length=255)
     */
    private $orders;

    /**
     * @var string
     *
     * @ORM\Column(name="votes", type="string", length=255)
     */
    private $votes;


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
     * Set comments
     *
     * @param string $comments
     * @return User
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set orders
     *
     * @param string $orders
     * @return User
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return string 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set votes
     *
     * @param string $votes
     * @return User
     */
    public function setVotes($votes)
    {
        $this->votes = $votes;

        return $this;
    }

    /**
     * Get votes
     *
     * @return string 
     */
    public function getVotes()
    {
        return $this->votes;
    }
}
