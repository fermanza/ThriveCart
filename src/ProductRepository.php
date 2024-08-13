<?php
// src/ProductRepository.php
namespace App;

class ProductRepository
{
    private array $products;

    public function __construct()
    {
        $this->products = [
            new Product('1', 'Red Widget', 'R01', 32.95),
            new Product('2', 'Green Widget', 'G01', 24.95),
            new Product('3', 'Blue Widget', 'B01', 7.95),
        ];
    }

    public function findByCode(string $code): ?Product
    {
        foreach ($this->products as $product) {
            if ($product->getCode() === $code) {
                return $product;
            }
        }
        return null;
    }
}