function calcTotal() {
  // Get the input values for each item
  var Price1 = parseFloat(document.getElementById("item1").value);
  var Price2 = parseFloat(document.getElementById("item2").value);
  var Price3 = parseFloat(document.getElementById("item3").value);
  var Price4 = parseFloat(document.getElementById("item4").value);
  var Price5 = parseFloat(document.getElementById("item5").value);

  // Check if all input fields are filled
  if (isNaN(Price1) || isNaN(Price2) || isNaN(Price3) || isNaN(Price4) || isNaN(Price5)) {
    alert("Please enter valid prices for all items.");
    return;
  }

  // Calculate the total amount
  var total = Price1 + Price2 + Price3 + Price4 + Price5;

  // Get a reference to the finalAmount text box element
  var finalAmountTextBox = document.getElementById("finalAmount");

  // Display the total amount in the text box
  finalAmountTextBox.value = total.toFixed(2); // Displaying with two decimal places
}
