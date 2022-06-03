<?php

namespace Coolblue\Interview\Controller;

use Coolblue\Interview\Entity\ShoppingCart;
use Coolblue\Interview\Repository\ShoppingCartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingCardControllerController extends AbstractController
{
    private ShoppingCart $cart;

    public function __construct()
    {
        $this->cart = (new ShoppingCartRepository())->getShoppingCart(($_GET['cartid']) ?: 1);
    }

    #[Route('/card', name: 'app_shopping_card_controler')]
    public function index(): string
    {
        return $this->renderCard();
    }

    public function renderCard(): string
    {
        ob_start();

        require __DIR__.'/../template/cart.tpl';

        $result = ob_get_contents();
        ob_clean();

        return $result;
    }
}
