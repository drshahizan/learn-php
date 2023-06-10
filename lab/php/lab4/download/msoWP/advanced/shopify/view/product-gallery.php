<?php
require_once __DIR__ . './../Model/Product.php';

$productModel = new Product();
?>
<div id="product-grid">
    <div class="txt-heading">Products</div>
            <?php
            $productResult = $productModel->getAllProduct();
            if (! empty($productResult)) {
                foreach ($productResult as $key => $value) {
                    ?>
                    <div class="product-item"
        data-name="<?php echo $productResult[$key]["name"]; ?>"
        data-price="<?php echo "$" . $productResult[$key]["price"]; ?>">
        <div class="product-image">
            <img src="<?php echo $productResult[$key]["image"]; ?>"
                id="<?php echo $productResult[$key]["code"]; ?>">
        </div>
        <div>
            <strong><?php echo $productResult[$key]["name"]; ?></strong>
        </div>
        <div class="product-price"><?php echo "$" . $productResult[$key]["price"]; ?></div>

        <input type="button"
            id="add_<?php echo $productResult[$key]["code"]; ?>"
            value="Add to cart" class="btnAddAction"
            onClick="cartAction('add', '<?php echo $productResult[$key]["code"]; ?>')" />

    </div>
                    <?php
                }
            }
            ?>
</div>