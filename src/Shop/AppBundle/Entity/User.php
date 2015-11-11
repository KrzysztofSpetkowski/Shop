<?php

namespace Symfony\Bundle\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser
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
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user")
     */
    private $comments;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="createdBy")
     */
    private $orders;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="CommentVote", mappedBy="user"))
     */
    private $votes;
    
    public function __construct()
    {
        parent::__construct();
        $this->comments = new ArrayCollection();
        $this->orders = new ArrayCollection();
        $this->votes = new ArrayCollection();
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
