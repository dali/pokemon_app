<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToMany(targetEntity: Type::class, inversedBy: 'pokemons')]
    private Collection $types;

    #[ORM\OneToOne(mappedBy: 'pokemon', cascade: ['persist', 'remove'])]
    private ?BaseStats $stats = null;

    public function __construct()
    {
        $this->types = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Type>
     */
    public function getTypes(): Collection
    {
        return $this->types;
    }

    public function addType(Type $type): self
    {
        if (!$this->types->contains($type)) {
            $this->types->add($type);
        }

        return $this;
    }

    public function removeType(Type $type): self
    {
        $this->types->removeElement($type);

        return $this;
    }


    public function getStats(): ?BaseStats
    {
        return $this->stats;
    }

    public function setStats(?BaseStats $stats): self
    {
        // unset the owning side of the relation if necessary
        if ($stats === null && $this->stats !== null) {
            $this->stats->setPokemon(null);
        }

        // set the owning side of the relation if necessary
        if ($stats !== null && $stats->getPokemon() !== $this) {
            $stats->setPokemon($this);
        }

        $this->stats = $stats;

        return $this;
    }

}
