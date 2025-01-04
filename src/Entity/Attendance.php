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

    /**
     * @var Collection<int, members>
     */
    #[ORM\ManyToMany(targetEntity: members::class)]
    private Collection $member_id;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?activities $activity_id = null;

    #[ORM\Column]
    private ?bool $checked_in = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $checked_in_time = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $remarks = null;

    public function __construct()
    {
        $this->member_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getActivityId(): ?activities
    {
        return $this->activity_id;
    }

    public function setActivityId(?activities $activity_id): static
    {
        $this->activity_id = $activity_id;

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

    public function getCheckedInTime(): ?\DateTimeInterface
    {
        return $this->checked_in_time;
    }

    public function setCheckedInTime(?\DateTimeInterface $checked_in_time): static
    {
        $this->checked_in_time = $checked_in_time;

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
}
