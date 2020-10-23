<?php

namespace App\Infrastructure\Http\Controller\Api;

use App\Application\Command\CreateProductCommand;
use App\Application\Service\ProductService;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ProductController
 */
class ProductController extends AbstractFOSRestController
{
    /**
     * Product service.
     *
     * @var ProductService
     */
    private ProductService $productService;

    /**
     * ProductController constructor.
     *
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Create a product.
     *
     * @param ParamFetcher $paramFetcher
     *
     * @return View
     *
     * @Rest\Post("/products")
     *
     * @Rest\RequestParam(name="name", requirements={@Assert\Type("string")})
     * @Rest\RequestParam(name="price", requirements={@Assert\Type("numeric")})
     */
    public function createProduct(ParamFetcher $paramFetcher): View
    {
        $productDto = $this
            ->productService
            ->createProduct(
                new CreateProductCommand($paramFetcher->get('name'), $paramFetcher->get('price'))
            );

        return View::create($productDto, Response::HTTP_CREATED);
    }
}
