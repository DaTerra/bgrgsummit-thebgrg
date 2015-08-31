<?php

namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Track
 *
 * @ORM\Table(name="track")
 * @ORM\Entity
 */
class Track
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
     * @ORM\Column(name="letter", type="string", length=1)
     */
    private $letter;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Abstracts", mappedBy="track" , cascade={"all"})
     */
    private $Abstracts;


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
     * Set letter
     *
     * @param string $letter
     * @return Track
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;

        return $this;
    }

    /**
     * Get letter
     *
     * @return string 
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Track
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
     * @return Track
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
     * Constructor
     */
    public function __construct()
    {
        $this->Abstracts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add Abstracts
     *
     * @param \Siteweb\BackBundle\Entity\Abstracts $abstracts
     * @return Track
     */
    public function addAbstract(\Siteweb\BackBundle\Entity\Abstracts $abstracts)
    {
        $this->Abstracts[] = $abstracts;

        return $this;
    }

    /**
     * Remove Abstracts
     *
     * @param \Siteweb\BackBundle\Entity\Abstracts $abstracts
     */
    public function removeAbstract(\Siteweb\BackBundle\Entity\Abstracts $abstracts)
    {
        $this->Abstracts->removeElement($abstracts);
    }

    /**
     * Get Abstracts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbstracts()
    {
        return $this->Abstracts;
    }
}
