<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Arrays and functions
In PHP, arrays and functions are two fundamental building blocks of programming that allow developers to write efficient, organized, and reusable code. Arrays are used to store multiple values of the same type in a single variable, and they can be manipulated using a variety of built-in functions. Functions, on the other hand, allow you to encapsulate a block of code that can be reused throughout your application. Functions can take zero or more parameters, can have a return value, and can be called recursively. By mastering arrays and functions, PHP developers can write more complex and sophisticated applications that are easier to maintain and extend over time.

A table summarizing some key features of arrays and functions in PHP:

| Arrays                                   | Functions                                             |
|------------------------------------------|-------------------------------------------------------|
| Used to store multiple values of the same type in a single variable | Used to encapsulate a block of code that can be reused |
| Can hold lists of data, implement complex data structures, and pass data between functions | Allow you to organize your code and make it more modular |
| Can be created using the `array()` or `[]` syntax | Can be defined using the `function` keyword |
| Array indices start at 0 | Functions can take zero or more parameters |
| Array elements can be accessed using their index | Functions can have a return value using the `return` keyword |
| Array elements can be added, modified, or removed using array manipulation functions | Function parameters can have default values |
| Array manipulation functions include `array_push()`, `array_pop()`, `array_slice()`, and more | Functions can be called recursively |
| Arrays can be iterated using `foreach()` loops | Functions can be called with variable-length argument lists using `func_get_args()` and `func_num_args()` |
| PHP supports both indexed and associative arrays | PHP has many built-in functions, such as `strlen()`, `strpos()`, and `date()` |
| Array functions include `count()`, `array_merge()`, `array_search()`, and more | You can also create your own custom functions |

> Note that this table is not exhaustive and only provides a high-level overview of some common features of arrays and functions in PHP.

## Arrays
In PHP, arrays are used to store multiple values of the same type in a single variable. They are incredibly versatile and can be used in a variety of ways, such as holding lists of data, implementing complex data structures, and passing data between functions.

How to create an array in PHP:

```php
$fruits = array("apple", "banana", "orange");
```

You can also create an array using the `[]` syntax introduced in PHP 5.4:

```php
$fruits = ["apple", "banana", "orange"];
```

To access an element in an array, you use its index. In PHP, array indices start at 0. So, to access the first element of the `$fruits` array, you would do:

```php
echo $fruits[0]; // output: apple
```
## Functions
Functions are also a crucial part of PHP programming. Functions allow you to encapsulate a block of code that can be reused throughout your application. They also help you organize your code and make it more modular.

How to define a function in PHP:

```php
function square($num) {
  return $num * $num;
}
```

This function takes one parameter, `$num`, and returns its square. You can call this function like so:

```php
echo square(5); // output: 25
```

You can also use arrays in functions by passing them as arguments. For example, here's a function that takes an array and returns its sum:

```php
function array_sum($arr) {
  $sum = 0;
  foreach ($arr as $num) {
    $sum += $num;
  }
  return $sum;
}
```

You can call this function like so:

```php
$nums = [1, 2, 3, 4, 5];
echo array_sum($nums); // output: 15
```

Arrays and functions are two essential tools in PHP programming, and by mastering them, you can write more efficient, organized, and reusable code.

## Case Study
An example code that demonstrates the use of arrays and functions in a university academic course registration system:

```php
<?php

// Define an array to hold the list of available courses
$available_courses = array(
  "COMP101" => "Introduction to Computer Science",
  "MATH201" => "Calculus I",
  "PHYS101" => "Introduction to Physics",
  "ENGL101" => "Introduction to English Composition"
);

// Define a function to display the list of available courses
function display_courses($courses) {
  echo "Available courses:\n";
  foreach ($courses as $code => $title) {
    echo "$code: $title\n";
  }
}

// Define a function to register a student for a course
function register_student($student, $course, &$registrations) {
  if (isset($registrations[$course])) {
    echo "Error: Course $course is already full.\n";
  } else {
    $registrations[$course] = $student;
    echo "Success: $student has been registered for $course.\n";
  }
}

// Define an array to hold the list of course registrations
$registrations = array();

// Display the list of available courses
display_courses($available_courses);

// Register some students for courses
register_student("John Smith", "COMP101", $registrations);
register_student("Jane Doe", "MATH201", $registrations);
register_student("Bob Johnson", "PHYS101", $registrations);
register_student("Alice Williams", "COMP101", $registrations);

// Display the list of course registrations
echo "Course registrations:\n";
foreach ($registrations as $course => $student) {
  echo "$course: $student\n";
}

?>
``` 

In this example, we define an array called `$available_courses` to hold the list of available courses, and a function called `display_courses()` to display the list of courses. We also define a function called `register_student()` to register a student for a course, and an array called `$registrations` to hold the list of course registrations.

We then display the list of available courses using the `display_courses()` function, and register some students for courses using the `register_student()` function. Finally, we display the list of course registrations using a `foreach` loop.

This example demonstrates how arrays and functions can be used to create a simple academic course registration system in PHP.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

