<?php
// src/ShoppingCart.php
namespace App;

use App\Product;
use App\Order;
use App\Strategy\BasePricingStrategy;
use App\Strategy\RedWidgetHalfPriceStrategy;

class ShoppingCart
{
    private ProductRepository $repository;
    private Order $order;

    public function __construct()
    {
        $this->repository = new ProductRepository();
        $this->order = new Order([
            new RedWidgetHalfPriceStrategy(),
            new BasePricingStrategy()
        ]);
    }

    public function addProductByCode(string $code, int $quantity): void
    {
        $product = $this->repository->findByCode($code);
        if ($product !== null) {
            $this->order->addItem($product, $quantity);
        }
    }

    public function getTotal(): float
    {
        return $this->order->calculateTotal();
    }
}