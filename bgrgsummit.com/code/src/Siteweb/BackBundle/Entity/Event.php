<?php

namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Event
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
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="time")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="keynotes", type="array")
     */
    private $keynotes;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="moderator", type="string", length=255)
     */
    private $moderator;

    /**
     * @var string
     *
     * @ORM\Column(name="local", type="string", length=255)
     */
    private $local;

    /**
     * @ORM\OneToMany(targetEntity="Abstracts", mappedBy="event")
     */
    private $abstracts;


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
     * Set time
     *
     * @param \DateTime $time
     * @return Event
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
     * Set name
     *
     * @param string $name
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set keynotes
     *
     * @param array $keynotes
     * @return Event
     */
    public function setKeynotes($keynotes)
    {
        $this->keynotes = $keynotes;
    
        return $this;
    }

    /**
     * Get keynotes
     *
     * @return array 
     */
    public function getKeynotes()
    {
        return $this->keynotes;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
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
     * Set moderator
     *
     * @param string $moderator
     * @return Event
     */
    public function setModerator($moderator)
    {
        $this->moderator = $moderator;
    
        return $this;
    }

    /**
     * Get moderator
     *
     * @return string 
     */
    public function getModerator()
    {
        return $this->moderator;
    }

    /**
     * Set local
     *
     * @param string $local
     * @return Event
     */
    public function setLocal($local)
    {
        $this->local = $local;
    
        return $this;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->abstracts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add abstracts
     *
     * @param \Siteweb\BackBundle\Entity\Abstracts $abstracts
     * @return Event
     */
    public function addAbstract(\Siteweb\BackBundle\Entity\Abstracts $abstracts)
    {
        $abstracts->setEvent($this);
        $this->abstracts[] = $abstracts;
    
        return $this;
    }

    /**
     * Remove abstracts
     *
     * @param \Siteweb\BackBundle\Entity\Abstracts $abstracts
     */
    public function removeAbstract(\Siteweb\BackBundle\Entity\Abstracts $abstracts)
    {
        $this->abstracts->removeElement($abstracts);
    }

    /**
     * Get abstracts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbstracts()
    {
        return $this->abstracts;
    }
}
