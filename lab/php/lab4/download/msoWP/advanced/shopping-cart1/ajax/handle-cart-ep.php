<?php
namespace Phppot;

use \Phppot\Cart;

require_once __DIR__ . './../Model/Cart.php';
$cartModel = new Cart();
session_start();

if (! empty($_POST["action"])) {
    switch ($_POST["action"]) {
        case "add":
            $cartModel->addToCart();
            break;
        case "edit":
            $totalPrice = $cartModel->editCart();
            print $totalPrice;
            exit;
            break;
        case "remove":
            $cartModel->removeFromCart();
            break;
        case "empty":
            $cartModel->emptyCart();
            break;
    }
}
require_once '../view/shopping-cart.php';