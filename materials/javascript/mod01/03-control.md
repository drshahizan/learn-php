<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Control Structures

In programming, control structures are used to control the flow of execution of code. JavaScript provides several control structures that enable programmers to conditionally execute code, iterate over sets of data, and handle errors. 

| Control Structure | Description | Syntax |
| --- | --- | --- |
| Conditional statements | Execute code only if certain conditions are met. In JavaScript, the if statement is used for this purpose. The if statement can also be combined with else and else if clauses to create more complex conditions. | `if (condition) { code } else if (condition) { code } else { code }` |
| Loops | Execute a block of code repeatedly. JavaScript provides three types of loops: for, while, and do-while. | `for (initialization; condition; increment/decrement) { code }` <br> `while (condition) { code }` <br> `do { code } while (condition)` |
| Switch statements | Execute different code based on different values of a single variable | `switch (expression) { case value: code; break; default: code; }` |
| Exception handling | JavaScript provides a try-catch-finally block for exception handling. This structure is used to handle errors that may occur during program execution. | `try { code } catch (error) { code } finally { code }` |

## Conditional statements
In JavaScript, there are two types of conditional statements: the `if` statement and the `switch` statement.

### 1. The `if` statement
The `if` statement allows you to execute a block of code if a certain condition is true. You can also include an `else` clause to execute a different block of code if the condition is false. Here's an example:

```javascript
if (condition) {
   // code to execute if the condition is true
} else {
   // code to execute if the condition is false
}
```

### 2. The `switch` statement
The `switch` statement allows you to execute different blocks of code based on the value of a single variable. Here's an example:

```javascript
switch (expression) {
   case value1:
      // code to execute if expression equals value1
      break;
   case value2:
      // code to execute if expression equals value2
      break;
   default:
      // code to execute if expression doesn't match any of the cases
}
```

An example of how you can use conditional statements in a web page with HTML and JavaScript:

```html
<!DOCTYPE html>
<html>
<head>
   <title>Conditional Statements Example</title>
   <script>
      function checkAge() {
         let age = document.getElementById("age").value;
         
         if (age < 18) {
            document.getElementById("result").innerHTML = "You are not old enough to vote.";
         } else {
            document.getElementById("result").innerHTML = "You can vote!";
         }
      }
   </script>
</head>
<body>
   <h1>Conditional Statements Example</h1>
   <p>Enter your age:</p>
   <input type="text" id="age">
   <br>
   <button onclick="checkAge()">Check Age</button>
   <br>
   <p id="result"></p>
</body>
</html>
```

In this example, the `checkAge()` function uses an `if` statement to check whether the user's age is less than 18, and displays a message accordingly. The message is displayed in a paragraph element with the `id` of "result". When the user clicks the "Check Age" button, the `checkAge()` function is called and the result is displayed on the page.

## Loops
In JavaScript, there are three types of loops: the `for` loop, the `while` loop, and the `do-while` loop. Each type of loop allows you to execute a block of code repeatedly, but they differ in the way that the loop condition is specified.

### 1. The `for` loop
The `for` loop is used to iterate over a range of values. You can specify the starting value, the ending value, and the increment or decrement between each iteration. Here's an example:

```javascript
for (let i = 0; i < 10; i++) {
   // code to execute repeatedly
}
```

In this example, the loop will execute 10 times, with the value of `i` starting at 0 and incrementing by 1 on each iteration.

### 2. The `while` loop
The `while` loop is used to execute a block of code while a certain condition is true. Here's an example:

```javascript
while (condition) {
   // code to execute repeatedly
}
```

In this example, the loop will execute repeatedly as long as the condition is true.

### 3. The `do-while` loop
The `do-while` loop is similar to the `while` loop, but the condition is checked at the end of each iteration instead of the beginning. This ensures that the loop body is executed at least once. Here's an example:

```javascript
do {
   // code to execute repeatedly
} while (condition);
```

In this example, the loop body will be executed at least once, and then repeatedly as long as the condition is true.

Here's an example of how you can use loops in a web page with HTML and JavaScript:

```javascript
<!DOCTYPE html>
<html>
<head>
   <title>Loops Example</title>
   <script>
      function countdown() {
         let count = 10;
         let output = "";
         
         while (count >= 0) {
            output += count + ", ";
            count--;
         }
         
         document.getElementById("result").innerHTML = output;
      }
   </script>
</head>
<body>
   <h1>Loops Example</h1>
   <p>Click the button to start the countdown:</p>
   <button onclick="countdown()">Start Countdown</button>
   <br>
   <p id="result"></p>
</body>
</html>
```

In this example, the `countdown()` function uses a `while` loop to count down from 10 to 0, and displays the result on the page. The result is displayed in a paragraph element with the `id` of "result". When the user clicks the "Start Countdown" button, the `countdown()` function is called and the result is displayed on the page.

## Handle exceptions
In JavaScript, you can handle exceptions using `try-catch` blocks. The `try` block contains the code that may throw an exception, and the `catch` block is used to handle the exception if it is thrown. 

