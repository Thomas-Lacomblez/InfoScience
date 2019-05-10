<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sources
 *
 * @ORM\Table(name="sources")
 * @ORM\Entity
 */
class Sources
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_S", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idS;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AUTEUR", type="string", length=255, nullable=true)
     */
    private $auteur;

    public function getIdS(): ?int
    {
        return $this->idS;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(?string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }


}
