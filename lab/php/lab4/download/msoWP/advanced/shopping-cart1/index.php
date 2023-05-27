<?php
session_start();
if (isset($_POST["checkout-btn"])) {
    $order_number = rand(100, 999);
}
?>
<HTML>
<HEAD>
<TITLE>Shopping Cart: One Page Checkout</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/one-page-checkout.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="./vendor/jquery/jquery-ui.js"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
        <div ><h1 style="text-align:center">Shopping Cart: One Page Checkout</h1></div>

		<form name="one-page-checkout-form" id="one-page-checkout-form"
			action="" method="post" onsubmit="return checkout()">
			
<?php if(!empty($order_number)){?>

			<div class="order-message order-success">
			You order number is <?php echo $order_number;?>.
		<span class="btn-message-close"
					onclick="this.parentElement.style.display='none';" title="Close">&times;</span>

			</div>
<?php }?>


			<div class="section product-gallery">
        			<?php require_once './view/product-gallery.php'; ?>
      		 </div>
			<div class="billing-details">
		            <?php require_once './view/billing-details.php'; ?>
			</div>

			<div class="cart-error-message" id="cart-error-message">Cart must not
				be empty to checkout</div>
			<div id="shopping-cart" tabindex="1">
				<div id="tbl-cart">
					<div id="txt-heading">
						<div id="cart-heading">Your Shopping Cart</div>
						<div id="close"></div>
					</div>
					<div id="cart-item">
        				<?php require_once './view/shopping-cart.php'; ?>
           			 </div>
				</div>
			</div>

			<div class="payment-details">
				<div class="payment-details-heading">Payment details</div>
				<div class="row">
					<div class="inline-block">
						<div>
							<input class="bank-transfer" type="radio" checked="checked"
								value="Direct bank transfer" name="direct-bank-transfer">Direct
							bank transfer
						</div>

						<div class="info-label">Specify your order number when you make
							the bank transfer. Your order will be shippied after the amount
							is credited to us.</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="inline-block">
					<input type="submit" class="checkout" name="checkout-btn"
						id="checkout-btn" value="Checkout">
				</div>
			</div>
		</form>
	</div>
	<script src="./assets/js/cart.js"></script>
	<script>
	
function checkout() {

	var valid = true;
	
	$("#first-name").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#shopping-cart").removeClass("error-field");
	$("#cart-error-message").hide();
	
	var firstName = $("#first-name").val();
	var cartItem = $("#cart-item-count").val();
	var email = $("#email").val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#first-name-info").html("").hide();
	$("#email-info").html("").hide();

	if (firstName.trim() == "") {
		$("#first-name-info").html("required.").css("color", "#ee0000").show();
		$("#first-name").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if(cartItem == 0){
		$("#cart-error-message").show();
		$("#shopping-cart").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;	
}
</script>
</BODY>
</HTML>