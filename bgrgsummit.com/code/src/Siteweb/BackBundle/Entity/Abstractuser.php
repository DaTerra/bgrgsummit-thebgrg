<?php

namespace Siteweb\BackBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="abstract_user")
 */
class Abstractuser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(name="co_author",type="string", length=45, nullable=true)
     */
    private $coauthor;

    /**
     * @ORM\Column(name="co_author_email",type="string" , length=45, nullable=true)
     */
    private $coauthoremail;

    /**
     * @ORM\ManyToOne(targetEntity="Abstracts", inversedBy="coauthers")
     * @ORM\JoinColumn(name="abstract_id", referencedColumnName="id", nullable=true)
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
     * Set coauthor
     *
     * @param string $coauthor
     * @return Abstractuser
     */
    public function setCoauthor($coauthor)
    {
        $this->coauthor = $coauthor;

        return $this;
    }

    /**
     * Get coauthor
     *
     * @return string 
     */
    public function getCoauthor()
    {
        return $this->coauthor;
    }

    /**
     * Set coauthoremail
     *
     * @param string $coauthoremail
     * @return Abstractuser
     */
    public function setCoauthoremail($coauthoremail)
    {
        $this->coauthoremail = $coauthoremail;

        return $this;
    }

    /**
     * Get coauthoremail
     *
     * @return string 
     */
    public function getCoauthoremail()
    {
        return $this->coauthoremail;
    }

    /**
     * Set abstracts
     *
     * @param \Siteweb\BackBundle\Entity\Abstracts $abstracts
     * @return Abstractuser
     */
    public function setAbstracts(\Siteweb\BackBundle\Entity\Abstracts $abstracts = null)
    {
        $this->abstracts = $abstracts;

        return $this;
    }

    /**
     * Get abstracts
     *
     * @return \Siteweb\BackBundle\Entity\Abstracts 
     */
    public function getAbstracts()
    {
        return $this->abstracts;
    }
}
