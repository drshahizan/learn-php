function cartAction(action, product_code) {
    var queryString = "";
    if (action != "") {
        switch (action) {
            case "add":
                queryString = 'action=' + action + '&code=' + product_code + '&quantity=' + $("#qty_" + product_code).val();
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
        url: "ajax/handle-cart-ep.php",
        data: queryString,
        type: "POST",
        success: function (data) {
        	    $("#cart-item").html(data);
            $("#count").text($("#cart-item-count").val());
        },
        error: function () {}
    });
}

function updatePrice(obj){
    var quantity = $(obj).val();
    var code = $(obj).data('code');
    queryString = 'action=edit&code=' + code + '&quantity=' + quantity;
    $.ajax({
        type: 'post',
        url: "ajax/handle-cart-ep.php",
        	data: queryString,
        success: function(data) {
           $("#total").text(data); 
        }
      });
}

$(document).ready(function () {
    $("#cart-icon-container").click(function () {
    	     $("#shopping-cart").toggle();
    });  
    var top = parseInt($("#shopping-cart").height())/2;
    $("#shopping-cart").css("margin-top", "-" + top + "px");
});