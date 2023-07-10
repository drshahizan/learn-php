2. Brief description of each function used:

displayTasks(): This function retrieves the tasks from the local storage and displays them on the webpage. It creates HTML elements dynamically to represent each task and appends them to the task container.
addTask(): This function is called when the user enters a new task in the input field and clicks the Add Task button. It validates the input, creates a new task object, adds it to the tasks array, and updates the local storage. Then, it calls the displayTasks function to update the UI.
editTask(): This function is triggered when the user clicks the Edit button next to a task. It allows the user to modify the task description and updates the local storage and UI accordingly.
deleteTask(): This function is called when the user clicks the Delete button next to a task. It removes the task from the tasks array and updates the local storage and UI.
toggleTaskStatus(): This function is triggered when the user clicks the checkbox next to a task. It toggles the completion status of the task and updates the local storage and UI.
filterTasks(): This function is called when the user selects a filter option from the dropdown menu. It filters the tasks based on their completion status and updates the UI accordingly.


3. Where is the data kept? How is it kept?

The data (tasks) in the Todo List app is kept in the browser's local storage. The tasks are stored as an array of objects in a key-value pair format. The localStorage object is used to interact with the browser's local storage and perform operations like setting and retrieving data. The tasks are serialized into a JSON string before being stored in the local storage and deserialized back into JavaScript objects when retrieved.


4. How the Clear All button is used:

The Clear All button is used to remove all tasks from the Todo List. When the user clicks the Clear All button, the clearTasks() function is triggered. This function clears the tasks array, updates the local storage to reflect the change, and calls the displayTasks() function to update the UI. As a result, all tasks are removed from the Todo List, and the UI is refreshed to reflect the empty task list.