```html
<!DOCTYPE html>
<html>
<head>
   <title>Exception Handling Example</title>
   <script>
      function divide(a, b) {
         try {
            if (b === 0) {
               throw "Division by zero error";
            }
            return a / b;
         } catch (error) {
            return error;
         }
      }
      
      function calculate() {
         let num1 = document.getElementById("num1").value;
         let num2 = document.getElementById("num2").value;
         
         let result = divide(num1, num2);
         
         document.getElementById("result").innerHTML = result;
      }
   </script>
</head>
<body>
   <h1>Exception Handling Example</h1>
   <p>Enter two numbers to divide:</p>
   <input type="number" id="num1"><br>
   <input type="number" id="num2"><br>
   <button onclick="calculate()">Calculate</button>
   <br>
   <p id="result"></p>
</body>
</html>
```

In this example, the `divide()` function takes two parameters, `a` and `b`, and attempts to divide `a` by `b`. If `b` is equal to zero, the function throws an exception with the message "Division by zero error". Otherwise, it returns the result of the division.

The `calculate()` function is called when the user clicks the "Calculate" button. It retrieves the values of `num1` and `num2` from the HTML input elements, and calls the `divide()` function with these values. If an exception is thrown, the `catch` block handles the exception and returns the error message. Otherwise, the result of the division is displayed on the page in a paragraph element with the `id` of "result".

In this way, `try-catch` blocks can be used to handle exceptions and prevent your program from crashing if an unexpected error occurs.

## Case study
An example of the complete HTML and JavaScript code for the university academic course registration system, using only two functions:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Course Registration System</title>
  </head>
  <body>
    <h1>Course Registration System</h1>
    <label for="courses">Select a Course:</label>
    <select id="courses"></select>
    <br />
    <label for="name">Name:</label>
    <input type="text" id="name" />
    <br />
    <label for="id">Student ID:</label>
    <input type="text" id="id" />
    <br />
    <button onclick="register()">Register</button>
    <br />
    <ul id="course-list"></ul>
    <script>
      const courses = [
        {
          code: "COMP101",
          name: "Introduction to Computer Science",
          credits: 3,
          seats: 30,
          enrolled: [],
        },
        {
          code: "MATH101",
          name: "Calculus I",
          credits: 4,
          seats: 20,
          enrolled: [],
        },
        {
          code: "PHYS101",
          name: "Physics I",
          credits: 4,
          seats: 25,
          enrolled: [],
        },
      ];

      function displayCourses() {
        const select = document.getElementById("courses");
        for (let i = 0; i < courses.length; i++) {
          const course = courses[i];
          if (course.seats > 0) {
            const option = document.createElement("option");
            option.text = `${course.code} - ${course.name} (${course.credits} credits)`;
            option.value = course.code;
            select.add(option);
          }
        }
      }

      function register() {
        const select = document.getElementById("courses");
        const code = select.value;
        const name = document.getElementById("name").value;
        const id = document.getElementById("id").value;
        const course = courses.find((c) => c.code === code);
        if (!course) {
          alert(`Invalid course code: ${code}.`);
        } else if (course.seats === 0) {
          alert(`Course ${course.code} is full.`);
        } else if (course.enrolled.includes(id)) {
          alert(`You are already enrolled in course ${course.code}.`);
        } else {
          course.seats--;
          course.enrolled.push(id);
          alert(
            `Congratulations, ${name}! You have successfully registered for ${course.code} - ${course.name}.`
          );
        }
        //displayCourses();
        displayEnrollment();
      }

      function displayEnrollment() {
        const list = document.getElementById("course-list");
        list.innerHTML = "";
        for (let i = 0; i < courses.length; i++) {
          const course = courses[i];
          const li = document.createElement("li");
          li.innerHTML = `${course.code} - ${course.name} (${course.credits} credits) - Seats: ${course.seats} - Enrolled: ${course.enrolled.length}`;
          list.appendChild(li);
        }
      }

      displayCourses();
      displayEnrollment();
    </script>
  </body>
</html>

```

In this version of the code, there are only two functions: `displayCourses` and `register`. The `displayCourses` function generates a list of available courses based on the number of seats available in each course. The `register` function handles the course registration process, checking whether the selected course is valid, whether there are seats available, and whether the student is already enrolled in the course. If all checks pass, the function updates the course's seats and enrolled array, and displays a success message to the user.

The displayEnrollment function is called after the register function, and updates the list of enrolled students for each course.

When the page loads, both the displayCourses and displayEnrollment functions are called to generate the initial lists of available courses and enrolled students. Then, when the user clicks the "Register" button, the register function is called to handle the course registration process.

Overall, this code provides a simple but functional course registration system for a university, using JavaScript control structures to handle user input and manage course enrollment.







## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://komarev.com/ghpvc/?username=drshahizan&label=Views&color=0e75b6&style=flat)
