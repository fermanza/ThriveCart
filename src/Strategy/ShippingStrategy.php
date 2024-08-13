<?php
// src/Strategy/ShippingStrategy.php
namespace App\Strategy;

class ShippingStrategy
{
    private array $strategies;

    public function __construct()
    {
        $this->strategies = [
            function ($total) {
                return $total >= 90.00 ? new FreeShippingStrategy() : null;
            },
            function ($total) {
                return $total < 50.00 ? new Under50ShippingStrategy() : null;
            },
            function ($total) {
                return $total < 90.00 && $total >= 50.00 ? new Under90ShippingStrategy() : null;
            },
        ];
    }

    public function calculateShippingCost(float $orderTotal): float
    {
        foreach ($this->strategies as $getStrategy) {
            $strategy = $getStrategy($orderTotal);
            if ($strategy !== null) {
                return $strategy->calculateShippingCost($orderTotal);
            }
        }
        return 0.0; // default case, should never happen
    }
}