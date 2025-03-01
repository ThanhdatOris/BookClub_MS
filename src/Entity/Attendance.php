<?php

namespace App\Entity;

use App\Repository\AttendanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttendanceRepository::class)]
class Attendance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?activities $activity_id = null;

    /**
     * @var Collection<int, members>
     */
    #[ORM\ManyToMany(targetEntity: members::class)]
    private Collection $member_id;

    #[ORM\Column]
    private ?bool $checked_in = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $check_in_time = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remarks = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?UUsers $checked_by_id = null;

    public function __construct()
    {
        $this->member_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivityId(): ?activities
    {
        return $this->activity_id;
    }

    public function setActivityId(?activities $activity_id): static
    {
        $this->activity_id = $activity_id;

        return $this;
    }

    /**
     * @return Collection<int, members>
     */
    public function getMemberId(): Collection
    {
        return $this->member_id;
    }

    public function addMemberId(members $memberId): static
    {
        if (!$this->member_id->contains($memberId)) {
            $this->member_id->add($memberId);
        }

        return $this;
    }

    public function removeMemberId(members $memberId): static
    {
        $this->member_id->removeElement($memberId);

        return $this;
    }

    public function isCheckedIn(): ?bool
    {
        return $this->checked_in;
    }

    public function setCheckedIn(bool $checked_in): static
    {
        $this->checked_in = $checked_in;

        return $this;
    }

    public function getCheckInTime(): ?\DateTimeInterface
    {
        return $this->check_in_time;
    }

    public function setCheckInTime(?\DateTimeInterface $check_in_time): static
    {
        $this->check_in_time = $check_in_time;

        return $this;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): static
    {
        $this->remarks = $remarks;

        return $this;
    }

    public function getCheckedById(): ?Users
    {
        return $this->checked_by_id;
    }

    public function setCheckedById(?Users $checked_by_id): static
    {
        $this->checked_by_id = $checked_by_id;

        return $this;
    }
}
