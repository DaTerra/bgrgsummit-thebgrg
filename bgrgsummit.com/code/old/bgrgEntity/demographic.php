<?php
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="demographic", indexes={@ORM\Index(name="fk_demographic_user1_idx", columns={"user_id"})})
 */
class demographic
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $age_range;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $current_gender;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $current_gender_other;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $birth_gender;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $ethnicity;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $ethnicity_other;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $hiv;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $geographical_location;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $geographical_type;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $past_attendance;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $past_attendance_edition;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $organization_type;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $organization_other;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $naasm;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $focus_group;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $focus_group_email;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $summit_reason;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    private $demographiccol;
}