<?php
// src/Strategy/FreeShippingStrategy.php
namespace App\Strategy;

class FreeShippingStrategy implements ShippingStrategyInterface
{
    public function calculateShippingCost(float $orderTotal): float
    {
        return 0.0;
    }
}