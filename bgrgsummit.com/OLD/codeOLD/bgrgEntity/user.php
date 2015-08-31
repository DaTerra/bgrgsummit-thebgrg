<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_organization1_idx", columns={"organization_id"})})
 */
class user
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $fname;

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
    private $summit_badge_name;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $summit_badge_city;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $summit_badge_state;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $academic_title;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $job_title;

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
    private $password;

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
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $photo_status;
}