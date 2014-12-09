<?php
namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="user_membership_type")
 */
class Usermembershiptype
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expiration;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;

    /**
     * @ORM\OneToMany(targetEntity="Usermembership", mappedBy="usermembershiptype" , cascade={"all"})
     */
    private $usermemberships;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usermemberships = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Usermembershiptype
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Usermembershiptype
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Usermembershiptype
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set expiration
     *
     * @param \DateTime $expiration
     * @return Usermembershiptype
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return \DateTime 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Usermembershiptype
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Usermembershiptype
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Add usermemberships
     *
     * @param \Siteweb\BackBundle\Entity\Usermembership $usermemberships
     * @return Usermembershiptype
     */
    public function addUsermembership(\Siteweb\BackBundle\Entity\Usermembership $usermemberships)
    {
        $this->usermemberships[] = $usermemberships;

        return $this;
    }

    /**
     * Remove usermemberships
     *
     * @param \Siteweb\BackBundle\Entity\Usermembership $usermemberships
     */
    public function removeUsermembership(\Siteweb\BackBundle\Entity\Usermembership $usermemberships)
    {
        $this->usermemberships->removeElement($usermemberships);
    }

    /**
     * Get usermemberships
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsermemberships()
    {
        return $this->usermemberships;
    }
}
