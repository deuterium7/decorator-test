<?php

namespace AlexanderZabornyi\DecoratorTest;

interface CoffeeInterface
{
    public function getCost(): float;

    public function getDesciption(): string;
}