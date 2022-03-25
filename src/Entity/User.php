<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $mailAdress;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $whoami;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $blocRaison;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $unbloc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumTel(): ?string
    {
        return $this->numTel;
    }

    public function setNumTel(string $numTel): self
    {
        $this->numTel = $numTel;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getMailAdress(): ?string
    {
        return $this->mailAdress;
    }

    public function setMailAdress(string $mailAdress): self
    {
        $this->mailAdress = $mailAdress;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getWhoami(): ?string
    {
        return $this->whoami;
    }

    public function setWhoami(string $whoami): self
    {
        $this->whoami = $whoami;

        return $this;
    }

    public function getBlocRaison(): ?string
    {
        return $this->blocRaison;
    }

    public function setBlocRaison(?string $blocRaison): self
    {
        $this->blocRaison = $blocRaison;

        return $this;
    }

    public function getUnbloc(): ?\DateTimeInterface
    {
        return $this->unbloc;
    }

    public function setUnbloc(?\DateTimeInterface $unbloc): self
    {
        $this->unbloc = $unbloc;

        return $this;
    }
}