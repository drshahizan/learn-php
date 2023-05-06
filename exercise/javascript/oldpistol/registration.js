// Get the form and results elements by their IDs
var formElement = document.getElementById("form");
var resultsElement = document.getElementById("results");

// Add an event listener to the form submit button
formElement.addEventListener("submit", function (event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Get the input values from the form
  var nameInput = document.getElementById("name").value;
  var majorInput = document.getElementById("major").value;
  var course1Input = document.getElementById("course1").value;
  var course2Input = document.getElementById("course2").value;
  var course3Input = document.getElementById("course3").value;

  // Display the input values in the results section
  document.getElementById("nameResult").textContent = "Name: " + nameInput;
  document.getElementById("majorResult").textContent = "Major: " + majorInput;

  var courseListElement = document.getElementById("courseList");
  courseListElement.innerHTML = "";

  if (course1Input) {
    var course1Element = document.createElement("li");
    course1Element.textContent = course1Input;
    courseListElement.appendChild(course1Element);
  }

  if (course2Input) {
    var course2Element = document.createElement("li");
    course2Element.textContent = course2Input;
    courseListElement.appendChild(course2Element);
  }

  if (course3Input) {
    var course3Element = document.createElement("li");
    course3Element.textContent = course3Input;
    courseListElement.appendChild(course3Element);
  }

  // Show the results section
  resultsElement.style.display = "block";
});
