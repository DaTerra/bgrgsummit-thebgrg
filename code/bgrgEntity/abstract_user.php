<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="abstract_user",
 *     indexes={
 *         @ORM\Index(name="fk_user_has_abstracts_user1_idx", columns={"user_id"}),
 *         @ORM\Index(name="fk_abstract_user_abstract1_idx", columns={"abstract_id"}),
 *         @ORM\Index(name="fk_abstract_user_abstract_user_type1_idx", columns={"abstract_user_type_id"})
 *     }
 * )
 */
class abstract_user
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $fullname;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $email;
}