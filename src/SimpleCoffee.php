<?php

namespace AlexanderZabornyi\DecoratorTest;

class SimpleCoffee implements CoffeeInterface
{
    /**
     * Получить стоимость
     *
     * @return float
     */
    public function getCost(): float
    {
        return 10;
    }

    /**
     * Получить описание
     *
     * @return string
     */
    public function getDesciption(): string
    {
        return 'Coffee';
    }
}