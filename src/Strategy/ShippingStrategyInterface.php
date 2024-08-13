<?php
// src/Strategy/ShippingStrategyInterface.php
namespace App\Strategy;

interface ShippingStrategyInterface
{
    public function calculateShippingCost(float $orderTotal): float;
}