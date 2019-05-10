<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="I_FK_ARTICLES_UTILISATEUR", columns={"ID_PARTICIPER"})})
 * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
 */
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_PARTICIPER", type="integer", nullable=true)
     */
    private $idParticiper;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="publication", type="datetime", nullable=true)
     */
    private $publication;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdTheme", type="integer", nullable=true)
     */
    private $idtheme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contenu", type="string", length=10000, nullable=true)
     */
    private $contenu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdParticiper(): ?int
    {
        return $this->idParticiper;
    }

    public function setIdParticiper(?int $idParticiper): self
    {
        $this->idParticiper = $idParticiper;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPublication(): ?\DateTimeInterface
    {
        return $this->publication;
    }

    public function setPublication(?\DateTimeInterface $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getIdtheme(): ?int
    {
        return $this->idtheme;
    }

    public function setIdtheme(?int $idtheme): self
    {
        $this->idtheme = $idtheme;

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


}
