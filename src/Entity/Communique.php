<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communique
 *
 * @ORM\Table(name="communique")
 * @ORM\Entity
 */
class Communique
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CONTENU", type="string", length=255, nullable=true)
     */
    private $contenu;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
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
