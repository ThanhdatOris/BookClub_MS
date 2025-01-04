<?php

namespace App\Entity;

use App\Repository\FundTransactionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FundTransactionsRepository::class)]
class FundTransactions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $amount = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $fund_descr = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne]
    private ?users $executed_by = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getFundDescr(): ?string
    {
        return $this->fund_descr;
    }

    public function setFundDescr(?string $fund_descr): static
    {
        $this->fund_descr = $fund_descr;

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

    public function getExecutedBy(): ?users
    {
        return $this->executed_by;
    }

    public function setExecutedBy(?users $executed_by): static
    {
        $this->executed_by = $executed_by;

        return $this;
    }
}
