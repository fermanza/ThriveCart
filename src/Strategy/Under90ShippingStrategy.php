<?php
// src/Strategy/Under90ShippingStrategy.php
namespace App\Strategy;

class Under90ShippingStrategy implements ShippingStrategyInterface
{
    public function calculateShippingCost(float $orderTotal): float
    {
        return 2.95;
    }
}