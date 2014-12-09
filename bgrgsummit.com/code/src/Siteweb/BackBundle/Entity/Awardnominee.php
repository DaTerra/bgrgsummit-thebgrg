<?php
namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="award_nominee")
 */
class Awardnominee
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;




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
    private $jobtitle;
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
    private $email;

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
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $telephone;


    /**
     * @ORM\OneToOne(targetEntity="Award", inversedBy="awardnominee")
     * @ORM\JoinColumn(name="award_id", referencedColumnName="id")
     */
    private $award;

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
     * @ORM\Column(type="text", nullable=true)
     */
    private $statement;


    /**
     * @ORM\OneToOne(targetEntity="Siteweb\UserBundle\Entity\User", inversedBy="awardnominee")
     * @ORM\JoinColumn(name="submitter_id", referencedColumnName="id")
     **/
    private $submitter;


    /**
     * Set id
     *
     * @param integer $id
     * @return Awardnominee
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
     * Set fname
     *
     * @param string $fname
     * @return Awardnominee
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
     * Set jobtitle
     *
     * @param string $jobtitle
     * @return Awardnominee
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
     * Set organization
     *
     * @param string $organization
     * @return Awardnominee
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
     * Set lname
     *
     * @param string $lname
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * Set email
     *
     * @param string $email
     * @return Awardnominee
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set degree1
     *
     * @param string $degree1
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * Set telephone
     *
     * @param string $telephone
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * @return Awardnominee
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
     * Set award
     *
     * @param \Siteweb\BackBundle\Entity\Award $award
     * @return Awardnominee
     */
    public function setAward(\Siteweb\BackBundle\Entity\Award $award = null)
    {
        $this->award = $award;

        return $this;
    }

    /**
     * Get award
     *
     * @return \Siteweb\BackBundle\Entity\Award 
     */
    public function getAward()
    {
        return $this->award;
    }


    /**
     * Set statement
     *
     * @param string $statement
     * @return Awardnominee
     */
    public function setStatement($statement)
    {
        $this->statement = $statement;

        return $this;
    }

    /**
     * Get statement
     *
     * @return string 
     */
    public function getStatement()
    {
        return $this->statement;
    }

    /**
     * Set submitter
     *
     * @param \Siteweb\UserBundle\Entity\User $submitter
     * @return Awardnominee
     */
    public function setSubmitter(\Siteweb\UserBundle\Entity\User $submitter = null)
    {
        $this->submitter = $submitter;

        return $this;
    }

    /**
     * Get submitter
     *
     * @return \Siteweb\UserBundle\Entity\User 
     */
    public function getSubmitter()
    {
        return $this->submitter;
    }
}
