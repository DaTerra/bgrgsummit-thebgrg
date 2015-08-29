<?php

namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scolarshiprequests
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Scolarshiprequests
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
     * @var boolean
     *
     * @ORM\Column(name="previousscolarship", type="boolean")
     */
    private $previousscolarship;

    /**
     * @var boolean
     *
     * @ORM\Column(name="summitabstract", type="boolean")
     */
    private $summitabstract;

    /**
     * @var string
     *
     * @ORM\Column(name="summitabsracttitle", type="string", length=255)
     */
    private $summitabsracttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="summitabstractauthor", type="string", length=255)
     */
    private $summitabstractauthor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="naesmabstract", type="boolean")
     */
    private $naesmabstract;

    /**
     * @var string
     *
     * @ORM\Column(name="naesmabstracttitle", type="string", length=255)
     */
    private $naesmabstracttitle;

    /**
     * @ORM\OneToOne(targetEntity="Siteweb\UserBundle\Entity\User", inversedBy="scolarshiprequest",cascade={"all"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Scolarships", mappedBy="scolarshiprequest",cascade={"all"})
     */
    private $scolarships;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $scholarship;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $accomodations;

    /**
     * @var string
     *
     * @ORM\Column(name="naesmabstractauthor", type="string", length=255)
     */
    private $naesmabstractauthor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->scolarships = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scholarship = array();
        $this->accomodations = array();
        $this->setStatus('Pending');
    }

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text")
     */
    private $reason;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="text")
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="plans", type="string", length=255)
     */
    private $plans;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
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
     * Set previousscolarship
     *
     * @param boolean $previousscolarship
     * @return Scolarshiprequests
     */
    public function setPreviousscolarship($previousscolarship)
    {
        $this->previousscolarship = $previousscolarship;

        return $this;
    }

    /**
     * Get previousscolarship
     *
     * @return boolean 
     */
    public function getPreviousscolarship()
    {
        return $this->previousscolarship;
    }

    /**
     * Set summitabstract
     *
     * @param boolean $summitabstract
     * @return Scolarshiprequests
     */
    public function setSummitabstract($summitabstract)
    {
        $this->summitabstract = $summitabstract;

        return $this;
    }

    /**
     * Get summitabstract
     *
     * @return boolean 
     */
    public function getSummitabstract()
    {
        return $this->summitabstract;
    }

    /**
     * Set summitabsracttitle
     *
     * @param string $summitabsracttitle
     * @return Scolarshiprequests
     */
    public function setSummitabsracttitle($summitabsracttitle)
    {
        $this->summitabsracttitle = $summitabsracttitle;

        return $this;
    }

    /**
     * Get summitabsracttitle
     *
     * @return string 
     */
    public function getSummitabsracttitle()
    {
        return $this->summitabsracttitle;
    }

    /**
     * Set summitabstractauthor
     *
     * @param string $summitabstractauthor
     * @return Scolarshiprequests
     */
    public function setSummitabstractauthor($summitabstractauthor)
    {
        $this->summitabstractauthor = $summitabstractauthor;

        return $this;
    }

    /**
     * Get summitabstractauthor
     *
     * @return string 
     */
    public function getSummitabstractauthor()
    {
        return $this->summitabstractauthor;
    }

    /**
     * Set naesmabstract
     *
     * @param boolean $naesmabstract
     * @return Scolarshiprequests
     */
    public function setNaesmabstract($naesmabstract)
    {
        $this->naesmabstract = $naesmabstract;

        return $this;
    }

    /**
     * Get naesmabstract
     *
     * @return boolean 
     */
    public function getNaesmabstract()
    {
        return $this->naesmabstract;
    }

    /**
     * Set naesmabstracttitle
     *
     * @param string $naesmabstracttitle
     * @return Scolarshiprequests
     */
    public function setNaesmabstracttitle($naesmabstracttitle)
    {
        $this->naesmabstracttitle = $naesmabstracttitle;

        return $this;
    }

    /**
     * Get naesmabstracttitle
     *
     * @return string 
     */
    public function getNaesmabstracttitle()
    {
        return $this->naesmabstracttitle;
    }

    /**
     * Set scholarship
     *
     * @param array $scholarship
     * @return Scolarshiprequests
     */
    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;

        return $this;
    }

    /**
     * Get scholarship
     *
     * @return array 
     */
    public function getScholarship()
    {
        return $this->scholarship;
    }

    /**
     * Set accomodations
     *
     * @param array $accomodations
     * @return Scolarshiprequests
     */
    public function setAccomodations($accomodations)
    {
        $this->accomodations = $accomodations;

        return $this;
    }

    /**
     * Get accomodations
     *
     * @return array 
     */
    public function getAccomodations()
    {
        return $this->accomodations;
    }

    /**
     * Set naesmabstractauthor
     *
     * @param string $naesmabstractauthor
     * @return Scolarshiprequests
     */
    public function setNaesmabstractauthor($naesmabstractauthor)
    {
        $this->naesmabstractauthor = $naesmabstractauthor;

        return $this;
    }

    /**
     * Get naesmabstractauthor
     *
     * @return string 
     */
    public function getNaesmabstractauthor()
    {
        return $this->naesmabstractauthor;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return Scolarshiprequests
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set experience
     *
     * @param string $experience
     * @return Scolarshiprequests
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string 
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set plans
     *
     * @param string $plans
     * @return Scolarshiprequests
     */
    public function setPlans($plans)
    {
        $this->plans = $plans;

        return $this;
    }

    /**
     * Get plans
     *
     * @return string 
     */
    public function getPlans()
    {
        return $this->plans;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Scolarshiprequests
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
     * @return Scolarshiprequests
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
     * Add scolarships
     *
     * @param \Siteweb\BackBundle\Entity\Scolarships $scolarships
     * @return Scolarshiprequests
     */
    public function addScolarship(\Siteweb\BackBundle\Entity\Scolarships $scolarships)
    {
        $this->scolarships[] = $scolarships;

        return $this;
    }

    /**
     * Remove scolarships
     *
     * @param \Siteweb\BackBundle\Entity\Scolarships $scolarships
     */
    public function removeScolarship(\Siteweb\BackBundle\Entity\Scolarships $scolarships)
    {
        $this->scolarships->removeElement($scolarships);
    }

    /**
     * Get scolarships
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getScolarships()
    {
        return $this->scolarships;
    }
}
