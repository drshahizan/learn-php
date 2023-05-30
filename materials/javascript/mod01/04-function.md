<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Functions
![JavaScript Basics - Functions](webdev-js-functions.png)
> Sketchnote by [Tomomi Imura](https://twitter.com/girlie_mac)
> 
In JavaScript, a function is a block of code that can be executed when it is called. Functions can be defined and called in a variety of ways, making them a fundamental building block of JavaScript programming.

Functions can be defined using the "function" keyword, followed by the function name and a set of parentheses. The body of the function is enclosed in curly braces {} and may contain any number of statements. For example, the following function takes two parameters and returns their sum:

```javascript
function addNumbers(a, b) {
  return a + b;
}
```
## Function expressions
Functions can also be defined as function expressions, which are similar to variable assignments. 

```javascript
const multiplyNumbers = function(a, b) {
  return a * b;
}
```
## Call function 
Functions can be called by their name followed by parentheses containing any arguments required by the function. 

```javascript
const result = addNumbers(2, 3);
console.log(result); // Output: 5

const product = multiplyNumbers(4, 5);
console.log(product); // Output: 20
```
## Passed as arguments to other functions
Functions can also be passed as arguments to other functions, making them very versatile. 

```javascript
function doOperation(a, b, operation) {
  return operation(a, b);
}

const result = doOperation(4, 5, addNumbers);
console.log(result); // Output: 9

const product = doOperation(4, 5, multiplyNumbers);
console.log(product); // Output: 20
```

Functions can also have default parameter values, rest parameters, and destructured parameters, which make them even more flexible.

Overall, functions are a powerful feature of JavaScript that enable developers to write reusable and modular code.

## Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Function Example</title>
  </head>
  <body>
    <h1>Function Example</h1>

    <p>Enter two numbers:</p>
    <input type="number" id="num1" />
    <input type="number" id="num2" />
    <button onclick="addNumbers()">Add</button>

    <p>Result: <span id="result"></span></p>

    <script>
      function addNumbers() {
        // Get the input values
        const num1 = parseInt(document.getElementById("num1").value);
        const num2 = parseInt(document.getElementById("num2").value);

        // Add the numbers together
        const sum = num1 + num2;

        // Update the result span with the sum
        document.getElementById("result").innerText = sum;
      }
    </script>
  </body>
</html>
```

This code creates a simple HTML page with two input fields for numbers and a button to add them together. When the button is clicked, it calls the `addNumbers()` function defined in the JavaScript code. 

The `addNumbers()` function gets the values from the input fields, adds them together, and updates the result span with the sum. 

Note that the function is defined using the `function` keyword, followed by the function name and a set of parentheses containing any parameters. In this case, the function doesn't have any parameters, but it could if needed. 

The function is called by adding an `onclick` attribute to the button HTML element, which tells the browser to execute the `addNumbers()` function when the button is clicked.

## Case Study
An example of a complete HTML and JavaScript code for a university academic course registration system:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Course Registration System</title>
    <script>
      // Define a function to register for a course
      function registerForCourse() {
        // Get the selected course from the dropdown
        const course = document.getElementById("courseSelect").value;

        // Check if the course is already registered for
        const registeredCourses =
          document.getElementById("registeredCourses").innerText;
        if (registeredCourses.includes(course)) {
          alert("You are already registered for this course.");
          return;
        }

        // Add the course to the list of registered courses
        document.getElementById("registeredCourses").innerText += course + ", ";

        // Display a confirmation message
        alert("You have successfully registered for " + course + ".");
      }

      // Define a function to drop a course
      function dropCourse() {
        // Get the selected course from the dropdown
        const course = document.getElementById("courseSelect").value;

        // Check if the course is registered for
        const registeredCourses =
          document.getElementById("registeredCourses").innerText;
        if (!registeredCourses.includes(course)) {
          alert("You are not registered for this course.");
          return;
        }

        // Remove the course from the list of registered courses
        const updatedCourses = registeredCourses.replace(course + ", ", "");
        document.getElementById("registeredCourses").innerText = updatedCourses;

        // Display a confirmation message
        alert("You have successfully dropped " + course + ".");
      }
    </script>
  </head>
  <body>
    <h1>Course Registration System</h1>

    <p>Select a course to register for:</p>
    <select id="courseSelect">
      <option value="math101">Math 101</option>
      <option value="english101">English 101</option>
      <option value="history101">History 101</option>
    </select>

    <button onclick="registerForCourse()">Register</button>
    <button onclick="dropCourse()">Drop</button>

    <p>Registered Courses: <span id="registeredCourses"></span></p>
  </body>
</html>

```

In this example, we have two functions: `registerForCourse()` and `dropCourse()`. The `registerForCourse()` function gets the selected course from a dropdown menu, checks if the student is already registered for the course, and adds the course to a list of registered courses. It also displays a confirmation message.

The `dropCourse()` function gets the selected course from the dropdown menu, checks if the student is registered for the course, and removes the course from the list of registered courses. It also displays a confirmation message.

The HTML code includes a dropdown menu to select a course, as well as two buttons to register for or drop the selected course. The list of registered courses is displayed below the buttons.

This example demonstrates how functions can be used to implement complex features in a web application, such as a course registration system. By breaking the code down into smaller functions, we can make it easier to read, understand, and maintain.
## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
