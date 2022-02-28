<?php

namespace App\Entity;

use App\Repository\DossierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierRepository::class)]
class Dossier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomDossier;

    #[ORM\Column(type: 'string', length: 255)]
    private $raisonSociale;

    #[ORM\Column(type: 'string', length: 255)]
    private $formeJuridique;

    #[ORM\Column(type: 'string', length: 255)]
    private $capitalSocial;

    #[ORM\Column(type: 'string', length: 255)]
    private $nbAssocies;

    #[ORM\Column(type: 'text')]
    private $adressSiegeSocial;

    #[ORM\Column(type: 'string', length: 255)]
    private $codePostale;

    #[ORM\Column(type: 'string', length: 255)]
    private $ville;

    #[ORM\Column(type: 'string', length: 255)]
    private $numeroTel;


    #[ORM\Column(type: 'string', length: 255)]
    private $adressMail;

    #[ORM\Column(type: 'string', length: 255)]
    private $siret;

    #[ORM\Column(type: 'string', length: 255)]
    private $franchiseEnBaseTva;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $numeroTVAintracommunaitre;

    #[ORM\Column(type: 'string', length: 255)]
    private $typeImposition;

    #[ORM\Column(type: 'string', length: 255)]
    private $regimeMicro;

    #[ORM\Column(type: 'string', length: 255)]
    private $categorieImposition;

    #[ORM\Column(type: 'string', length: 255)]
    private $regimeIndependants;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomGerant;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenomGerant;

    #[ORM\OneToMany(mappedBy: 'dossier', targetEntity: CoGerant::class, orphanRemoval: true)]
    private $coGerant;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'Dossier')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\Column(type: 'string', length: 255)]
    private $secteurActivite;

    public function __construct()
    {
        $this->coGerant = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDossier(): ?string
    {
        return $this->nomDossier;
    }

    public function setNomDossier(string $nomDossier): self
    {
        $this->nomDossier = $nomDossier;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getFormeJuridique(): ?string
    {
        return $this->formeJuridique;
    }

    public function setFormeJuridique(string $formeJuridique): self
    {
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    public function getCapitalSocial(): ?string
    {
        return $this->capitalSocial;
    }

    public function setCapitalSocial(string $capitalSocial): self
    {
        $this->capitalSocial = $capitalSocial;

        return $this;
    }

    public function getNbAssocies(): ?string
    {
        return $this->nbAssocies;
    }

    public function setNbAssocies(string $nbAssocies): self
    {
        $this->nbAssocies = $nbAssocies;

        return $this;
    }

    public function getAdressSiegeSocial(): ?string
    {
        return $this->adressSiegeSocial;
    }

    public function setAdressSiegeSocial(string $adressSiegeSocial): self
    {
        $this->adressSiegeSocial = $adressSiegeSocial;

        return $this;
    }

    public function getCodePostale(): ?string
    {
        return $this->codePostale;
    }

    public function setCodePostale(string $codePostale): self
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getNumeroTel(): ?string
    {
        return $this->numeroTel;
    }

    public function setNumeroTel(string $numeroTel): self
    {
        $this->numeroTel = $numeroTel;

        return $this;
    }





    public function getAdressMail(): ?string
    {
        return $this->adressMail;
    }

    public function setAdressMail(string $adressMail): self
    {
        $this->adressMail = $adressMail;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getFranchiseEnBaseTva(): ?string
    {
        return $this->franchiseEnBaseTva;
    }

    public function setFranchiseEnBaseTva(string $franchiseEnBaseTva): self
    {
        $this->franchiseEnBaseTva = $franchiseEnBaseTva;

        return $this;
    }

    public function getNumeroTVAintracommunaitre(): ?string
    {
        return $this->numeroTVAintracommunaitre;
    }

    public function setNumeroTVAintracommunaitre(?string $numeroTVAintracommunaitre): self
    {
        $this->numeroTVAintracommunaitre = $numeroTVAintracommunaitre;

        return $this;
    }

    public function getTypeImposition(): ?string
    {
        return $this->typeImposition;
    }

    public function setTypeImposition(string $typeImposition): self
    {
        $this->typeImposition = $typeImposition;

        return $this;
    }

    public function getRegimeMicro(): ?string
    {
        return $this->regimeMicro;
    }

    public function setRegimeMicro(string $regimeMicro): self
    {
        $this->regimeMicro = $regimeMicro;

        return $this;
    }

    public function getCategorieImposition(): ?string
    {
        return $this->categorieImposition;
    }

    public function setCategorieImposition(string $categorieImposition): self
    {
        $this->categorieImposition = $categorieImposition;

        return $this;
    }

    public function getRegimeIndependants(): ?string
    {
        return $this->regimeIndependants;
    }

    public function setRegimeIndependants(string $regimeIndependants): self
    {
        $this->regimeIndependants = $regimeIndependants;

        return $this;
    }

    public function getNomGerant(): ?string
    {
        return $this->nomGerant;
    }

    public function setNomGerant(string $nomGerant): self
    {
        $this->nomGerant = $nomGerant;

        return $this;
    }

    public function getPrenomGerant(): ?string
    {
        return $this->prenomGerant;
    }

    public function setPrenomGerant(string $prenomGerant): self
    {
        $this->prenomGerant = $prenomGerant;

        return $this;
    }

    /**
     * @return Collection|coGerant[]
     */
    public function getCoGerant(): Collection
    {
        return $this->coGerant;
    }

    public function addCoGerant(coGerant $coGerant): self
    {
        if (!$this->coGerant->contains($coGerant)) {
            $this->coGerant[] = $coGerant;
            $coGerant->setDossier($this);
        }

        return $this;
    }

    public function removeCoGerant(coGerant $coGerant): self
    {
        if ($this->coGerant->removeElement($coGerant)) {
            // set the owning side to null (unless already changed)
            if ($coGerant->getDossier() === $this) {
                $coGerant->setDossier(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getSecteurActivite(): ?string
    {
        return $this->secteurActivite;
    }

    public function setSecteurActivite(string $secteurActivite): self
    {
        $this->secteurActivite = $secteurActivite;

        return $this;
    }
}
