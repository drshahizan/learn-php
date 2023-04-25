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

1. The `if` statement:
The `if` statement allows you to execute a block of code if a certain condition is true. You can also include an `else` clause to execute a different block of code if the condition is false. Here's an example:

```javascript
if (condition) {
   // code to execute if the condition is true
} else {
   // code to execute if the condition is false
}
```

2. The `switch` statement:
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


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
