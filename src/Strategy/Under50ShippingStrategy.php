<?php
// src/Strategy/Under50ShippingStrategy.php
namespace App\Strategy;

class Under50ShippingStrategy implements ShippingStrategyInterface
{
    public function calculateShippingCost(float $orderTotal): float
    {
        return 4.95;
    }
}