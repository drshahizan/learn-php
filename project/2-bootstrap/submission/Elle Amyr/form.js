<script>
  document.getElementById("contact_form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting

    // Perform form validation
    var name = document.getElementById("form_name").value;
    var email = document.getElementById("form_email").value;
    var subject = document.getElementById("form_subject").value;
    var message = document.getElementById("form_message").value;

    if (name.trim() === "") {
      displayErrorMessage("Name is required.");
      return;
    }

    if (email.trim() === "") {
      displayErrorMessage("Email is required.");
      return;
    }

    if (!isValidEmail(email)) {
      displayErrorMessage("Invalid email address.");
      return;
    }

    if (subject.trim() === "") {
      displayErrorMessage("Subject is required.");
      return;
    }

    if (message.trim() === "") {
      displayErrorMessage("Message is required.");
      return;
    }

    // Clear any previous error messages
    clearErrorMessage();

    // Perform form submission
    // Replace this code with your actual form submission logic
    // For example, you can use AJAX to send the form data to the server
    // and handle the response asynchronously
    console.log("Form submitted successfully!");
  });

  function displayErrorMessage(message) {
    var errorElement = document.getElementById("error_message");
    errorElement.textContent = message;
    errorElement.style.display = "block";
  }

  function clearErrorMessage() {
    var errorElement = document.getElementById("error_message");
    errorElement.textContent = "";
    errorElement.style.display = "none";
  }

  function isValidEmail(email) {
    // Basic email validation regex pattern
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }
</script>
