<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingCardControlerController extends AbstractController
{
    #[Route('/shopping/card/controler', name: 'app_shopping_card_controler')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ShoppingCardControlerController.php',
        ]);
    }
}
