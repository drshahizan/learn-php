document.getElementById("numberForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  const number1 = parseInt(document.getElementById("number1").value);
  const number2 = parseInt(document.getElementById("number2").value);
  const number3 = parseInt(document.getElementById("number3").value);
  const number4 = parseInt(document.getElementById("number4").value);
  const number5 = parseInt(document.getElementById("number5").value);

  let largestNumber = number1;

  if (number2 > largestNumber) {
    largestNumber = number2;
  }

  if (number3 > largestNumber) {
    largestNumber = number3;
  }

  if (number4 > largestNumber) {
    largestNumber = number4;
  }

  if (number5 > largestNumber) {
    largestNumber = number5;
  }

  alert("The largest number is: " + largestNumber);
});