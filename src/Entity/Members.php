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
    private ?string $fullname = null;

    #[ORM\Column(length: 20)]
    private ?string $student_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 12, nullable: true)]
    private ?string $phone_num = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $join_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $birth_date = null;

    #[ORM\OneToOne(inversedBy: 'member_id', cascade: ['persist', 'remove'])]
    private ?Users $user_id = null;

    #[ORM\Column(length: 255)]
    private ?string $Classes = null;

    #[ORM\Column(length: 255)]
    private ?string $Faculty = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    public function setFullname(string $fullname): static
    {
        $this->fullname = $fullname;

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

    public function getPhoneNum(): ?string
    {
        return $this->phone_num;
    }

    public function setPhoneNum(?string $phone_num): static
    {
        $this->phone_num = $phone_num;

        return $this;
    }

    public function getJoinDate(): ?\DateTimeInterface
    {
        return $this->join_date;
    }

    public function setJoinDate(\DateTimeInterface $join_date): static
    {
        $this->join_date = $join_date;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birth_date;
    }

    public function setBirthDate(?\DateTimeInterface $birth_date): static
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    public function getUserId(): ?Users
    {
        return $this->user_id;
    }

    public function setUserId(?Users $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getClasses(): ?string
    {
        return $this->Classes;
    }

    public function setClasses(string $Classes): static
    {
        $this->Classes = $Classes;

        return $this;
    }

    public function getFaculty(): ?string
    {
        return $this->Faculty;
    }

    public function setFaculty(string $Faculty): static
    {
        $this->Faculty = $Faculty;

        return $this;
    }
}
