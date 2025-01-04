<?php

namespace App\Entity;

use App\Repository\MembersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembersRepository::class)]
class Members
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $student_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 12, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $join_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $birth_day = null;

    #[ORM\OneToOne(inversedBy: 'name', cascade: ['persist', 'remove'])]
    private ?Users $user_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getStudentId(): ?string
    {
        return $this->student_id;
    }

    public function setStudentId(string $student_id): static
    {
        $this->student_id = $student_id;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getJoinDate(): ?\DateTimeInterface
    {
        return $this->join_date;
    }

    public function setJoinDate(?\DateTimeInterface $join_date): static
    {
        $this->join_date = $join_date;

        return $this;
    }

    public function getBirthDay(): ?\DateTimeInterface
    {
        return $this->birth_day;
    }

    public function setBirthDay(?\DateTimeInterface $birth_day): static
    {
        $this->birth_day = $birth_day;

        return $this;
    }

    public function getUserId(): ?users
    {
        return $this->user_id;
    }

    public function setUserId(?users $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }
}
