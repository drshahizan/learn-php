<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Controlling program flow

Controlling program flow is an essential part of any programming language, including PHP. Program flow refers to the order in which the statements of a program are executed. In PHP, there are several ways to control program flow, including conditionals, loops, and branching statements.

| Statement | Description |
| --- | --- |
| `if`/`else` | Evaluates a condition and executes a block of code if the condition is true. If the condition is false, the code in the `else` block is executed. |
| `switch` | Evaluates an expression and executes code blocks based on the value of the expression. |
| `for` | Executes a block of code a specified number of times, based on a starting value, an ending value, and a step value. |
| `while` | Executes a block of code as long as a specified condition is true. |
| `do...while` | Executes a block of code once, and then repeats the code as long as a specified condition is true. |
| `foreach` | Iterates over each element in an array or collection and executes a block of code for each element. |
| `break` | Terminates the execution of a loop or switch statement. |
| `continue` | Skips to the next iteration of a loop. |
| `return` | Terminates the execution of a function and returns a value to the caller. |
| `throw` | Throws an exception, which can be caught and handled by an exception handler. |

Note that these are not the only control flow statements available in PHP, but they are some of the most commonly used ones. Additionally, there are variations and combinations of these statements that can be used to achieve more complex control flow logic in your programs.

## 1. Conditionals
Conditionals are used to execute a block of code based on whether a certain condition is true or false. In PHP, there are two types of conditionals: if and switch statements.

### If statement
The if statement is used to execute a block of code if a certain condition is true. 

```php
if ($a > $b) {
   echo "a is greater than b";
}
```

### Switch statement
The switch statement is used to execute a block of code based on the value of a variable. 

```php
switch ($color) {
   case "red":
      echo "Your favorite color is red!";
      break;
   case "blue":
      echo "Your favorite color is blue!";
      break;
   default:
      echo "Your favorite color is neither red nor blue!";
      break;
}
```

## 2. Loops
Loops are used to execute a block of code repeatedly. In PHP, there are several types of loops, including for, while, do-while, and foreach loops.

### For loop
The for loop is used to execute a block of code a specific number of times. 

```php
for ($i = 0; $i < 10; $i++) {
   echo "The number is: $i <br>";
}
```

### While loop
The while loop is used to execute a block of code as long as a certain condition is true.

```php
$i = 0;
while ($i < 10) {
   echo "The number is: $i <br>";
   $i++;
}
```

### Do-while loop
The do-while loop is similar to the while loop, except that it executes the block of code at least once, even if the condition is false.

```php
$i = 0;
do {
   echo "The number is: $i <br>";
   $i++;
} while ($i < 10);
```

### Foreach loop
The foreach loop is used to iterate over arrays and objects. 

```php
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
   echo "$color <br>";
}
```

## 3. Branching statements
Branching statements are used to change the order of execution of a program. In PHP, there are three types of branching statements: break, continue, and goto.

### Break statement
The break statement is used to terminate the execution of a loop or switch statement. 

```php
for ($i = 0; $i < 10; $i++) {
   if ($i == 5) {
      break;
   }
   echo "The number is: $i <br>";
}
```

### Continue statement
The continue statement is used to skip to the next iteration of a loop.

```php
for ($i = 0; $i < 10; $i++) {
   if ($i == 5) {
      continue;
   }
   echo "The number is: $i <br>";
}
```

### Goto statement
The goto statement is used to jump to a specific line of code in a program. However, the use of goto is generally discouraged, as it can make the code harder to read and understand.

```php
<?php

$i = 0;

start:
echo "The number is: $i<br>";
$i++;

if ($i < 10) {
    goto start;
}

?>
```

In this example, the `goto` statement is used to jump back to the `start` label after incrementing the value of `$i`. The loop continues until `$i` reaches 10.

While `goto` can be a powerful tool, it can also make the code harder to read and understand. Therefore, it is generally discouraged to use `goto` statements unless absolutely necessary. It's usually better to use alternative control flow statements like `if`, `for`, `while`, and `foreach` loops, as well as `break` and `continue` statements, to achieve the same results in a more readable and maintainable way.

## Case Study
Complete and functional code example for a university academic course registration system using PHP:

```php
<?php
// assume there is an array of available courses
$courses = array(
    "CS101" => array(
        "name" => "Introduction to Computer Science",
        "credits" => 3,
        "capacity" => 30,
        "enrolled" => 0
    ),
    "MATH201" => array(
        "name" => "Calculus I",
        "credits" => 4,
        "capacity" => 25,
        "enrolled" => 0
    ),
    // add more courses here...
);

// assume the user has provided their student ID and desired course code through a form
$student_id = $_POST["student_id"];
$course_code = $_POST["course_code"];

// check if the student ID is valid
if (isValidStudentID($student_id)) {
    // check if the course code is valid and there is still space available
    if (array_key_exists($course_code, $courses) && $courses[$course_code]["enrolled"] < $courses[$course_code]["capacity"]) {
        // register the student for the course
        registerForCourse($student_id, $course_code);
        $courses[$course_code]["enrolled"]++;

        // display a success message
        echo "Congratulations, you have successfully registered for " . $courses[$course_code]["name"] . "!";
    } else {
        // if the course is full or the code is invalid, display an error message
        if (!array_key_exists($course_code, $courses)) {
            echo "Invalid course code. Please choose a valid course.";
        } else {
            echo "Sorry, this course is already full. Please choose another course.";
        }
    }
} else {
    // if the student ID is invalid, display an error message
    echo "Invalid student ID. Please provide a valid ID.";
}

// function to validate student ID format
function isValidStudentID($id) {
    // implement validation logic here
    // for simplicity, assume any student ID with length 9 is valid
    return strlen($id) === 9;
}

// function to register a student for a course in a database or file
function registerForCourse($student_id, $course_code) {
    // implement registration logic here
    // for simplicity, just write the registration to a file
    $registration = $student_id . "," . $course_code . "\n";
    file_put_contents("registrations.txt", $registration, FILE_APPEND);
}
?>
``` 

This code checks if the student ID is valid using an `if` statement, and then checks if the course code is valid and has space available using another `if` statement. If both conditions are true, the code registers the student for the course, increments the course enrollment count, and displays a success message using an `echo` statement. If either condition is false, the code displays an error message using an `echo` statement. The `strlen` function is used to check the length of the student ID and validate it. The `file_put_contents` function is used to write the registration data to a file. Overall, the control flow statements in this example help to ensure that the registration process is smooth and error-free for the user.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
