function calculate() {
    // Get the input values
    var base = Number(document.getElementById("base").value);
    var exponent = Number(document.getElementById("exponent").value);
  
    // Calculate the result
    var result = Math.pow(base, exponent);
  
    // Display the result
    document.getElementById("result").value = result;
  }
  