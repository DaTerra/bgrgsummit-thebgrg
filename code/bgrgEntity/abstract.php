<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="abstract", indexes={@ORM\Index(name="fk_abstracts_track1_idx", columns={"track_id"})})
 */
class abstract
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
    private $background;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $methods;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $results;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $conclusions;

    /**
     * @ORM\Column(type="unknown:@boolean", nullable=true)
     */
    private $speaker_agreement;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $status;
}