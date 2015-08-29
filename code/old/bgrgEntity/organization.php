<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="organization")
 */
class organization
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $description;

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
    private $website;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $size;
}