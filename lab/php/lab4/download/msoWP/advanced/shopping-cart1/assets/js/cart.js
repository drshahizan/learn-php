function cartAction(action, product_code, productTitle, productPrice) {
	var queryString = "";
	if (action != "") {
		switch (action) {
		case "add":
			queryString = 'action=' + action + '&code=' + product_code
					+ '&quantity=' + 1 + '&productTitle=' + productTitle
					+ '&productPrice=' + productPrice;
			break;
		case "remove":
			queryString = 'action=' + action + '&code=' + product_code;
			break;
		case "empty":
			queryString = 'action=' + action;
			break;
		}
	}
	jQuery.ajax({
		url : "ajax/handle-cart-ep.php",
		data : queryString,
		type : "POST",
		success : function(data) {
			$("#cart-item").html(data);
			$("#count").text($("#cart-item-count").val());
		},
		error : function() {
		}
	});
}

function updatePrice(obj) {
	var quantity = $(obj).val();
	var code = $(obj).data('code');
	queryString = 'action=edit&code=' + code + '&quantity=' + quantity;
	$.ajax({
		type : 'post',
		url : "ajax/handle-cart-ep.php",
		data : queryString,
		success : function(data) {
			$("#total").text(data);
		}
	});
}
