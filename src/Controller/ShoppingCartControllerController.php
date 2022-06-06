<?php

namespace Coolblue\Interview\Controller;

use Coolblue\Interview\Entity\ShoppingCart;
use Coolblue\Interview\Repository\ShoppingCartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingCartControllerController extends AbstractController
{
    private ShoppingCart $cart;

    #[Route('/cart', name: 'app_shopping_cart_controler')]
    public function index(Request $request): Response
    {
        return $this->renderCard($request->get('cartid', 1));
    }

    public function renderCard($cartId): Response
    {
        // TODO hacky but alright for now
        $this->cart = (new ShoppingCartRepository())->getShoppingCart($cartId);

        ob_start();

        require __DIR__.'/../../template/cart.tpl';

        $result = ob_get_contents();
        ob_clean();

        return new Response($result);
    }
}
