<?php

namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="abstracts")
 */
class Abstracts
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
    private $title;

    /**
     * @ORM\Column(name="submiter",type="string", length=45, nullable=true)
     */
    private $submiter;

    /**
     * @ORM\Column(name="submiter_email",type="string", length=45, nullable=true)
     */
    private $submiteremail;

    /**
 * @ORM\Column(name="speaker",type="string", length=45, nullable=true)
 */
    private $speaker;

    /**
     * @ORM\Column(name="speaker_email",type="string", length=45, nullable=true)
     */
    private $speakeremail;

    /**
     * @ORM\Column(name="author",type="string", length=45, nullable=true)
     */
    private $author;

    /**
     * @ORM\Column(name="author_email",type="string", length=45, nullable=true)
     */
    private $authoremail;

    /**
     * @ORM\Column(name="background",type="text", nullable=true)
     */
    private $background;

    /**
     * @ORM\Column(name="methods",type="text", nullable=true)
     */
    private $methods;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $results;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $conclusions;

    /**
     * @ORM\OneToMany(targetEntity="Abstractuser", mappedBy="abstract" , cascade={"all"})
     */
    private $coauthers;

    /**
     * @ORM\ManyToOne(targetEntity="Track", inversedBy="abstracts")
     * @ORM\JoinColumn(name="track_id", referencedColumnName="id", nullable=true)
     */
    private $track;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $speaker_agreement;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $status;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coauthers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Abstracts
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
     * Set submiter
     *
     * @param string $submiter
     * @return Abstracts
     */
    public function setSubmiter($submiter)
    {
        $this->submiter = $submiter;

        return $this;
    }

    /**
     * Get submiter
     *
     * @return string 
     */
    public function getSubmiter()
    {
        return $this->submiter;
    }

    /**
     * Set submiteremail
     *
     * @param string $submiteremail
     * @return Abstracts
     */
    public function setSubmiteremail($submiteremail)
    {
        $this->submiteremail = $submiteremail;

        return $this;
    }

    /**
     * Get submiteremail
     *
     * @return string 
     */
    public function getSubmiteremail()
    {
        return $this->submiteremail;
    }

    /**
     * Set speaker
     *
     * @param string $speaker
     * @return Abstracts
     */
    public function setSpeaker($speaker)
    {
        $this->speaker = $speaker;

        return $this;
    }

    /**
     * Get speaker
     *
     * @return string 
     */
    public function getSpeaker()
    {
        return $this->speaker;
    }

    /**
     * Set speakeremail
     *
     * @param string $speakeremail
     * @return Abstracts
     */
    public function setSpeakeremail($speakeremail)
    {
        $this->speakeremail = $speakeremail;

        return $this;
    }

    /**
     * Get speakeremail
     *
     * @return string 
     */
    public function getSpeakeremail()
    {
        return $this->speakeremail;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Abstracts
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set authoremail
     *
     * @param string $authoremail
     * @return Abstracts
     */
    public function setAuthoremail($authoremail)
    {
        $this->authoremail = $authoremail;

        return $this;
    }

    /**
     * Get authoremail
     *
     * @return string 
     */
    public function getAuthoremail()
    {
        return $this->authoremail;
    }

    /**
     * Set background
     *
     * @param string $background
     * @return Abstracts
     */
    public function setBackground($background)
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get background
     *
     * @return string 
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Set methods
     *
     * @param string $methods
     * @return Abstracts
     */
    public function setMethods($methods)
    {
        $this->methods = $methods;

        return $this;
    }

    /**
     * Get methods
     *
     * @return string 
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * Set results
     *
     * @param string $results
     * @return Abstracts
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }

    /**
     * Get results
     *
     * @return string 
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set conclusions
     *
     * @param string $conclusions
     * @return Abstracts
     */
    public function setConclusions($conclusions)
    {
        $this->conclusions = $conclusions;

        return $this;
    }

    /**
     * Get conclusions
     *
     * @return string 
     */
    public function getConclusions()
    {
        return $this->conclusions;
    }

    /**
     * Set speaker_agreement
     *
     * @param boolean $speakerAgreement
     * @return Abstracts
     */
    public function setSpeakerAgreement($speakerAgreement)
    {
        $this->speaker_agreement = $speakerAgreement;

        return $this;
    }

    /**
     * Get speaker_agreement
     *
     * @return boolean 
     */
    public function getSpeakerAgreement()
    {
        return $this->speaker_agreement;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Abstracts
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
     * Add coauthers
     *
     * @param \Siteweb\BackBundle\Entity\Abstractuser $coauthers
     * @return Abstracts
     */
    public function addCoauther(\Siteweb\BackBundle\Entity\Abstractuser $coauthers)
    {
        $this->coauthers[] = $coauthers;

        return $this;
    }

    /**
     * Remove coauthers
     *
     * @param \Siteweb\BackBundle\Entity\Abstractuser $coauthers
     */
    public function removeCoauther(\Siteweb\BackBundle\Entity\Abstractuser $coauthers)
    {
        $this->coauthers->removeElement($coauthers);
    }

    /**
     * Get coauthers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoauthers()
    {
        return $this->coauthers;
    }

    /**
     * Set track
     *
     * @param \Siteweb\BackBundle\Entity\Track $track
     * @return Abstracts
     */
    public function setTrack(\Siteweb\BackBundle\Entity\Track $track)
    {
        if($track != null){
            $this->track = $track;
        }else{
            $this->track = null;
        }
        return $this;
    }

    /**
     * Get track
     *
     * @return \Siteweb\BackBundle\Entity\Track 
     */
    public function getTrack()
    {
        return $this->track;
    }
}
