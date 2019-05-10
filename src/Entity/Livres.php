<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livres
 *
 * @ORM\Table(name="livres")
 * @ORM\Entity
 */
class Livres
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
     * @ORM\Column(name="TITRE", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GENRE", type="string", length=255, nullable=true)
     */
    private $genre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_PULBICATION", type="date", nullable=true)
     */
    private $datePulbication;

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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDatePulbication(): ?\DateTimeInterface
    {
        return $this->datePulbication;
    }

    public function setDatePulbication(?\DateTimeInterface $datePulbication): self
    {
        $this->datePulbication = $datePulbication;

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
