<?php

namespace AlexanderZabornyi\DecoratorTest;

class MilkCoffee implements CoffeeInterface
{
    protected $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * Получить стоимость
     *
     * @return float
     */
    public function getCost(): float
    {
        return $this->coffee->getCost() + 2;
    }

    /**
     * Получить описание
     *
     * @return string
     */
    public function getDesciption(): string
    {
        return $this->coffee->getDesciption() . ' with milk';
    }
}