<?php
// tests/ShippingStrategyTest.php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Strategy\ShippingStrategy;

class ShippingStrategyTest extends TestCase
{
    public function testFreeShipping()
    {
        $strategy = new ShippingStrategy();
        $this->assertEquals(0.0, $strategy->calculateShippingCost(100.00));
    }

    public function testUnder50Shipping()
    {
        $strategy = new ShippingStrategy();
        $this->assertEquals(4.95, $strategy->calculateShippingCost(49.99));
    }

    public function testUnder90Shipping()
    {
        $strategy = new ShippingStrategy();
        $this->assertEquals(2.95, $strategy->calculateShippingCost(89.99));
    }
}