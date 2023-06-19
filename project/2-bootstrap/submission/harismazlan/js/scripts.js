
// Example JavaScript code
document.addEventListener('DOMContentLoaded', function () {
  // Get the "Contact Me" button
  var contactButton = document.querySelector('.btn-primary');

  // Add a click event listener to the button
  contactButton.addEventListener('click', function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the form inputs
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var messageInput = document.getElementById('message');

    // Log the form inputs to the console
    console.log('Name:', nameInput.value);
    console.log('Email:', emailInput.value);
    console.log('Message:', messageInput.value);

    // TODO: You can perform further actions with the form data here, like sending it to a server
  });
});

// Example JavaScript code
document.addEventListener('DOMContentLoaded', function () {
  // Get the "Contact Me" button
  var contactButton = document.querySelector('.btn-primary');

  // Add a click event listener to the button
  contactButton.addEventListener('click', function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Get the form inputs
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var messageInput = document.getElementById('message');

    // Log the form inputs to the console
    console.log('Name:', nameInput.value);
    console.log('Email:', emailInput.value);
    console.log('Message:', messageInput.value);

    // TODO: You can perform further actions with the form data here, like sending it to a server
  });
});
