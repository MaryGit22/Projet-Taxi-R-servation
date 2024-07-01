<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $depart = null;

    #[ORM\Column(length: 255)]
    private ?string $arrivee = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateTime = null;

    #[ORM\Column]
    private ?int $adulte = null;

    #[ORM\Column]
    private ?int $enfant = null;

    #[ORM\ManyToOne(inversedBy: 'bookings')]
    private ?Taxis $services = null;

    public function __construct()
    {
        $this->details = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepart(): ?string
    {
        return $this->depart;
    }

    public function setDepart(string $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getArrivee(): ?string
    {
        return $this->arrivee;
    }

    public function setArrivee(string $arrivee): self
    {
        $this->arrivee = $arrivee;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getAdulte(): ?int
    {
        return $this->adulte;
    }

    public function setAdulte(int $adulte): self
    {
        $this->adulte = $adulte;

        return $this;
    }

    public function getEnfant(): ?int
    {
        return $this->enfant;
    }

    public function setEnfant(int $enfant): self
    {
        $this->enfant = $enfant;

        return $this;
    }

    public function getServices(): ?Taxis
    {
        return $this->services;
    }

    public function setServices(?Taxis $services): self
    {
        $this->services = $services;

        return $this;
    }

}
