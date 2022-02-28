<?php

namespace App\Entity;

use App\Repository\ExcerciceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExcerciceRepository::class)]
class Excercice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string')]
    private $dateOuverture;

    #[ORM\Column(type: 'string')]
    private $dateCloture;

   

    #[ORM\Column(type: 'string', length: 255)]
    private $regimeTVA;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOuverture(): ?string
    {
        return $this->dateOuverture;
    }

    public function setDateOuverture(string $dateOuverture): self
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    public function getDateCloture(): ?string
    {
        return $this->dateCloture;
    }

    public function setDateCloture(string $dateCloture): self
    {
        $this->dateCloture = $dateCloture;

        return $this;
    }

   

    public function getRegimeTVA(): ?string
    {
        return $this->regimeTVA;
    }

    public function setRegimeTVA(string $regimeTVA): self
    {
        $this->regimeTVA = $regimeTVA;

        return $this;
    }
}
