<?php

namespace App\Domain\Model\Product;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class Product
 */
class Product
{
    /**
     * ID.
     *
     * @var UuidInterface
     */
    private UuidInterface $id;

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
     * Product creation time.
     *
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Last modification time.
     *
     * @var DateTime
     */
    private DateTime $modifiedAt;

    /**
     * Product constructor.
     *
     * @param string $name
     * @param float $price
     */
    public function __construct(string $name, float $price)
    {
        $this->id = Uuid::uuid4();
        $this->name = $name;
        $this->price = $price;
        $this->createdAt = new DateTime();
        $this->modifiedAt = new DateTime();
    }

    /**
     * Update price.
     *
     * @param float $price
     *
     * @todo Think about possible business cases - maybe we should only update full product, not separate fields?
     *       What should be mutable?
     */
    public function updatePrice(float $price): void
    {
        $this->price = $price;
        $this->modifiedAt = new DateTime();
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
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

    /**
     * Product creation time.
     *
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Product modification time.
     *
     * @return DateTime
     */
    public function getModifiedAt(): DateTime
    {
        return $this->modifiedAt;
    }
}
