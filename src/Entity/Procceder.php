<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Procceder
 *
 * @ORM\Table(name="procceder", indexes={@ORM\Index(name="I_FK_PROCCEDER_THEMES", columns={"ID"}), @ORM\Index(name="I_FK_PROCCEDER_ARTICLES", columns={"ID_1"})})
 * @ORM\Entity
 */
class Procceder
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_1", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getId1(): ?int
    {
        return $this->id1;
    }


}
