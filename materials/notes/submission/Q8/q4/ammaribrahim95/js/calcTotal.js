function calcTotal() {
  // Get the input values for each item
  var item1Price = parseFloat(document.getElementById("item1").value);
  var item2Price = parseFloat(document.getElementById("item2").value);
  var item3Price = parseFloat(document.getElementById("item3").value);
  var item4Price = parseFloat(document.getElementById("item4").value);
  var item5Price = parseFloat(document.getElementById("item5").value);

  // Check if all input fields are filled
  if (isNaN(item1Price) || isNaN(item2Price) || isNaN(item3Price) || isNaN(item4Price) || isNaN(item5Price)) {
    alert("Please enter valid prices for all items.");
    return;
  }

  // Calculate the total amount
  var total = item1Price + item2Price + item3Price + item4Price + item5Price;

  // Get a reference to the finalAmount text box element
  var finalAmountTextBox = document.getElementById("finalAmount");

  // Display the total amount in the text box
  finalAmountTextBox.value = total.toFixed(2); // Displaying with two decimal places
}
