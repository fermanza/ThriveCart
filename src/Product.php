<?php
// src/Product.php
namespace App;

class Product
{
    private string $id;
    private string $name;
    private string $code;
    private float $price;

    public function __construct(string $id, string $name, string $code, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
    }

// Getters
    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}