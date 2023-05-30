<?php
session_start();
require_once ("dbcontroller.php");
$db_handle = new DBController();

if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
                $itemArray = array(
                    $productByCode[0]["code"] => array(
                        'name' => $productByCode[0]["name"],
                        'code' => $productByCode[0]["code"],
                        'quantity' => $_POST["quantity"],
                        'price' => $productByCode[0]["price"],
                        'image' => $productByCode[0]["image"]
                    )
                );
                
                if (! empty($_SESSION["cart_item"])) {
                    if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByCode[0]["code"] == $k) {
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if (! empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;
        case "show_discount":
            if (! empty($_SESSION["cart_item"])) {
                if (! empty($_POST["discountCode"])) {
                    $priceByCode = $db_handle->runQuery("SELECT price FROM tbl_discount_coupon WHERE discount_code='" . $_POST["discountCode"] . "'");
                    
                    if (! empty($priceByCode)) {
                        foreach ($priceByCode as $key => $value) {
                            $discountPrice = $priceByCode[$key]["price"];
                        }
                        if (! empty($discountPrice) && $discountPrice > $_POST["totalPrice"]) {
                            $message = "Invalid Discount Coupon";
                        }
                    } else {
                        $message = "Invalid Discount Coupon";
                    }
                }
            } else {
                $message = "Not applicable. The cart is empty";
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>
<HTML>
<HEAD>
<TITLE>eCommerce software with discount coupon</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="jquery-3.2.1.min.js"></script>
</HEAD>

<BODY>

    <form id="applyDiscountForm" method="post"
        action="index.php?action=show_discount"
        onsubmit="return validate();">

        <div id="shopping-cart">
            <div class="txt-heading">eCommerce software with discount
                coupon</div>
            <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
    <?php
    if (isset($_SESSION["cart_item"])) {
        $total_quantity = 0;
        $total_price = 0;
        ?>	
                <table class="tbl-cart" cellpadding="10" cellspacing="1">
                <tbody>
                    <tr>
                        <th style="text-align: left;">Name</th>
                        <th style="text-align: left;">Code</th>
                        <th style="text-align: right;" width="5%">Quantity</th>
                        <th style="text-align: right;" width="10%">Unit
                            Price</th>
                        <th style="text-align: right;" width="10%">Price</th>
                        <th style="text-align: center;" width="5%">Remove</th>
                    </tr>	

                        <?php
        foreach ($_SESSION["cart_item"] as $item) {
            $item_price = $item["quantity"] * $item["price"];
            ?>
                            <tr>
                        <td><img src="<?php echo $item["image"]; ?>"
                            class="cart-item-image" /><?php echo $item["name"]; ?></td>
                        <td><?php echo $item["code"]; ?></td>
                        <td style="text-align: right;"><?php echo $item["quantity"]; ?></td>
                        <td style="text-align: right;"><?php echo "$ " . $item["price"]; ?></td>
                        <td style="text-align: right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
                        <td style="text-align: center;"><a
                            href="index.php?action=remove&code=<?php echo $item["code"]; ?>"
                            class="btnRemoveAction"><img
                                src="icon-delete.png" alt="Remove Item" /></a></td>
                    </tr>
                            <?php
            $total_quantity += $item["quantity"];
            $total_price += ($item["price"] * $item["quantity"]);
        }
        ?>
                        <tr>
                        <td colspan="2" align="right">Total:<input
                            type="hidden" name="totalPrice"
                            id="totalPrice"
                            value="<?php echo $total_price; ?>"></td>
                        <td align="right"><?php echo $total_quantity; ?></td>
                        <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
                        <td></td>
                    </tr>
                <?php     
                if (!empty($discountPrice) && $total_price > $discountPrice) {
                    $total_price_after_discount = $total_price - $discountPrice;
            ?>
                    <tr>
                        <td colspan="3" align="right">Discount:<input
                            type="hidden" name="discountPrice"
                            id="discountPrice"
                            value="<?php echo $discountPrice; ?>"></td>
                        <td align="right" colspan="2"><strong><?php echo "$ " . number_format($discountPrice, 2); ?></strong></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">Total after
                            Discount:</td>
                        <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price_after_discount, 2); ?></strong></td>
                        <td></td>
                    </tr>
                    <?php 
                }
                ?>
                </tbody>
            </table>		
            <?php
    } else {
        ?>
                <div class="no-records">Your Cart is Empty</div>
            <?php
    }
    ?>
        </div>
        <div id="discount-grid">
            <div class="discount-section">
                <div class="discount-action">
                    <span id="error-msg-span" class="error-message">
                    <?php
                    if (! empty($message)) {
                        echo $message;
                    }
                    ?>
                    </span> <span></span><input type="text"
                        class="discount-code" id="discountCode"
                        name="discountCode" size="15"
                        placeholder="Enter Coupon Code" /><input
                        id="btnDiscountAction" type="submit"
                        value="Apply Discount" class="btnDiscountAction" />
                </div>
            </div>
        </div>

    </form>
    <br />
    <div id="product-grid">
        <div class="txt-heading">Products</div>
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
            if (! empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    ?>
                    <div class="product-item">
            <form method="post"
                action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                <div class="product-image">
                    <img
                        src="<?php echo $product_array[$key]["image"]; ?>">
                </div>
                <div class="product-tile-footer">
                    <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                    <div class="product-price"><?php echo "$" . $product_array[$key]["price"]; ?></div>
                    <div class="cart-action">
                        <input type="text" class="product-quantity"
                            name="quantity" value="1" size="2" /><input
                            type="submit" value="Add to Cart"
                            class="btnAddAction" />
                    </div>
                </div>
            </form>
        </div>
                    <?php
                }
            }
            ?>
        </div>
</BODY>
</HTML>
<script>
function validate() {
    var valid= true;
     if($("#discountCode").val() === "") {
        valid = false;
     }

     if(valid == false) {
         $('#error-msg-span').text("Discount Coupon Required");
     }
     return valid;
}
</script>