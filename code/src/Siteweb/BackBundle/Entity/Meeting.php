<?php

namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meeting
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Meeting
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
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    /**
     * @ORM\ManyToOne(targetEntity="Siteweb\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="proposer_id", referencedColumnName="id")
     */
    private $proposer;

    /**
     * @ORM\ManyToOne(targetEntity="Siteweb\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="invitee_id", referencedColumnName="id")
     */
    private $invitee;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


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
     * Set location
     *
     * @param string $location
     * @return Meeting
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Meeting
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Meeting
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
     * Set proposer
     *
     * @param \Siteweb\UserBundle\Entity\User $proposer
     * @return Meeting
     */
    public function setProposer(\Siteweb\UserBundle\Entity\User $proposer = null)
    {
        $this->proposer = $proposer;

        return $this;
    }

    /**
     * Get proposer
     *
     * @return \Siteweb\UserBundle\Entity\User 
     */
    public function getProposer()
    {
        return $this->proposer;
    }

    /**
     * Set invitee
     *
     * @param \Siteweb\UserBundle\Entity\User $invitee
     * @return Meeting
     */
    public function setInvitee(\Siteweb\UserBundle\Entity\User $invitee = null)
    {
        $this->invitee = $invitee;

        return $this;
    }

    /**
     * Get invitee
     *
     * @return \Siteweb\UserBundle\Entity\User 
     */
    public function getInvitee()
    {
        return $this->invitee;
    }
}
