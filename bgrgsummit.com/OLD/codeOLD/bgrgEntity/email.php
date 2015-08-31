<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="email", indexes={@ORM\Index(name="fk_email_email_template1_idx", columns={"email_template_id"})})
 */
class email
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $subject;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $body;
}