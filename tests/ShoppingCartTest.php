<?php
// tests/ShoppingCartTest.php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\ShoppingCart;

class ShoppingCartTest extends TestCase {
    public function testShoppingCartTotal() {
        $cart = new ShoppingCart();
        $cart->addProductByCode('B01', 1);
        $cart->addProductByCode('G01', 1);
        $this->assertEquals(37.85, $cart->getTotal());

        $cart = new ShoppingCart();
        $cart->addProductByCode('R01', 2);
        $this->assertEquals(54.37, $cart->getTotal());

        $cart = new ShoppingCart();
        $cart->addProductByCode('R01', 1);
        $cart->addProductByCode('G01', 1);
        $this->assertEquals(60.85, $cart->getTotal());

        $cart = new ShoppingCart();
        $cart->addProductByCode('B01', 2);
        $cart->addProductByCode('R01', 3);
        $this->assertEquals(98.27, $cart->getTotal());
    }
}