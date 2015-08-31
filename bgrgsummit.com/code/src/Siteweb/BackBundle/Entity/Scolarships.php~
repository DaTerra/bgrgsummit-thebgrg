<?php

namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scolarships
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Scolarships
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
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text")
     */
    private $notes;


    /**
     * @ORM\ManyToOne(targetEntity="Scolarshiprequests", inversedBy="scolarships",cascade={"all"})
     * @ORM\JoinColumn(name="scolarshiprequest_id", referencedColumnName="id")
     */
    private $scolarshiprequest;

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
     * Set status
     *
     * @param string $status
     * @return Scolarships
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
     * Set notes
     *
     * @param string $notes
     * @return Scolarships
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set scolarshiprequest
     *
     * @param \Siteweb\BackBundle\Entity\Scolarshiprequests $scolarshiprequest
     * @return Scolarships
     */
    public function setScolarshiprequest(\Siteweb\BackBundle\Entity\Scolarshiprequests $scolarshiprequest = null)
    {
        $this->scolarshiprequest = $scolarshiprequest;

        return $this;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Scolarships
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
     * Get scolarshiprequest
     *
     * @return \Siteweb\BackBundle\Entity\Scolarshiprequests 
     */
    public function getScolarshiprequest()
    {
        return $this->scolarshiprequest;
    }

    public function __toString()
    {
        return (string) $this->getTitle();
    }
}
