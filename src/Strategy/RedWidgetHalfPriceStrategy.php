<?php
// src/Strategy/RedWidgetHalfPriceStrategy.php
namespace App\Strategy;

use App\Product;

class RedWidgetHalfPriceStrategy extends BasePricingStrategy
{
    public function calculatePrice(Product $product, int $quantity): float
    {
        if ($product->getCode() === 'R01') {
            $fullPriceCount = intdiv($quantity, 2) + ($quantity % 2);
            $halfPriceCount = intdiv($quantity, 2);
            return $product->getPrice() * $fullPriceCount + ($product->getPrice() / 2) * $halfPriceCount;
        }
        return parent::calculatePrice($product, $quantity);
    }
}