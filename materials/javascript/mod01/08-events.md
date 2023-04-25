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

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
