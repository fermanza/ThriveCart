<?php
// src/Strategy/BasePricingStrategy.php
namespace App\Strategy;

use App\Product;

class BasePricingStrategy implements PricingStrategyInterface
{
    public function calculatePrice(Product $product, int $quantity): float
    {
        return $product->getPrice() * $quantity;
    }
}