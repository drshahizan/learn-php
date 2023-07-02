# Question 4[SET 1] [10 Marks]
Answer all the structured questions. The marks for each part of the question is as indicated.

(a) Betty's Floral Arrangements shop has an online order form. She has added some JavaScript functions to calculate how much a person has to pay for the five items before they submit the page, and now she wants to add her functions to her form buttons.

i. Propose which event is best used for her buttons?
The best event to use for Betty's form buttons would be the "click" event. This event is triggered when the user clicks on the button, which is exactly what Betty wants to happen when the user wants to calculate the total order amount.


ii. Construct the JavaScript command line to execute the event button proposed in question (i), to trigger the function calcTotal( ). Assume the button display with the 
text Calculate Order.
<!-- Assuming the button has an id attribute with value "calculateButton" -->
<button id="calculateButton">Calculate Order</button>

<script>
  // Get a reference to the button element
  var calculateButton = document.getElementById("calculateButton");

  // Add a click event listener to the button
  calculateButton.addEventListener("click", calcTotal);

  // Define the calcTotal function
  function calcTotal() {
    // Your calculation logic here
    // For example:
    var item1Price = 10;
    var item2Price = 15;
    var item3Price = 8;
    var item4Price = 12;
    var item5Price = 5;

    var total = item1Price + item2Price + item3Price + item4Price + item5Price;
    alert("Total Order Amount: $" + total);
  }
</script>



(b) Betty wants to display the total from her calcTotal( ) function in her form named results in a text box name and id called finalAmount. Assume that the variable Total is declare to keep the temporary value for total amount of five items before display it to the text box. Create a JavaScript command line to display the total amount in a text box.
var Total = price1 + price2 + price3 + price4 + price5;
<!-- Assuming the text box has an id attribute with value "finalAmount" -->
<input type="text" id="finalAmount" name="finalAmount" readonly>

<script>
  // Assuming you have the calcTotal() function that calculates the total and stores it in the variable "Total"
  function calcTotal() {
    // Your calculation logic here
    // For example:
    var price1 = 10;
    var price2 = 15;
    var price3 = 8;
    var price4 = 12;
    var price5 = 5;

    var total = price1 + price2 + price3 + price4 + price5;
    return total;
  }

  // Get a reference to the finalAmount text box element
  var finalAmountTextBox = document.getElementById("finalAmount");

  // Call the calcTotal() function to calculate the total and store it in the "Total" variable
  var Total = calcTotal();

  // Display the total amount in the text box
  finalAmountTextBox.value = Total;
</script>


(c) Betty wants to simplify her program to make more flexible. She want to stored a calcTotal() function in an external file called "calcTotal.js". The external file scriptis is located in a specified folder namely “js” on the current web site project. Create a JavaScript command line to call the an external file.
> Please refer index.html and calcTotal.js
