<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motdepasse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomutilisateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Live")
     */
    private $lives;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Don")
     */
    private $dons;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\NombreDeConnexion")
     */
    private $nombreConnexions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Article")
     */
    private $articles;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Interview")
     */
    private $interviews;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PreferenceUtilisateurTelevision")
     */
    private $preferenceUtilisateurTelevision;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PreferenceUtilisateurOrdinateur")
     */
    private $preferenceUtilisateurOrdinateurs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PreferenceUtilisateurSmartphone")
     */
    private $preferenceUtilisateurSmartphones;

    public function __construct()
    {
        $this->lives = new ArrayCollection();
        $this->dons = new ArrayCollection();
        $this->nombreConnexions = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->interviews = new ArrayCollection();
    }

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

    public function getMotdepasse(): ?string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): self
    {
        $this->motdepasse = $motdepasse;

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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getNomutilisateur(): ?string
    {
        return $this->nomutilisateur;
    }

    public function setNomutilisateur(string $nomutilisateur): self
    {
        $this->nomutilisateur = $nomutilisateur;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return Collection|Live[]
     */
    public function getRelation(): Collection
    {
        return $this->lives;
    }

    public function addLives(Live $lives): self
    {
        if (!$this->lives->contains($lives)) {
            $this->lives[] = $lives;
        }

        return $this;
    }

    public function removeLives(Live $lives): self
    {
        if ($this->lives->contains($lives)) {
            $this->lives->removeElement($lives);
        }

        return $this;
    }

    /**
     * @return Collection|Don[]
     */
    public function getDons(): Collection
    {
        return $this->dons;
    }

    public function addDon(Don $don): self
    {
        if (!$this->dons->contains($don)) {
            $this->dons[] = $don;
        }

        return $this;
    }

    public function removeDon(Don $don): self
    {
        if ($this->dons->contains($don)) {
            $this->dons->removeElement($don);
        }

        return $this;
    }

    /**
     * @return Collection|NombreDeConnexion[]
     */
    public function getNombreConnexions(): Collection
    {
        return $this->nombreConnexions;
    }

    public function addNombreConnexion(NombreDeConnexion $nombreConnexion): self
    {
        if (!$this->nombreConnexions->contains($nombreConnexion)) {
            $this->nombreConnexions[] = $nombreConnexion;
        }

        return $this;
    }

    public function removeNombreConnexion(NombreDeConnexion $nombreConnexion): self
    {
        if ($this->nombreConnexions->contains($nombreConnexion)) {
            $this->nombreConnexions->removeElement($nombreConnexion);
        }

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
        }

        return $this;
    }

    /**
     * @return Collection|Interview[]
     */
    public function getInterviews(): Collection
    {
        return $this->interviews;
    }

    public function addInterview(Interview $interview): self
    {
        if (!$this->interviews->contains($interview)) {
            $this->interviews[] = $interview;
        }

        return $this;
    }

    public function removeInterview(Interview $interview): self
    {
        if ($this->interviews->contains($interview)) {
            $this->interviews->removeElement($interview);
        }

        return $this;
    }

    public function getPreferenceUtilisateurTelevision(): ?PreferenceUtilisateurTelevision
    {
        return $this->preferenceUtilisateurTelevision;
    }

    public function setPreferenceUtilisateurTelevision(?PreferenceUtilisateurTelevision $preferenceUtilisateurTelevision): self
    {
        $this->preferenceUtilisateurTelevision = $preferenceUtilisateurTelevision;

        return $this;
    }

    public function getPreferenceUtilisateurOrdinateurs(): ?PreferenceUtilisateurOrdinateur
    {
        return $this->preferenceUtilisateurOrdinateurs;
    }

    public function setPreferenceUtilisateurOrdinateurs(?PreferenceUtilisateurOrdinateur $preferenceUtilisateurOrdinateurs): self
    {
        $this->preferenceUtilisateurOrdinateurs = $preferenceUtilisateurOrdinateurs;

        return $this;
    }

    public function getPreferenceUtilisateurSmartphones(): ?PreferenceUtilisateurSmartphone
    {
        return $this->preferenceUtilisateurSmartphones;
    }

    public function setPreferenceUtilisateurSmartphones(?PreferenceUtilisateurSmartphone $preferenceUtilisateurSmartphones): self
    {
        $this->preferenceUtilisateurSmartphones = $preferenceUtilisateurSmartphones;

        return $this;
    }
}
