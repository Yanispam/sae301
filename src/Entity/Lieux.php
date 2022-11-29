<?php

namespace App\Entity;

use App\Repository\LieuxRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LieuxRepository::class)]
class Lieux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $capacite = null;

    #[ORM\OneToMany(mappedBy: 'lieu', targetEntity: Manifs::class)]
    private Collection $manifs;

    public function __construct()
    {
        $this->manifs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

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

    public function getCapacite(): ?string
    {
        return $this->capacite;
    }

    public function setCapacite(string $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * @return Collection<int, Manifs>
     */
    public function getManifs(): Collection
    {
        return $this->manifs;
    }

    public function addManif(Manifs $manif): self
    {
        if (!$this->manifs->contains($manif)) {
            $this->manifs->add($manif);
            $manif->setLieu($this);
        }

        return $this;
    }

    public function removeManif(Manifs $manif): self
    {
        if ($this->manifs->removeElement($manif)) {
            // set the owning side to null (unless already changed)
            if ($manif->getLieu() === $this) {
                $manif->setLieu(null);
            }
        }

        return $this;
    }
}
