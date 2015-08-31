<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="meetings")
 */
class meetings
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $datetime;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $submitter;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $submitter email;
}