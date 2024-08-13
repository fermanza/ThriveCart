<?php
// src/Order.php
namespace App;

use App\Strategy\PricingStrategyInterface;
use App\Strategy\BasePricingStrategy;
use App\Strategy\ShippingStrategyInterface;
use App\Strategy\ShippingStrategy;

class Order
{
    private $items;
    private $strategies;
    private $pricingStrategies;
    private ShippingStrategy $shippingStrategy;

    public function __construct(array $strategies)
    {
        $this->items = [];
        $this->strategies = $strategies;
        $this->pricingStrategies = [];
        $this->shippingStrategy = new ShippingStrategy();
    }

    public function addItem(Product $product, int $quantity): void
    {
        $this->items[] = [
            'product' => $product,
            'quantity' => $quantity
        ];
    }

    public function getTotal(): float
    {
        // Calculate total based on the pricing strategies
        $total = 0.0;

        foreach ($this->items as $item) {
            $product = $item['product'];
            $quantity = $item['quantity'];
            $price = $product->getPrice();

            foreach ($this->strategies as $strategy) {
                if ($strategy instanceof PricingStrategyInterface) {
                    $price = $strategy->apply($product, $price);
                }
            }

            $total += $price * $quantity;
        }

        return $total;
    }

    public function calculateTotal(): float
    {
        $total = 0.0;
        foreach ($this->items as $item) {
            foreach ($this->pricingStrategies as $strategy) {
                $total += $strategy->calculatePrice($item['product'], $item['quantity']);
            }
        }
        $total += $this->shippingStrategy->calculateShippingCost($total);
        return $total;
    }
}