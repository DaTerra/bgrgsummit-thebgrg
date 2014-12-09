<?php
namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_membership")
 */
class Usermembership
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Siteweb\UserBundle\Entity\User", inversedBy="usermembership",cascade={"all"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $activated;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $expiration;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $public;

    /**
     * @ORM\OneToOne(targetEntity="Siteweb\FrontBundle\Entity\PaymentDetails")
     * @ORM\JoinColumn(name="payment_id", referencedColumnName="id", nullable=true)
     **/
    private $payment;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $status;
    /**
     * @ORM\ManyToOne(targetEntity="Usermembershiptype", inversedBy="usermemberships")
     * @ORM\JoinColumn(name="usermembershiptype_id", referencedColumnName="id", nullable=true)
     */
    private $usermembershiptype;

    /**
     * Set id
     *
     * @param string $id
     * @return Usermembership
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set created
     *
     * @param \DateTime $created
     * @return Usermembership
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set activated
     *
     * @param \DateTime $activated
     * @return Usermembership
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;

        return $this;
    }

    /**
     * Get activated
     *
     * @return \DateTime 
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Set expiration
     *
     * @param \DateTime $expiration
     * @return Usermembership
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
     * Set public
     *
     * @param boolean $public
     * @return Usermembership
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
    }

    /**
     * Get public
     *
     * @return boolean 
     */
    public function getPublic()
    {
        return $this->public;
    }



    /**
     * Set status
     *
     * @param string $status
     * @return Usermembership
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \Siteweb\UserBundle\Entity\User $user
     * @return Usermembership
     */
    public function setUser(\Siteweb\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Siteweb\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set usermembershiptype
     *
     * @param \Siteweb\BackBundle\Entity\Usermembershiptype $usermembershiptype
     * @return Usermembership
     */
    public function setUsermembershiptype(\Siteweb\BackBundle\Entity\Usermembershiptype $usermembershiptype = null)
    {
        $this->usermembershiptype = $usermembershiptype;

        return $this;
    }

    /**
     * Get usermembershiptype
     *
     * @return \Siteweb\BackBundle\Entity\Usermembershiptype 
     */
    public function getUsermembershiptype()
    {
        return $this->usermembershiptype;
    }

    /**
     * Set payment
     *
     * @param \Siteweb\FrontBundle\Entity\PaymentDetails $payment
     * @return Usermembership
     */
    public function setPayment(\Siteweb\FrontBundle\Entity\PaymentDetails $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \Siteweb\FrontBundle\Entity\PaymentDetails 
     */
    public function getPayment()
    {
        return $this->payment;
    }
}