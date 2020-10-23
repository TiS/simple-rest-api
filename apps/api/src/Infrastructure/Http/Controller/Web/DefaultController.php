<?php

namespace App\Infrastructure\Http\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Default controller.
 */
class DefaultController extends AbstractController
{
    /**
     * @return Response
     *
     * @Route(path="/", name="index", methods={"GET"})
     */
    public function getIndex(): Response
    {
        return $this->render('index.html.twig');
    }
}
