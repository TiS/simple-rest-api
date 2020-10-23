<?php

namespace App\Application\Service;

use App\Application\Command\CreateProductCommand;
use App\Application\Dto\ProductDto;
use App\Domain\Model\Product\Product;

/**
 * Service for product related operations.
 */
class ProductService
{
    /**
     * Create new product.
     *
     * @param CreateProductCommand $command
     *
     * @return ProductDto Product DTO.
     */
    public function createProduct(CreateProductCommand $command): ProductDto
    {
        // TODO: Check, if given product does not exist in store

        // Create a product
        $product = new Product($command->getName(), $command->getPrice());

        return ProductDto::fromEntity($product);
    }
}
