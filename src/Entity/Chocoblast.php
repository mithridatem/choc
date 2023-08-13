<?php

namespace App\Entity;

use App\Repository\ChocoblastRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChocoblastRepository::class)]
class Chocoblast
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $slogan = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'chocoblasts')]
    private ?User $auteur = null;

    #[ORM\ManyToOne(inversedBy: 'chocoblasts')]
    private ?User $cible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }

    public function setSlogan(string $slogan): static
    {
        $this->slogan = $slogan;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getCible(): ?User
    {
        return $this->cible;
    }

    public function setCible(?User $cible): static
    {
        $this->cible = $cible;

        return $this;
    }
}
