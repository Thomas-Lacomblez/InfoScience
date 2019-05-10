<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * Utilisateurs
 *
 * @ORM\Table(name="utilisateurs")
 * @ORM\Entity
 */
class Utilisateurs implements UserInterface
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
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAIL", type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOT_DE_PASSE", type="string", length=255, nullable=true)
     */
    private $motDePasse;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NEWS_LETTERS", type="boolean", nullable=true)
     */
    private $newsLetters;

    /**
     * @var bool
     *
     * @ORM\Column(name="staff", type="boolean", nullable=false)
     */
    private $staff = '0';
    
    private $confirm_password;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(?string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function getNewsLetters(): ?bool
    {
        return $this->newsLetters;
    }

    public function setNewsLetters(?bool $newsLetters): self
    {
        $this->newsLetters = $newsLetters;

        return $this;
    }

    public function getStaff(): ?bool
    {
        return $this->staff;
    }

    public function setStaff(bool $staff): self
    {
        $this->staff = $staff;

        return $this;
    }
    public function getConfirmMotDePasse(): ? string
    {
        return $this->confirm_password;
    }
    public function setConfirmMotDePasse(?string $confirmMdp): self
    {
        $this->confirm_password = $confirmMdp;
        return $this;
    }
    
   public function eraseCredentials()
   {
       
   }
   public function getUsername()
   {
       return $this->mail;
   }
   public function getSalt(){
       
   }
   public function getPassword()
   {
       return $this->motDePasse;
   }
   public function getRoles()
   {
       return ['ROLE_USER'];
   }
   

}
