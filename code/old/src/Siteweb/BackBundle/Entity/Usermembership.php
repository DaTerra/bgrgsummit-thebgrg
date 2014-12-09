<?php
namespace Siteweb\BackBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_membership")
 */
class Usermembership
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=45)
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Siteweb\UserBundle\Entity\User", inversedBy="demographic",cascade={"all"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="Usermembershiptype")
     * @ORM\JoinColumn(name="usermembershiptype_id", referencedColumnName="id")
     */
    private $usermembershiptype;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $activated;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $expiration;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $public;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $payment;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $status;
}