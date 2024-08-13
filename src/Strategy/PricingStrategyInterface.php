<?php
// src/Strategy/PricingStrategyInterface.php
namespace App\Strategy;

use App\Product;

interface PricingStrategyInterface
{
    public function calculatePrice(Product $product, int $quantity): float;
}