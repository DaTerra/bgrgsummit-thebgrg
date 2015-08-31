<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="user_membership",
 *     indexes={
 *         @ORM\Index(name="fk_user_membership_duration_users1_idx", columns={"user_id"}),
 *         @ORM\Index(name="fk_user_membership_duration_user_membership_type1_idx", columns={"user_membership_type_id"})
 *     }
 * )
 */
class user_membership
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=45)
     */
    private $id;

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
     * @ORM\Column(type="unknown:@boolean", nullable=true)
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