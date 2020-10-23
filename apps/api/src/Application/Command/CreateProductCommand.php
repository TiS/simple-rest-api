<?php

namespace App\Application\Command;

/**
 * Command for new product creation.
 */
class CreateProductCommand
{
    /**
     * Name.
     *
     * @var string
     */
    private string $name;

    /**
     * Price.
     *
     * @var float
     */
    private float $price;

    /**
     * CreateProduct constructor.
     *
     * @param string $name
     * @param float $price
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Price.
     *
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
