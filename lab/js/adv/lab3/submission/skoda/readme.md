# Lab 3: Todo List

Activity 🏆 :
## Q1: For this application, you must create a flowchart.
Ans:
![flowchart-todo-app](http://www.plantuml.com/plantuml/png/RL8zRy8m5DppAomcMihGrKD5-QY4r7QX6s8myIjOE7QKzqAHglxtycBNE8KfUUUxyzc-2P9ggAriKLg5A3uK7fQkRaby5qAC3FzAqI4B2nKuAdwAo7qnbg31mFpiXiX1ALQrSd5QRowQcGNLF5iRH2LFqvR8Eod2Dzyb9PhwKn1G6AIOc-Crqsl_QZ147zDvGjc1wmq3e0qjjHJ64Oy65sU0tQNOUcz1kOAtmBt_Oj4md4WAfCQutPqKHs_q7-CDN3j4i50Iw60IysJ4jjQAO4MAMln7dksXF6pzwLe4CTMGpnhpFWY24xsh2cx4qM21e9E4toIwVOBUVSMxwZAnHS6EIkkK8C3PTgMlwhHXXZTG-MCVxRrXB5HwW14PikaykRDE3yBe3cWEM3Qc9kCTUmS5kr_QEdWSYF7uYR_zjiQINWZtWxoRHIfaxj2lOcnWpiZxbsgNhpFOhUHekE49EDrMzXS0)

## Q2: Give a brief description of each function that was used.
Ans:
function showtodo - The showTodo function takes a filter as input and dynamically generates HTML for each task based on the filter. It iterates through the todos array, checks if the task matches the filter, and builds the corresponding HTML string (liTag). After iterating through all tasks, it updates the taskBox element with the generated HTML.

function showmenu - The showMenu function displays the menu options for a selected task when the ellipsis icon is clicked. It adds the "show" class to the menu div. Additionally, it adds a click event listener to the document to hide the menu when clicking outside the icon.

function updatestatus - The updateStatus function is called when a task checkbox is clicked. It updates the status of the task based on whether it is checked or unchecked. It also updates the UI and saves the updated task list in the localStorage.

function edittask - These functions handle editing, deleting, and creating tasks based on user interactions. editTask prepares the UI for editing a

## Q3: Where is the data kept? How is it kept?
Ans:
data stored at the local storage
When the script starts, it retrieves the to-do list data from the local storage using JSON.parse(localStorage.getItem("todo-list")) and assigns it to the todos variable. If there is no data stored in the local storage or if the data cannot be parsed as JSON, the todos variable is set to null or an empty array [].

## Q4: How the Clear All button is used
Ans:
In the code, an event listener is attached to the clearAll button using the addEventListener method. When the button is clicked, the attached callback function is executed. The callback function clears all tasks in the todos array and updates the local storage accordingly. Finally, it calls the showTodo function without any arguments, which refreshes the displayed tasks to reflect the changes.

### Team zSkoda:
1.Mohd Noor Hafiz
2.Ikhmal Syazreel
3.
4.
