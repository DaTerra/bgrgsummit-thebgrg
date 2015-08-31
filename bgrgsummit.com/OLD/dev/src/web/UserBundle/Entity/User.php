<?php

namespace Siteweb\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $fname;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $organization;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $lname;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $mname;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $sname;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $summitbadgename;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $summitbadgecity;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $summitbadgestate;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $academictitle;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $jobtitle;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $degree1;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $degree2;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $degree3;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $introduction;


    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $telephone2;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $address2;

    /**
     * @ORM\OneToOne(targetEntity="Siteweb\BackBundle\Entity\Demographic", mappedBy="user",cascade={"all"})
     */
    private $demographic;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $state;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $postalcode;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $publicprofile = false;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $photostatus;
    
    
    public function construct()
    {
        parent::construct();


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
     * Set fname
     *
     * @param string $fname
     * @return User
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return User
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set mname
     *
     * @param string $mname
     * @return User
     */
    public function setMname($mname)
    {
        $this->mname = $mname;

        return $this;
    }

    /**
     * Get mname
     *
     * @return string 
     */
    public function getMname()
    {
        return $this->mname;
    }

    /**
     * Set sname
     *
     * @param string $sname
     * @return User
     */
    public function setSname($sname)
    {
        $this->sname = $sname;

        return $this;
    }

    /**
     * Get sname
     *
     * @return string
     */
    public function getSname()
    {
        return $this->sname;
    }


    /**
     * Set organization
     *
     * @param string $organization
     * @return User
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set summitbadgename
     *
     * @param string $summitbadgename
     * @return User
     */
    public function setSummitbadgename($summitbadgename)
    {
        $this->summitbadgename = $summitbadgename;

        return $this;
    }

    /**
     * Get summitbadgename
     *
     * @return string 
     */
    public function getSummitbadgename()
    {
        return $this->summitbadgename;
    }

    /**
     * Set summitbadgecity
     *
     * @param string $summitbadgecity
     * @return User
     */
    public function setSummitbadgecity($summitbadgecity)
    {
        $this->summitbadgecity = $summitbadgecity;

        return $this;
    }

    /**
     * Get summitbadgecity
     *
     * @return string 
     */
    public function getSummitbadgecity()
    {
        return $this->summitbadgecity;
    }

    /**
     * Set summitbadgestate
     *
     * @param string $summitbadgestate
     * @return User
     */
    public function setSummitbadgestate($summitbadgestate)
    {
        $this->summitbadgestate = $summitbadgestate;

        return $this;
    }

    /**
     * Get summitbadgestate
     *
     * @return string 
     */
    public function getSummitbadgestate()
    {
        return $this->summitbadgestate;
    }

    /**
     * Set academictitle
     *
     * @param string $academictitle
     * @return User
     */
    public function setAcademictitle($academictitle)
    {
        $this->academictitle = $academictitle;

        return $this;
    }

    /**
     * Get academictitle
     *
     * @return string 
     */
    public function getAcademictitle()
    {
        return $this->academictitle;
    }

    /**
     * Set jobtitle
     *
     * @param string $jobtitle
     * @return User
     */
    public function setJobtitle($jobtitle)
    {
        $this->jobtitle = $jobtitle;

        return $this;
    }

    /**
     * Get jobtitle
     *
     * @return string 
     */
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * Set degree1
     *
     * @param string $degree1
     * @return User
     */
    public function setDegree1($degree1)
    {
        $this->degree1 = $degree1;

        return $this;
    }

    /**
     * Get degree1
     *
     * @return string 
     */
    public function getDegree1()
    {
        return $this->degree1;
    }

    /**
     * Set degree2
     *
     * @param string $degree2
     * @return User
     */
    public function setDegree2($degree2)
    {
        $this->degree2 = $degree2;

        return $this;
    }

    /**
     * Get degree2
     *
     * @return string 
     */
    public function getDegree2()
    {
        return $this->degree2;
    }

    /**
     * Set degree3
     *
     * @param string $degree3
     * @return User
     */
    public function setDegree3($degree3)
    {
        $this->degree3 = $degree3;

        return $this;
    }

    /**
     * Get degree3
     *
     * @return string 
     */
    public function getDegree3()
    {
        return $this->degree3;
    }

    /**
     * Set introduction
     *
     * @param string $introduction
     * @return User
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;

        return $this;
    }

    /**
     * Get introduction
     *
     * @return string 
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     * @return User
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string 
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return User
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return User
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return User
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set photostatus
     *
     * @param string $photostatus
     * @return User
     */
    public function setPhotostatus($photostatus)
    {
        $this->photostatus = $photostatus;

        return $this;
    }

    /**
     * Get photostatus
     *
     * @return string 
     */
    public function getPhotostatus()
    {
        return $this->photostatus;
    }

    /**
     * Set publicprofile
     *
     * @param boolean $publicprofile
     * @return User
     */
    public function setPublicprofile($publicprofile)
    {
        $this->publicprofile = $publicprofile;

        return $this;
    }

    /**
     * Get publicprofile
     *
     * @return boolean 
     */
    public function getPublicprofile()
    {
        return $this->publicprofile;
    }

    /**
     * Set demographic
     *
     * @param \Siteweb\BackBundle\Entity\Demographic $demographic
     * @return User
     */
    public function setDemographic(\Siteweb\BackBundle\Entity\Demographic $demographic = null)
    {
        $this->demographic = $demographic;

        return $this;
    }

    /**
     * Get demographic
     *
     * @return \Siteweb\BackBundle\Entity\Demographic 
     */
    public function getDemographic()
    {
        return $this->demographic;
    }
}
