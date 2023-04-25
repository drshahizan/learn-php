<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# DOM Manipulation

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

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
