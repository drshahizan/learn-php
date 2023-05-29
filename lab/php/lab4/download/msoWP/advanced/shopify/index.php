<?php
namespace Phppot;

use \Phppot\Cart;
session_start();
require_once 'Model/Cart.php';
$cartModel = new Cart();
?>
<HTML>
<HEAD>
<TITLE>Shopify like sticky shopping cart in PHP</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
    rel="stylesheet" />
<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./vendor/jquery/jquery-ui.js"></script>
</HEAD>
<BODY>
    
    <h1  align="center">Shopify Like Shopping Cart</h1>
        <?php require_once './view/product-gallery.php'; ?>
        <div id="floating-cart-container">
        <div id="cart-icon-container">
            <img id="cart-icon" src="./view/images/cart-icon.png"
                alt="cartimg">
            <div id="count">
            <?php echo $cartModel->cartSessionItemCount; ?>
        </div>
        </div>

        <div id="shopping-cart">
            <div id="tbl-cart">
                <div id="txt-heading">
                    <div id="cart-heading">Shopping Cart</div>
                    <div id="close"></div>
                </div>
                <div id="cart-item">
        <?php require_once './view/shopping-cart.php'; ?>
            </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/cart.js"></script>
</BODY>
</HTML>