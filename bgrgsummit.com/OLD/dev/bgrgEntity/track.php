<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="track")
 */
class track
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $letter;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $image;
}