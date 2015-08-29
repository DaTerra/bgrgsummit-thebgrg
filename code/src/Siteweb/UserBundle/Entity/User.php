<?php

namespace Siteweb\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @ORM\HasLifecycleCallbacks
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
     * @ORM\OneToMany(targetEntity="Siteweb\BackBundle\Entity\Usermembership", mappedBy="user",cascade={"all"})
     */
    private $usermembership;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $summitbadgecity;

    /**
     * @ORM\OneToOne(targetEntity="Siteweb\FrontBundle\Entity\PaymentDetails")
     * @ORM\JoinColumn(name="payment_id", referencedColumnName="id", nullable=true)
     **/
    private $payment;

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
     * @Assert\File( maxSize = "2048k", mimeTypesMessage = "Please upload a valid Image")
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $photostatus;
    

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
        $demographic->setUser($this);

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


    public function getFullPhotoPath() {
        return null === $this->photo ? null : $this->getUploadRootDir(). $this->photo;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir().$this->getId()."/";
    }

    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/upload/userphotos/';
    }

    /**
     * @ORM\PrePersist()
     */
    public function uploadPhoto() {
        // the file property can be empty if the field is not required
        if (null === $this->photo) {
            return;
        }
        if(!$this->id){
            $this->photo->move($this->getTmpUploadRootDir(), $this->photo->getClientOriginalName());
        }else{
            $this->photo->move($this->getUploadRootDir(), $this->photo->getClientOriginalName());
        }
        $this->setPhoto($this->photo->getClientOriginalName());
    }

    /**
     * @ORM\PostPersist()
     */
    public function movePhoto()
    {
        if (null === $this->photo) {
            return;
        }
        if(!is_dir($this->getUploadRootDir())){
            mkdir($this->getUploadRootDir());
        }
        copy($this->getTmpUploadRootDir().$this->photo, $this->getFullPhotoPath());
        unlink($this->getTmpUploadRootDir().$this->photo);
    }

    /**
     * @ORM\PreRemove()
     */
    public function removeImage()
    {
        unlink($this->getFullPhotoPath());
        rmdir($this->getUploadRootDir());
    }

    /**
     * Add usermembership
     *
     * @param \Siteweb\BackBundle\Entity\Usermembership $usermembership
     * @return User
     */
    public function addUsermembership(\Siteweb\BackBundle\Entity\Usermembership $usermembership)
    {
        $this->usermembership[] = $usermembership;

        return $this;
    }

    /**
     * Remove usermembership
     *
     * @param \Siteweb\BackBundle\Entity\Usermembership $usermembership
     */
    public function removeUsermembership(\Siteweb\BackBundle\Entity\Usermembership $usermembership)
    {
        $this->usermembership->removeElement($usermembership);
    }

    /**
     * Get usermembership
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsermembership()
    {
        return $this->usermembership;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->usermembership = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set payment
     *
     * @param \Siteweb\FrontBundle\Entity\PaymentDetails $payment
     * @return User
     */
    public function setPayment(\Siteweb\FrontBundle\Entity\PaymentDetails $payment = null)
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
