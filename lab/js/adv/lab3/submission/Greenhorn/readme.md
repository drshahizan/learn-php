# Lab 3: Todo List

<!--
Group : GREENHORN
1. Name: AMMAR IBRAHIM BIN MOHAMED, Matrix No: SX220326ECJH, Github ID: ammaribrahim95
2. Name: SHANMUGADHARSHINI A/P MURALI Matrix No: SX201656ECRHF04, Github ID: Shan9821
3. Name: LOGESWARY A/P KRISHNAMOORTHY, Matrix No: SX211705ECRHF04, Github ID: Logeswary98
4. Name: ADAM SHAH BIN MOHD FAIZAL, Matrix No: SX190401CSJS04 , Github ID: adamshahmf
-->

Activity 🏆 :
## Q1: For this application, you must create a flowchart.

![flowchart-todo-app]()

## Q2: Give a brief description of each function that was used.
function showtodo - The showTodo function takes a filter as input and dynamically generates HTML for each task based on the filter. It iterates through the todos array, checks if the task matches the filter, and builds the corresponding HTML string (liTag). After iterating through all tasks, it updates the taskBox element with the generated HTML.

function showmenu - The showMenu function displays the menu options for a selected task when the ellipsis icon is clicked. It adds the "show" class to the menu div. Additionally, it adds a click event listener to the document to hide the menu when clicking outside the icon.

function updatestatus - The updateStatus function is called when a task checkbox is clicked. It updates the status of the task based on whether it is checked or unchecked. It also updates the UI and saves the updated task list in the localStorage.

function edittask - These functions handle editing, deleting, and creating tasks based on user interactions. editTask prepares the UI for editing a

## Q3: Where is the data kept? How is it kept?
data stored at the local storage
When the script starts, it retrieves the to-do list data from the local storage using JSON.parse(localStorage.getItem("todo-list")) and assigns it to the todos variable. If there is no data stored in the local storage or if the data cannot be parsed as JSON, the todos variable is set to null or an empty array [].

## Q4: How the Clear All button is used
In the code, an event listener is attached to the clearAll button using the addEventListener method. When the button is clicked, the attached callback function is executed. The callback function clears all tasks in the todos array and updates the local storage accordingly. Finally, it calls the showTodo function without any arguments, which refreshes the displayed tasks to reflect the changes.