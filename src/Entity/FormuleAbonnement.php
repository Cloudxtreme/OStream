<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormuleAbonnementRepository")
 */
class FormuleAbonnement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\NombreDeConnexion", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $NombreDeConnexion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNombreDeConnexion(): ?NombreDeConnexion
    {
        return $this->NombreDeConnexion;
    }

    public function setNombreDeConnexion(NombreDeConnexion $NombreDeConnexion): self
    {
        $this->NombreDeConnexion = $NombreDeConnexion;

        return $this;
    }
}
