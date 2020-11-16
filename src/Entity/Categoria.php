<?php

namespace App\Entity;

use App\Repository\CategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriaRepository::class)
 */
class Categoria
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $USA;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Europe;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Asia;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $no;

    /**
     * @ORM\OneToMany(targetEntity=Products::class, mappedBy="categotiia")
     */
    private $travels;

    public function __construct()
    {
        $this->travels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUSA(): ?string
    {
        return $this->USA;
    }

    public function setUSA(?string $USA): self
    {
        $this->USA = $USA;

        return $this;
    }

    public function getEurope(): ?string
    {
        return $this->Europe;
    }

    public function setEurope(?string $Europe): self
    {
        $this->Europe = $Europe;

        return $this;
    }

    public function getAsia(): ?string
    {
        return $this->Asia;
    }

    public function setAsia(?string $Asia): self
    {
        $this->Asia = $Asia;

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(?string $no): self
    {
        $this->no = $no;

        return $this;
    }

    /**
     * @return Collection|Products[]
     */
    public function getTravels(): Collection
    {
        return $this->travels;
    }

    public function addTravel(Products $travel): self
    {
        if (!$this->travels->contains($travel)) {
            $this->travels[] = $travel;
            $travel->setCategotiia($this);
        }

        return $this;
    }

    public function removeTravel(Products $travel): self
    {
        if ($this->travels->removeElement($travel)) {
            // set the owning side to null (unless already changed)
            if ($travel->getCategotiia() === $this) {
                $travel->setCategotiia(null);
            }
        }

        return $this;
    }
}