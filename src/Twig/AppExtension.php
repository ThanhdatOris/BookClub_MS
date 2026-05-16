<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('format_currency', [$this, 'formatCurrency']),
        ];
    }

    public function formatCurrency(float $amount): string
    {
        if ($amount >= 1000000) {
            return round($amount / 1000000, 1) . ' triệu';
        } elseif ($amount >= 1000) {
            return round($amount / 1000, 1) . ' nghìn';
        }

        return number_format($amount);
    }
}