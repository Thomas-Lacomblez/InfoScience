<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Commentaires
 *
 * @ORM\Table(name="commentaires", indexes={@ORM\Index(name="I_FK_COMMENTAIRES_UTILISATEUR", columns={"ID_POSTER"}), @ORM\Index(name="I_FK_COMMENTAIRES_ARTICLES", columns={"ID_LIER"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommentairesRepository")
 */
class Commentaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     *@ORM\ManyToOne(targetEntity="Articles", inversedBy="Commentaires")
     *@ORM\JoinColumn(name="ID_LIER", referencedColumnName="ID")
     */
    private $Lier;

    /**
     * @var int|null
     *
     *@ORM\ManyToOne(targetEntity="Utilisateurs", inversedBy="Commentaires")
     *@ORM\JoinColumn(name="ID_POSTER", referencedColumnName="ID")
     */
    private $Poster;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MESSAGE", type="string", length=255, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateP", type="datetime", nullable=true)
     */
    private  $dateP;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleLier(): ?int
    {
        return $this->Lier;
    }

    public function setArticleLier(?Articles $ArticleLier): self
    {
        $this->Lier = $ArticleLier;

        return $this;
    }

    public function getposter()
    {
        return $this->Poster;
    }

    public function setUserPoster(?Utilisateurs $userPoster): self
    {
        $this->Poster = $userPoster;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
    public function getDateP(): ?\DateTimeInterface
    {
        return $this->dateP;
    }

    public function setDateP(?\DateTimeInterface  $date): self
    {
        $this->dateP = $date;

        return $this;
    }


}
