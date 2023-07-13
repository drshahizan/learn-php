$(document).ready(function() {
  var displayBox = document.getElementById("display");
  var hasEvaluated = false;

  //CHECK IF 0 IS PRESENT. IF IT IS, OVERRIDE IT, ELSE APPEND VALUE TO DISPLAY
  function clickNumbers(val) {
    if (displayBox.innerHTML === "0" || (hasEvaluated == true && !isNaN(displayBox.innerHTML))) {
      displayBox.innerHTML = val;
    } else {
      displayBox.innerHTML += val;
    }
    hasEvaluated = false;
  }

  //PLUS MINUS
  $("#plus_minus").click(function() {
    if (eval(displayBox.innerHTML) > 0) {
      displayBox.innerHTML = "-" + displayBox.innerHTML;
    } else {
      displayBox.innerHTML = displayBox.innerHTML.replace("-", "");
    }
  });

  //ON CLICK ON NUMBERS
  $("#calu-w3ls").click(function() {
    displayBox.innerHTML = "0";
    $("#display").css("font-size", "4.286rem");
    // $("#display").css("margin-top", "110px");
    $("button").prop("disabled", false);
  });
  $("#one").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(1);
  });
  $("#two").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(2);
  });
  $("#three").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(3);
  });
  $("#four").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(4);
  });
  $("#five").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(5);
  });
  $("#six").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(6);
  });
  $("#seven").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(7);
  });
  $("#eight").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(8);
  });
  $("#nine").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(9);
  });
  $("#zero").click(function() {
    checkLength(displayBox.innerHTML);
    clickNumbers(0);
  });
  $("#decimal").click(function() {
    if (displayBox.innerHTML.indexOf(".") === -1 ||
      (displayBox.innerHTML.indexOf(".") !== -1 && displayBox.innerHTML.indexOf("+") !== -1) ||
      (displayBox.innerHTML.indexOf(".") !== -1 && displayBox.innerHTML.indexOf("-") !== -1) ||
      (displayBox.innerHTML.indexOf(".") !== -1 && displayBox.innerHTML.indexOf("×") !== -1) ||
      (displayBox.innerHTML.indexOf(".") !== -1 && displayBox.innerHTML.indexOf("÷") !== -1)) {
      clickNumbers(".");
    }
  });

  //OPERATORS
  $("#add").click(function() {
    evaluate();
    checkLength(displayBox.innerHTML);
    displayBox.innerHTML += "+";
  });
  $("#subtract").click(function() {
    evaluate();
    checkLength(displayBox.innerHTML);
    displayBox.innerHTML += "-";
  });
  $("#multiply").click(function() {
    evaluate();
    checkLength(displayBox.innerHTML);
    displayBox.innerHTML += "×";
  });
  $("#divide").click(function() {
    evaluate();
    checkLength(displayBox.innerHTML);
    displayBox.innerHTML += "÷";
  });
  $("#square").click(function() {
    var num = Number(displayBox.innerHTML);
    num = num * num;
    checkLength(num);
    displayBox.innerHTML = num;
  });
  $("#sqrt").click(function() {
    var num = parseFloat(displayBox.innerHTML);
    num = Math.sqrt(num);
    displayBox.innerHTML = Number(num.toFixed(5));
  });
  $('#equals').click(function() {
  	evaluate();
  	hasEvaluated = true;
  });

  //EVAL FUNCTION
  function evaluate() {
    displayBox.innerHTML = displayBox.innerHTML.replace(",", "");
    displayBox.innerHTML = displayBox.innerHTML.replace("×", "*");
    displayBox.innerHTML = displayBox.innerHTML.replace("÷", "/");
    if (displayBox.innerHTML.indexOf("/0") !== -1) {
      $("#display").css("font-size", "60px");
      // $("#display").css("margin-top", "124px");
      $("button").prop("disabled", false);
      $(".calu-w3ls").attr("disabled", false);
      displayBox.innerHTML = "Undefined";
    }
    var evaluate = eval(displayBox.innerHTML);
    if (evaluate.toString().indexOf(".") !== -1) {
      evaluate = evaluate.toFixed(5);
    }
    checkLength(evaluate);
    displayBox.innerHTML = evaluate;
  }

  //CHECK FOR LENGTH & DISABLING BUTTONS
  function checkLength(num) {
    if (num.toString().length > 7 && num.toString().length < 14) {
      $("#display").css("font-size", "60px");
      // $("#display").css("margin-top", "174px");
    } else if (num.toString().length > 16) {
      num = "Infinity";
      $("button").prop("disabled", true);
      $(".calu-w3ls").attr("disabled", false);
    }
  }

  //TRIM IF NECESSARY
  function trimIfNecessary() {
    var length = displayBox.innerHTML.length;
    if (length > 7 && length < 14) {
      $("#display").css("font-size", "60px");
      // $("#display").css("margin-top", "174px");
    } else if (length > 14) {
      displayBox.innerHTML = "Infinity";
      $("button").prop("disabled", true);
      $(".calu-w3ls").attr("disabled", false);
    }
  }

});
