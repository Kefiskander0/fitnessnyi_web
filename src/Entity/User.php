<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
 class User implements  UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="Nom obligatoire !" )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Adresse obligatoire !" )
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=8)
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = " Num° de téléphone doit être égale à {{ limit }} charactères",
     *      maxMessage = "Num° de téléphone doit être égale à {{ limit }} charactères"
     * )
     */
    private $numTel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Mot de passe obligatoire !" )
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = " Votre mot de passe doit depassé {{ limit }} charactères",
     *      maxMessage = "Votre mot de passe ne doit pas depassé {{ limit }} charactères"
     * )
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Email obligatoire !" )
     * @Assert\Email(message = "The email '{{ value }}' is not a valid email!")
     */
    private $mailAdress;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="qui êtes-vous?" )
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

     public function getRoles()
     {
         // TODO: Implement getRoles() method.
     }

     public function getSalt()
     {
         // TODO: Implement getSalt() method.
     }

     public function getUsername()
     {
         // TODO: Implement getUsername() method.
     }

     public function eraseCredentials()
     {
         // TODO: Implement eraseCredentials() method.
     }
 }
