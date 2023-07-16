

document.addEventListener("DOMContentLoaded", function () {
    var loginForm = document.getElementById("login-form");
    var loginErrorMsg = document.getElementById("login-error-msg");
  
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent form submission
  
      var usernameInput = document.getElementById("username-field");
      var passwordInput = document.getElementById("password-field");
  
      var username = usernameInput.value;
      var password = passwordInput.value;
  
      // Check if the entered username and password are valid
      if (username === "user" && password === "abc") {
        // Successful login
        alert("You have successfully logged in!");
        // You can redirect the user to another page here if needed
      } else {
        // Failed login
        loginErrorMsg.style.display = "block";
      }
    });
  });



  
  