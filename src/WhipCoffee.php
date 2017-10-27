<?php

namespace AlexanderZabornyi\DecoratorTest;

class WhipCoffee implements CoffeeInterface
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
        return $this->coffee->getCost() + 5;
    }

    /**
     * Получить описание
     *
     * @return string
     */
    public function getDesciption(): string
    {
        return $this->coffee->getDesciption() . ' with whip';
    }
}