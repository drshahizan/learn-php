<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# DOM Manipulation
![Introduction to js](webdev-js.png)
> Sketchnote by [Tomomi Imura](https://twitter.com/girlie_mac)
> 
The Document Object Model (DOM) is a programming interface that represents HTML or XML documents as a tree-like structure. It allows programs and scripts to dynamically access and update the content, structure, and style of web documents. The DOM provides a way to programmatically access and manipulate elements on a webpage, including their attributes and content.

In JavaScript, the DOM is used to manipulate and interact with web pages. JavaScript code can use the DOM to dynamically create, delete, and modify HTML elements on a page, change the content of elements, change the styles applied to elements, and respond to user interactions such as clicks and keystrokes.

The DOM is organized into a hierarchy of nodes, with the Document node at the top, representing the entire document. Each node in the hierarchy represents an element, attribute, or piece of text in the document. JavaScript code can traverse the hierarchy using various DOM methods and properties to locate specific nodes, and then manipulate them in various ways.

For example, to change the text content of an HTML element using JavaScript, the following code can be used:

```javascript
// Get the element by its ID
var myElement = document.getElementById("myId");

// Change the text content
myElement.textContent = "New text";
```

The above code gets an element with the ID "myId" using the `getElementById()` method and then changes its text content using the `textContent` property.

Overall, the DOM is a powerful tool for web developers, allowing them to create dynamic and interactive web pages using JavaScript.

## DOM used in JavaScript
In JavaScript, the DOM (Document Object Model) is used to interact with HTML and XML documents. It allows JavaScript code to dynamically manipulate the content, structure, and style of web documents. 

### 1. Accessing Elements 
JavaScript can use the DOM to access elements on a web page by their tag name, class, or ID. For example, the `document.getElementById()` method can be used to get a specific element by its ID:

```javascript
var myElement = document.getElementById("myId");
```

### 2. Manipulating Elements
JavaScript can modify the content, attributes, and styles of elements on a web page using the DOM. For example, the `textContent` property can be used to change the text content of an element:

```javascript
myElement.textContent = "New text";
```

### 3. Adding and Removing Elements
JavaScript can dynamically add and remove elements from a web page using the DOM. For example, the `createElement()` method can be used to create a new element, and the `appendChild()` method can be used to add it to the document:

```javascript
var newElement = document.createElement("p");
newElement.textContent = "New paragraph";
document.body.appendChild(newElement);
```

### 4. Responding to User Interactions
JavaScript can use the DOM to respond to user interactions such as clicks and keystrokes. For example, the `addEventListener()` method can be used to add an event listener to an element:

```javascript
myElement.addEventListener("click", function() {
  alert("Clicked!");
});
```

Overall, the DOM is a powerful tool for JavaScript developers, enabling them to create dynamic and interactive web pages that respond to user actions and update in real time.

## Code
An example HTML file and JavaScript code that demonstrate how to use the DOM to manipulate elements on a web page:

### HTML file (dom.html):

```html
<!DOCTYPE html>
<html>
  <head>
    <title>DOM Example</title>
  </head>
  <body>
    <h1 id="heading">Hello, World!</h1>
    <p id="paragraph">This is a paragraph.</p>
    <button id="button">Click me!</button>
    <script src="dom.js"></script>
  </body>
</html>
```

### JavaScript file (dom.js):

```javascript
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
buttonElement.addEventListener("click", function() {
  alert("Button clicked!");
});

// Create a new element and add it to the document
var newElement = document.createElement("p");
newElement.textContent = "This is a new paragraph added dynamically.";
document.body.appendChild(newElement);
```

In this example, the JavaScript code uses the DOM to access the elements on the web page by their IDs, change their content and style, add an event listener to the button, and dynamically create and add a new element to the document. When the HTML file is opened in a web browser, the JavaScript code is executed and the web page is updated accordingly.

## Case study
An example HTML file and JavaScript code that demonstrate how to use the DOM to build a university academic course registration system

### HTML file (registration.html):

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Course Registration System</title>
  </head>
  <body>
    <h1>Course Registration System</h1>
    
    <div id="form">
      <h2>Register for Courses</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="major">Major:</label>
        <input type="text" id="major" name="major"><br><br>
        <label for="course1">Course 1:</label>
        <input type="text" id="course1" name="course1"><br><br>
        <label for="course2">Course 2:</label>
        <input type="text" id="course2" name="course2"><br><br>
        <label for="course3">Course 3:</label>
        <input type="text" id="course3" name="course3"><br><br>
        <button id="submit">Submit</button>
      </form>
    </div>
    
    <div id="results">
      <h2>Registration Results</h2>
      <p id="nameResult"></p>
      <p id="majorResult"></p>
      <ul id="courseList"></ul>
    </div>
    
    <script src="registration.js"></script>
  </body>
</html>
```

### JavaScript file (registration.js):

```javascript
// Get the form and results elements by their IDs
var formElement = document.getElementById("form");
var resultsElement = document.getElementById("results");

// Add an event listener to the form submit button
formElement.addEventListener("submit", function(event) {
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
```

In this example, the JavaScript code uses the DOM to access the form elements and results elements by their IDs, add an event listener to the form submit button, and dynamically create and add elements to display the registration results. When the user submits the form by clicking the submit button, the event listener function is called, which gets the input values from the form using the DOM's getElementById method, creates new elements using the createElement method, and sets their text content using the textContent property. It then adds the new elements to the DOM using the appendChild method, and shows the results section by setting its display style to "block".

This university academic course registration system example allows students to enter their name, major, and up to three course selections. After submitting the form, the system displays the student's name, major, and the list of courses they have registered for in a formatted manner. The DOM is used to dynamically create and update the content of the page based on user input, providing a responsive and interactive user experience.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
