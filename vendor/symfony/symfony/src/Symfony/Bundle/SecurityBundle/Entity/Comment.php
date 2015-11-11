<?php

namespace Symfony\Bundle\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbVoteUp", type="smallint")
     */
    private $nbVoteUp;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbVoteDown", type="integer")
     */
    private $nbVoteDown;

    /**
     * @var string
     *
     * @ORM\Column(name="product", type="string", length=255)
     */
    private $product;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

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
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Comment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set nbVoteUp
     *
     * @param integer $nbVoteUp
     * @return Comment
     */
    public function setNbVoteUp($nbVoteUp)
    {
        $this->nbVoteUp = $nbVoteUp;

        return $this;
    }

    /**
     * Get nbVoteUp
     *
     * @return integer 
     */
    public function getNbVoteUp()
    {
        return $this->nbVoteUp;
    }

    /**
     * Set nbVoteDown
     *
     * @param integer $nbVoteDown
     * @return Comment
     */
    public function setNbVoteDown($nbVoteDown)
    {
        $this->nbVoteDown = $nbVoteDown;

        return $this;
    }

    /**
     * Get nbVoteDown
     *
     * @return integer 
     */
    public function getNbVoteDown()
    {
        return $this->nbVoteDown;
    }

    /**
     * Set product
     *
     * @param string $product
     * @return Comment
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return string 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Comment
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set votes
     *
     * @param string $votes
     * @return Comment
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
