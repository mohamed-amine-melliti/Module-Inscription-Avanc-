<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    private $email;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    private $password;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Dossier::class, orphanRemoval: true)]
    private $Dossier;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $acceptOffresCommericiales;

    #[ORM\Column(type: 'boolean')]
    private $acceptation;

    #[ORM\Column(type: 'string', length: 255)]
    private $modePaiementChoisi;

    public function __construct()
    {
        $this->Dossier = new ArrayCollection();
    }

//    #[ORM\Column(type: 'boolean')]
//    private $acceptOffresCommerciales;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

//    public function getAcceptOffresCommerciales(): ?bool
//    {
//        return $this->acceptOffresCommerciales;
//    }
//
//    public function setAcceptOffresCommerciales(bool $acceptOffresCommerciales): self
//    {
//        $this->acceptOffresCommerciales = $acceptOffresCommerciales;
//
//        return $this;
//    }

/**
 * @return Collection|Dossier[]
 */
public function getDossier(): Collection
{
    return $this->Dossier;
}

public function addDossier(Dossier $dossier): self
{
    if (!$this->Dossier->contains($dossier)) {
        $this->Dossier[] = $dossier;
        $dossier->setUser($this);
    }

    return $this;
}

public function removeDossier(Dossier $dossier): self
{
    if ($this->Dossier->removeElement($dossier)) {
        // set the owning side to null (unless already changed)
        if ($dossier->getUser() === $this) {
            $dossier->setUser(null);
        }
    }

    return $this;
}

public function getAcceptOffresCommericiales(): ?bool
{
    return $this->acceptOffresCommericiales;
}

public function setAcceptOffresCommericiales(?bool $acceptOffresCommericiales): self
{
    $this->acceptOffresCommericiales = $acceptOffresCommericiales;

    return $this;
}

public function getAcceptation(): ?bool
{
    return $this->acceptation;
}

public function setAcceptation(bool $acceptation): self
{
    $this->acceptation = $acceptation;

    return $this;
}

public function getModePaiementChoisi(): ?string
{
    return $this->modePaiementChoisi;
}

public function setModePaiementChoisi(string $modePaiementChoisi): self
{
    $this->modePaiementChoisi = $modePaiementChoisi;

    return $this;
}
public function __toString(): string
{
    // TODO: Implement __toString() method.
   return $this->email;
}
}
