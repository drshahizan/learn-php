# Lab 1: A Notes App

Activity 🏆 :
## Q1: For this application, you must create a flowchart.
Ans:

<img src="./pic/flowchart.png" width="300" />

**Figure 1**: Flowchart for the application.

## Q2: State the javascript technology you have learned.
### DOM manipulation: 
The code uses several methods and properties to manipulate the Document Object Model (DOM) elements, such as querySelector(), querySelectorAll(), insertAdjacentHTML(), innerText, value, classList, remove(), addEventListener(), and removeEventListener().

### localStorage: 
The code uses the localStorage object to store and retrieve data locally, using the getItem() and setItem() methods.

### ES6 features: 
The code uses several features introduced in ECMAScript 6 (ES6) or later, such as arrow functions, template literals, spread operator, destructuring assignment, let and const declarations, and the forEach method.

### Event handling: 
The code uses several event handling techniques to respond to user interaction, such as click events, focus events, and key events.

### HTML and CSS manipulation: 
The code manipulates the HTML and CSS styles of the DOM elements using the style property, CSS classes, and the classList property.

## Q3: Give a brief description of each function that was used.
Ans:
Here's a brief description of each function used in the code:

1. `addBox.addEventListener("click", ...)`: This function adds an event listener to the `addBox` element. When the element is clicked, it triggers a callback function that sets the title and button text in the popup box and displays it. It also sets the focus on the `titleTag` input field under certain conditions.

2. `closeIcon.addEventListener("click", ...)`: This function adds an event listener to the `closeIcon` element. When the element is clicked, it triggers a callback function that resets the state by clearing the input fields, hiding the popup box, and enabling scrolling.

3. `showNotes()`: This function is responsible for displaying the existing notes. It removes any existing note elements, iterates over the `notes` array, and dynamically creates HTML markup for each note. The generated markup is then inserted into the document.

4. `showMenu(elem)`: This function is used to display the menu options for a note. It adds a CSS class to the parent element of the menu icon (`elem`) to show the menu. It also attaches a click event listener to the `document` object to hide the menu if a click occurs outside the menu or on a different menu icon.

5. `deleteNote(noteId)`: This function is called when the user confirms the deletion of a note. It removes the note from the `notes` array, updates the local storage to persist the changes, and calls `showNotes()` to refresh the note list.

6. `updateNote(noteId, title, filterDesc)`: This function is called when the user selects the "Edit" menu option for a note. It prepares the state for updating by setting flags and values. It triggers a click event on the `addBox` element to open the popup box with pre-filled values for editing.

7. `addBtn.addEventListener("click", ...)`: This function adds an event listener to the `addBtn` element, which is the button used to add or update a note. When clicked, it prevents the default form submission behavior, retrieves the values from the input fields, creates a new note object, adds it to the `notes` array, updates the local storage, refreshes the note list, and closes the popup box.

These functions are responsible for handling user interactions, manipulating the DOM, and managing the state of the note-taking application.

## Q4: Where is the data kept? How is it kept?
Ans:
The data in this code is stored in the browser's local storage using the `localStorage` API. Local storage is a mechanism provided by web browsers that allows web applications to store data in key-value pairs.

In this code, the `notes` array is stored and retrieved from the local storage using the `localStorage.getItem()` and `localStorage.setItem()` methods. The `JSON.parse()` and `JSON.stringify()` functions are used to convert the data between JSON format and JavaScript objects.

When the page loads, the code attempts to retrieve the "notes" data from the local storage using `localStorage.getItem("notes")`. If there is existing data, it is parsed using `JSON.parse()` to convert it into a JavaScript array. If no data is found, an empty array is assigned to `notes`.

Whenever a note is added, updated, or deleted, the `notes` array is modified accordingly. The updated `notes` array is then stored back in the local storage using `localStorage.setItem("notes", JSON.stringify(notes))`. This ensures that the data is persisted between page reloads or browser sessions.

By using local storage, the data is stored on the user's device and can be accessed and manipulated by the JavaScript code running in the browser.


Group:
1. Name: AMMAR IBRAHIM BIN MOHAMED, Matrix No: SX220326ECJH, Github ID: ammaribrahim95
2. Name: SHANMUGADHARSHINI A/P MURALI Matrix No: SX201656ECRHF04, Github ID: Shan9821
3. Name: LOGESWARY A/P KRISHNAMOORTHY, Matrix No: SX211705ECRHF04, Github ID: Logeswary98
4. Name: ADAM SHAH BIN MOHD FAIZAL, Matrix No: SX190401CSJS04 , Github ID: adamshahmf
