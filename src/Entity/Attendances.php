<?php

namespace App\Entity;

use App\Repository\AttendancesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttendancesRepository::class)]
class Attendances
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Activities $activity_id = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $remark = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $marked_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $marked_by = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getActivityId(): ?Activities
    {
        return $this->activity_id;
    }

    public function setActivityId(?Activities $activity_id): static
    {
        $this->activity_id = $activity_id;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;

        return $this;
    }

    public function getMarkedAt(): ?\DateTimeInterface
    {
        return $this->marked_at;
    }

    public function setMarkedAt(\DateTimeInterface $marked_at): static
    {
        $this->marked_at = $marked_at;

        return $this;
    }

    public function getMarkedBy(): ?Users
    {
        return $this->marked_by;
    }

    public function setMarkedBy(?Users $marked_by): static
    {
        $this->marked_by = $marked_by;

        return $this;
    }
}
