<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Events
In JavaScript, events are actions or occurrences that happen in a web page or application, such as a user clicking on a button, scrolling down a page, or the page finishing loading. Handling events in JavaScript involves writing code to respond to these events when they occur. 

## The steps involved in handling events in JavaScript

### 1. Identify the event 
Determine the event that you want to respond to. Common events in JavaScript include mouse clicks, key presses, form submissions, and page load.

### 2. Attach an event listener
Use the `addEventListener` method to attach an event listener to the element that triggers the event. For example, to listen for a click event on a button with the ID "myButton", you could use the following code:

```javascript
document.getElementById("myButton").addEventListener("click", function() {
  // Code to handle the click event
});
```

### 3. Write the event handler function
The event handler function is the code that will be executed when the event occurs. This function should be passed as the second argument to the `addEventListener` method.

### 4. Respond to the event
Inside the event handler function, you can write code to respond to the event. For example, if you want to change the text of a paragraph when a button is clicked, you could use the following code:

```javascript
document.getElementById("myButton").addEventListener("click", function() {
  document.getElementById("myParagraph").textContent = "Button clicked!";
});
```

> In summary, handling events in JavaScript involves identifying the event, attaching an event listener to the triggering element, writing an event handler function, and responding to the event inside the event handler function.

Types of events in JavaScript

| Event Type | Description | Example |
| --- | --- | --- |
| `click` | User clicks on an element | Clicking a button to submit a form |
| `submit` | User submits a form | Pressing the Enter key while in a form field |
| `keyup` | User releases a key on the keyboard | Releasing the Enter key after typing in a form field |
| `keydown` | User presses a key on the keyboard | Pressing the Tab key to move between form fields |
| `mousemove` | User moves the mouse | Moving the mouse over a dropdown menu |
| `load` | Page finishes loading | All resources (images, scripts, etc.) have finished loading |
| `unload` | Page is unloaded or closed | User navigates away from the page or closes the browser |
| `focus` | Element gains focus | Clicking on a form field to type in it |
| `blur` | Element loses focus | Moving the focus away from a form field |
| `change` | Value of an input element changes | Selecting a different option in a dropdown menu |
| `mouseover` | Mouse pointer enters an element | Moving the mouse over a link |
| `mouseout` | Mouse pointer leaves an element | Moving the mouse away from a link |
| `resize` | Window or element is resized | Resizing the browser window |
| `scroll` | User scrolls the page or an element | Scrolling through a long web page |
| `contextmenu` | User right-clicks on an element | Right-clicking on an image to save it |

Note that this is not an exhaustive list and there are many other types of events in JavaScript. Additionally, different elements may support different types of events.

## Code
An example HTML and JavaScript code that uses events

```html
<!DOCTYPE html>
<html>
<head>
  <title>Event Example</title>
</head>
<body>
  <button id="myButton">Click me!</button>
  <p id="myParagraph"></p>

  <script>
    // Add an event listener for the click event on the button
    document.getElementById("myButton").addEventListener("click", function() {
      // Update the text of the paragraph when the button is clicked
      document.getElementById("myParagraph").textContent = "Button clicked!";
    });
  </script>
</body>
</html>
```

In this example, there is a button element with the ID "myButton" and a paragraph element with the ID "myParagraph". The JavaScript code adds an event listener for the click event on the button using the `addEventListener` method. When the button is clicked, the event handler function is executed, which updates the text of the paragraph element to say "Button clicked!" using the `textContent` property.

## Case study
An example HTML and JavaScript code for a university academic course registration system, which uses events to update the available courses when the selected department is changed:

```html
<!DOCTYPE html>
<html>
<head>
  <title>Course Registration System</title>
</head>
<body>
  <h1>Course Registration System</h1>

  <label for="departmentSelect">Select Department:</label>
  <select id="departmentSelect">
    <option value="cs">Computer Science</option>
    <option value="math">Mathematics</option>
    <option value="phy">Physics</option>
  </select><br>

  <label for="courseSelect">Select Course:</label>
  <select id="courseSelect"></select>

  <script>
    // Define an object that contains the available courses for each department
    const courses = {
      cs: ["Intro to Programming", "Data Structures", "Algorithms"],
      math: ["Calculus I", "Calculus II", "Linear Algebra"],
      phy: ["Classical Mechanics", "Quantum Mechanics", "Thermodynamics"]
    };

    // Get references to the department and course select elements
    const departmentSelect = document.getElementById("departmentSelect");
    const courseSelect = document.getElementById("courseSelect");

    // Add an event listener for the change event on the department select element
    departmentSelect.addEventListener("change", function() {
      // Get the value of the selected department
      const department = departmentSelect.value;

      // Clear the options in the course select element
      courseSelect.innerHTML = "";

      // Add a new option for each available course in the selected department
      courses[department].forEach(function(course) {
        const option = document.createElement("option");
        option.textContent = course;
        courseSelect.appendChild(option);
      });
    });
  </script>
</body>
</html>
```

In this example, there are two select elements: one for selecting the department and another for selecting the course. The JavaScript code defines an object called `courses` that contains the available courses for each department. When the department select element is changed, an event listener function is executed that gets the value of the selected department, clears the options in the course select element, and adds new options for each available course in the selected department using a forEach loop and the `createElement` and `appendChild` methods.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://komarev.com/ghpvc/?username=drshahizan&label=Views&color=0e75b6&style=flat)
![](https://hit.yhype.me/github/profile?user_id=81284918)

