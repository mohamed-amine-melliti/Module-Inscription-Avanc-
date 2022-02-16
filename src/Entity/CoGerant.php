<?php

namespace App\Entity;

use App\Repository\CoGerantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoGerantRepository::class)]
class CoGerant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomCogerant;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenomCogerant;

    #[ORM\Column(type: 'string', length: 255)]
    private $participation;

    #[ORM\ManyToOne(targetEntity: Dossier::class, inversedBy: 'coGerant')]
    #[ORM\JoinColumn(nullable: false)]
    private $dossier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCogerant(): ?string
    {
        return $this->nomCogerant;
    }

    public function setNomCogerant(string $nomCogerant): self
    {
        $this->nomCogerant = $nomCogerant;

        return $this;
    }

    public function getPrenomCogerant(): ?string
    {
        return $this->prenomCogerant;
    }

    public function setPrenomCogerant(string $prenomCogerant): self
    {
        $this->prenomCogerant = $prenomCogerant;

        return $this;
    }

    public function getParticipation(): ?string
    {
        return $this->participation;
    }

    public function setParticipation(string $participation): self
    {
        $this->participation = $participation;

        return $this;
    }

    public function getDossier(): ?Dossier
    {
        return $this->dossier;
    }

    public function setDossier(?Dossier $dossier): self
    {
        $this->dossier = $dossier;

        return $this;
    }
}
