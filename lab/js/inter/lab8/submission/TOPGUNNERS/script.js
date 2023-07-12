// JavaScript for form validation
document.addEventListener("DOMContentLoaded", function() {
  const loginForm = document.getElementById("loginForm");
  const emailInput = document.getElementById("emailInput");
  const passwordInput = document.getElementById("passwordInput");

  loginForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    // Clear previous error messages
    clearErrorMessages();

    // Check if email and password are entered
    if (!emailInput.value) {
      showError(emailInput, "Email can't be blank");
    }
    if (!passwordInput.value) {
      showError(passwordInput, "Password can't be blank");
    }

    // Perform login logic if no errors
    if (emailInput.value && passwordInput.value) {
      // Your login logic here
      console.log("Performing login...");
    }
  });

  // Function to show error message
  function showError(inputElement, errorMessage) {
    const errorDiv = inputElement.parentElement.querySelector(".error-txt");
    const errorIcon = inputElement.parentElement.querySelector(".error-icon");
    errorDiv.textContent = errorMessage;
    errorDiv.style.display = "block";
    errorIcon.style.display = "block";
    inputElement.classList.add("shake");
  }

  // Function to clear error messages
  function clearErrorMessages() {
    const errorDivs = document.querySelectorAll(".error-txt");
    const errorIcons = document.querySelectorAll(".error-icon");
    const inputFields = document.querySelectorAll("input");

    errorDivs.forEach(function(div) {
      div.style.display = "none";
    });
    errorIcons.forEach(function(icon) {
      icon.style.display = "none";
    });
    inputFields.forEach(function(input) {
      input.classList.remove("shake");
    });
  }
});
