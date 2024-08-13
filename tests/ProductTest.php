<?php
// tests/ProductTest.php
namespace App\Tests;

use App\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testProductCreation()
    {
        $product = new Product('1', 'Red Widget', 'R01', 32.95);
        $this->assertEquals('1', $product->getId());
        $this->assertEquals('Red Widget', $product->getName());
        $this->assertEquals('R01', $product->getCode());
        $this->assertEquals(32.95, $product->getPrice());

        $product = new Product('2', 'Green Widget', 'G01', 24.95);
        $this->assertEquals('2', $product->getId());
        $this->assertEquals('Green Widget', $product->getName());
        $this->assertEquals('G01', $product->getCode());
        $this->assertEquals(24.95, $product->getPrice());

        $product = new Product('3', 'Blue Widget', 'B01', 7.95);
        $this->assertEquals('3', $product->getId());
        $this->assertEquals('Blue Widget', $product->getName());
        $this->assertEquals('B01', $product->getCode());
        $this->assertEquals(7.95, $product->getPrice());
    }
}