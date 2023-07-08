function calcTotal() {
  
    var price1 = parseFloat(document.getElementById('item1').value);
    var price2 = parseFloat(document.getElementById('item2').value);
    var price3 = parseFloat(document.getElementById('item3').value);
    var price4 = parseFloat(document.getElementById('item4').value);
    var price5 = parseFloat(document.getElementById('item5').value);

    var Total = price1 + price2 + price3 + price4 + price5;


    document.getElementById('finalAmount').value = Total;
}