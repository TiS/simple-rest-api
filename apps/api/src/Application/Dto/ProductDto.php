<?php

namespace App\Application\Dto;

use App\Domain\Model\Product\Product;

/**
 * Product DTO.
 */
class ProductDto
{
    /**
     * ID.
     *
     * @var string
     */
    private string $id;

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
     * Create DTO based on entity.
     *
     * @param Product $entity
     *
     * @return static
     *
     * @todo To consider - move model - DTO translation to separate service / builder.
     */
    public static function fromEntity(Product $entity): self
    {
        return new self($entity->getId()->toString(), $entity->getName(), $entity->getPrice());
    }

    /**
     * ProductDto constructor.
     *
     * @param string $id
     * @param string $name
     * @param float $price
     */
    public function __construct(string $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
