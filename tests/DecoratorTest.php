<?php

namespace AlexanderZabornyi\DecoratorTest\Tests;

use AlexanderZabornyi\DecoratorTest\MilkCoffee;
use AlexanderZabornyi\DecoratorTest\SimpleCoffee;
use AlexanderZabornyi\DecoratorTest\VanillaCoffee;
use AlexanderZabornyi\DecoratorTest\WhipCoffee;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator()
    {
        $simpleCoffee = new SimpleCoffee();
        $this->assertEquals(10, $simpleCoffee->getCost());
        $this->assertEquals('Coffee', $simpleCoffee->getDesciption());

        $milkCoffee = new MilkCoffee($simpleCoffee);
        $this->assertEquals(12, $milkCoffee->getCost());
        $this->assertEquals('Coffee with milk', $milkCoffee->getDesciption());

        $whipCoffee = new WhipCoffee($milkCoffee);
        $this->assertEquals(17, $whipCoffee->getCost());
        $this->assertEquals('Coffee with milk with whip', $whipCoffee->getDesciption());

        $vanillaCoffee = new VanillaCoffee($whipCoffee);
        $this->assertEquals(20, $vanillaCoffee->getCost());
        $this->assertEquals('Coffee with milk with whip with vanilla', $vanillaCoffee->getDesciption());
    }
}