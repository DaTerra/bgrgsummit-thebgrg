<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="abstract_agenda",
 *     indexes={
 *         @ORM\Index(name="fk_agenda_agenda_session1_idx", columns={"agenda_session_id"}),
 *         @ORM\Index(name="fk_abstracts_agenda_abstract1_idx", columns={"abstract_id"})
 *     }
 * )
 */
class abstract_agenda
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $order;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $status;
}