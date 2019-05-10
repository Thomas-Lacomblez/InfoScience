<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provenir
 *
 * @ORM\Table(name="provenir", indexes={@ORM\Index(name="I_FK_PROVENIR_ARTICLES", columns={"ID"}), @ORM\Index(name="I_FK_PROVENIR_SOURCES", columns={"ID_S"})})
 * @ORM\Entity
 */
class Provenir
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
     * @ORM\Column(name="ID_S", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idS;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdS(): ?int
    {
        return $this->idS;
    }


}
