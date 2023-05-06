// Get the elements by their IDs
var headingElement = document.getElementById("heading");
var paragraphElement = document.getElementById("paragraph");
var buttonElement = document.getElementById("button");

// Change the text content of the heading element
headingElement.textContent = "Welcome to my website!";

// Change the text content and background color of the paragraph element
paragraphElement.textContent = "This is a new paragraph.";
paragraphElement.style.backgroundColor = "yellow";

// Add a click event listener to the button element
buttonElement.addEventListener("click", function () {
  alert("Button clicked!");
});

// Create a new element and add it to the document
var newElement = document.createElement("p");
newElement.textContent = "This is a new paragraph added dynamically.";
document.body.appendChild(newElement);
