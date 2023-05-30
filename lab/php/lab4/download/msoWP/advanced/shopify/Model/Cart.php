<?php 
namespace Phppot;

use \Phppot\DataSource;

class Cart {
    
    private $ds;
    
    public $cartSessionItemCount = 0;
    
    function __construct() {
        require_once __DIR__ . './../lib/DataSource.php';
        $this->ds = new DataSource();
        
        if (! empty($_SESSION["cart_item"]) && is_array($_SESSION["cart_item"])) {
            $this->cartSessionItemCount = count($_SESSION["cart_item"]);
        }
    }
    
    function addToCart() {
        $query = "SELECT * FROM tblproduct WHERE code = ?";
        $paramType = "s";
        $paramArray = array($_POST["code"]);
        $productByCode = $this->ds->select($query, $paramType, $paramArray);
        $itemArray = array(
            $productByCode[0]["code"] => array(
                'name' => $productByCode[0]["name"],
                'code' => $productByCode[0]["code"],
                'quantity' => '1',
                'price' => $productByCode[0]["price"]
            )
        );
        
        if (! empty($_SESSION["cart_item"])) {
            if (in_array($productByCode[0]["code"], $_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($productByCode[0]["code"] == $k)
                        $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                }
            } else {
                $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
            }
        } else {
            $_SESSION["cart_item"] = $itemArray;
        }
        
        if (! empty($_SESSION["cart_item"]) && is_array($_SESSION["cart_item"])) {
            $this->cartSessionItemCount = count($_SESSION["cart_item"]);
        }
    }
    
    function editCart() {
        if (! empty($_SESSION["cart_item"])) {
            $total_price = 0;
            foreach ($_SESSION["cart_item"] as $k => $v) {
                if ($_POST["code"] == $k) {
                    $_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
                }
                $total_price = $total_price + ($_SESSION["cart_item"][$k]["quantity"] * $_SESSION["cart_item"][$k]["price"] );
            }
            return $total_price;
        }
        
        if (! empty($_SESSION["cart_item"]) && is_array($_SESSION["cart_item"])) {
            $this->cartSessionItemCount = count($_SESSION["cart_item"]);
        }
    }
    
    function removeFromCart() {
        if (! empty($_SESSION["cart_item"])) {
            foreach ($_SESSION["cart_item"] as $k => $v) {
                if ($_POST["code"] == $k)
                    unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
            }
        }
        
        if (! empty($_SESSION["cart_item"]) && is_array($_SESSION["cart_item"])) {
            $this->cartSessionItemCount = count($_SESSION["cart_item"]);
        }
    }
    
    function emptyCart() {
        unset($_SESSION["cart_item"]);
        $this->cartSessionItemCount = 0;
        
    }
}
