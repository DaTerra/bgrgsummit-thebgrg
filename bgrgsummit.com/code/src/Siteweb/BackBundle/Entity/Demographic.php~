<?php

namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="demographic")
 */
class Demographic
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
    private $agerange;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $currentgender;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $currentgenderother;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $birthgender;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $ethnicity;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $ethnicityother;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $hiv;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $geographicallocation;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $geographicaltype;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $pastattendance;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $pastattendanceedition;

    public function __construct()
    {
        $this->pastattendanceedition = array();
        $this->ethnicity= array();
        $this->organizationtype = array();
    }

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $organizationtype;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $organizationother;

    /**
     * @ORM\Column(type="text", length=45, nullable=true)
     */
    private $naasm;

    /**
     * @ORM\Column(type="text", length=45, nullable=true)
     */
    private $focusgroup;

    /**
     * @ORM\OneToOne(targetEntity="Siteweb\UserBundle\Entity\User", inversedBy="demographic",cascade={"all"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $focusgroupemail;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $summitreason;

    /**
     * @ORM\Column(type="text", length=45, nullable=true)
     */
    private $demographiccol;




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
     * Set agerange
     *
     * @param string $agerange
     * @return Demographic
     */
    public function setAgerange($agerange)
    {
        $this->agerange = $agerange;

        return $this;
    }

    /**
     * Get agerange
     *
     * @return string 
     */
    public function getAgerange()
    {
        return $this->agerange;
    }

    /**
     * Set currentgender
     *
     * @param string $currentgender
     * @return Demographic
     */
    public function setCurrentgender($currentgender)
    {
        $this->currentgender = $currentgender;

        return $this;
    }

    /**
     * Get currentgender
     *
     * @return string 
     */
    public function getCurrentgender()
    {
        return $this->currentgender;
    }

    /**
     * Set currentgenderother
     *
     * @param string $currentgenderother
     * @return Demographic
     */
    public function setCurrentgenderother($currentgenderother)
    {
        $this->currentgenderother = $currentgenderother;

        return $this;
    }

    /**
     * Get currentgenderother
     *
     * @return string 
     */
    public function getCurrentgenderother()
    {
        return $this->currentgenderother;
    }

    /**
     * Set birthgender
     *
     * @param string $birthgender
     * @return Demographic
     */
    public function setBirthgender($birthgender)
    {
        $this->birthgender = $birthgender;

        return $this;
    }

    /**
     * Get birthgender
     *
     * @return string 
     */
    public function getBirthgender()
    {
        return $this->birthgender;
    }

    /**
     * Set ethnicity
     *
     * @param array $ethnicity
     * @return Demographic
     */
    public function setEthnicity($ethnicity)
    {
        $this->ethnicity = $ethnicity;

        return $this;
    }

    /**
     * Get ethnicity
     *
     * @return array 
     */
    public function getEthnicity()
    {
        return $this->ethnicity;
    }

    /**
     * Set ethnicityother
     *
     * @param string $ethnicityother
     * @return Demographic
     */
    public function setEthnicityother($ethnicityother)
    {
        $this->ethnicityother = $ethnicityother;

        return $this;
    }

    /**
     * Get ethnicityother
     *
     * @return string 
     */
    public function getEthnicityother()
    {
        return $this->ethnicityother;
    }

    /**
     * Set hiv
     *
     * @param string $hiv
     * @return Demographic
     */
    public function setHiv($hiv)
    {
        $this->hiv = $hiv;

        return $this;
    }

    /**
     * Get hiv
     *
     * @return string 
     */
    public function getHiv()
    {
        return $this->hiv;
    }

    /**
     * Set geographicallocation
     *
     * @param string $geographicallocation
     * @return Demographic
     */
    public function setGeographicallocation($geographicallocation)
    {
        $this->geographicallocation = $geographicallocation;

        return $this;
    }

    /**
     * Get geographicallocation
     *
     * @return string 
     */
    public function getGeographicallocation()
    {
        return $this->geographicallocation;
    }

    /**
     * Set geographicaltype
     *
     * @param string $geographicaltype
     * @return Demographic
     */
    public function setGeographicaltype($geographicaltype)
    {
        $this->geographicaltype = $geographicaltype;

        return $this;
    }

    /**
     * Get geographicaltype
     *
     * @return string 
     */
    public function getGeographicaltype()
    {
        return $this->geographicaltype;
    }

    /**
     * Set pastattendance
     *
     * @param string $pastattendance
     * @return Demographic
     */
    public function setPastattendance($pastattendance)
    {
        $this->pastattendance = $pastattendance;

        return $this;
    }

    /**
     * Get pastattendance
     *
     * @return string 
     */
    public function getPastattendance()
    {
        return $this->pastattendance;
    }

    /**
     * Set pastattendanceedition
     *
     * @param array $pastattendanceedition
     * @return Demographic
     */
    public function setPastattendanceedition($pastattendanceedition)
    {
        $this->pastattendanceedition = $pastattendanceedition;

        return $this;
    }

    /**
     * Get pastattendanceedition
     *
     * @return array 
     */
    public function getPastattendanceedition()
    {
        return $this->pastattendanceedition;
    }

    /**
     * Set organizationtype
     *
     * @param array $organizationtype
     * @return Demographic
     */
    public function setOrganizationtype($organizationtype)
    {
        $this->organizationtype = $organizationtype;

        return $this;
    }

    /**
     * Get organizationtype
     *
     * @return array 
     */
    public function getOrganizationtype()
    {
        return $this->organizationtype;
    }

    /**
     * Set organizationother
     *
     * @param string $organizationother
     * @return Demographic
     */
    public function setOrganizationother($organizationother)
    {
        $this->organizationother = $organizationother;

        return $this;
    }

    /**
     * Get organizationother
     *
     * @return string 
     */
    public function getOrganizationother()
    {
        return $this->organizationother;
    }

    /**
     * Set naasm
     *
     * @param string $naasm
     * @return Demographic
     */
    public function setNaasm($naasm)
    {
        $this->naasm = $naasm;

        return $this;
    }

    /**
     * Get naasm
     *
     * @return string 
     */
    public function getNaasm()
    {
        return $this->naasm;
    }

    /**
     * Set focusgroup
     *
     * @param string $focusgroup
     * @return Demographic
     */
    public function setFocusgroup($focusgroup)
    {
        $this->focusgroup = $focusgroup;

        return $this;
    }

    /**
     * Get focusgroup
     *
     * @return string 
     */
    public function getFocusgroup()
    {
        return $this->focusgroup;
    }

    /**
     * Set focusgroupemail
     *
     * @param boolean $focusgroupemail
     * @return Demographic
     */
    public function setFocusgroupemail($focusgroupemail)
    {
        $this->focusgroupemail = $focusgroupemail;

        return $this;
    }

    /**
     * Get focusgroupemail
     *
     * @return boolean 
     */
    public function getFocusgroupemail()
    {
        return $this->focusgroupemail;
    }

    /**
     * Set summitreason
     *
     * @param string $summitreason
     * @return Demographic
     */
    public function setSummitreason($summitreason)
    {
        $this->summitreason = $summitreason;

        return $this;
    }

    /**
     * Get summitreason
     *
     * @return string 
     */
    public function getSummitreason()
    {
        return $this->summitreason;
    }

    /**
     * Set demographiccol
     *
     * @param string $demographiccol
     * @return Demographic
     */
    public function setDemographiccol($demographiccol)
    {
        $this->demographiccol = $demographiccol;

        return $this;
    }

    /**
     * Get demographiccol
     *
     * @return string 
     */
    public function getDemographiccol()
    {
        return $this->demographiccol;
    }

    /**
     * Set user
     *
     * @param \Siteweb\UserBundle\Entity\User $user
     * @return Demographic
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
}
