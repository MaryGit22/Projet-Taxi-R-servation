<?php

namespace App\Entity;

use App\Repository\BookingDetailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingDetailRepository::class)]
class BookingDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?booking $booking = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBooking(): ?booking
    {
        return $this->booking;
    }

    public function setBooking(?booking $booking): self
    {
        $this->booking = $booking;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }
}
