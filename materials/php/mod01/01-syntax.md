<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Introduction to PHP syntax and variables

PHP (Hypertext Preprocessor) is a popular server-side scripting language used to develop dynamic websites and web applications. Its syntax is similar to C, Java, and Perl, and it is easy to learn for beginners. 

## Key points about PHP syntax

| Syntax | Description |
| ------ | ----------- |
| `<?php` and `?>` | Opening and closing PHP tags. PHP code is enclosed between these tags. |
| `//` | Single-line comment syntax in PHP. Anything after `//` on a line is treated as a comment. |
| `/*` and `*/` | Multi-line comment syntax in PHP. Anything between `/*` and `*/` is treated as a comment. |
| `$variable` | Declares a variable in PHP. The `$` sign is always used to indicate a variable. |
| `=` | Assignment operator in PHP. Used to assign a value to a variable. |
| `echo` | Output statement in PHP. Used to display text or variables on the web page. |
| `print` | Alternative output statement in PHP. Used to display text or variables on the web page. |
| `if`, `else if`, `else` | Conditional statements in PHP. Used to execute code based on a condition. |
| `while` | Looping statement in PHP. Used to execute a block of code repeatedly while a condition is true. |
| `for` | Looping statement in PHP. Used to execute a block of code a specified number of times. |
| `foreach` | Looping statement in PHP. Used to iterate over an array or object. |
| `function` | Function declaration in PHP. Used to define a reusable block of code. |
| `return` | Function return statement in PHP. Used to return a value from a function. |

These are just some of the most common syntax elements in PHP. There are many more syntax elements available in PHP, and the language is constantly evolving with new features and updates.

## PHP code

```php
<!DOCTYPE html>
<html>
<body>

<?php
// This is a comment in PHP code
$message = "Hello, World!"; // Assigning a string value to the $message variable
echo $message; // Outputting the value of the $message variable to the web page
?>

</body>
</html>
```

This code starts with the standard HTML5 document structure, with a head and body section. Within the body section, the PHP code is enclosed in the `<?php` and `?>` tags. 

The code first creates a comment using `//`, which is used for single-line comments in PHP. Then, it declares a variable named `$message` and assigns it the value `"Hello, World!"`. Note that variables in PHP are always preceded by a dollar sign `$`.

Finally, the `echo` statement is used to output the value of the `$message` variable to the web page. This will display the text "Hello, World!" on the web page when it is viewed in a web browser.

Overall, this example demonstrates some basic PHP syntax, including variable declaration and assignment, comments, and outputting values to the web page.

## PHP variables

In PHP, a variable is a container that holds a value or reference to a value. A variable can be thought of as a named storage location in memory. You can use variables to store and manipulate data in your PHP code. 

Variable names in PHP must start with a dollar sign `$`, followed by a valid name. A valid variable name consists of letters, numbers, and underscores, and must begin with a letter or underscore. Variable names are case-sensitive, so `$foo` and `$FOO` are two different variables.

PHP is a loosely typed language, which means you do not need to declare the data type of a variable before using it. The data type of a variable is determined dynamically based on the value assigned to it. For example, you can assign a string value to a variable, and then later assign an integer value to the same variable, without having to declare the variable as a string or integer.

An example of how to declare and use variables in PHP:

```php
<?php
  // declare and initialize variables
  $name = "Dr MSO";
  $age = 30;
  $height = 1.75;
  $is_student = true;

  // output values of variables
  echo "My name is $name. I am $age years old and $height meters tall.";
  echo " Am I a student? " . ($is_student ? "Yes" : "No");

  // manipulate variables
  $age += 5; // add 5 to the age variable
  $height *= 100; // multiply the height variable by 100
  $is_student = false; // change the value of the is_student variable

  // output new values of variables
  echo "In 5 years, I will be $age years old.";
  echo " My height in centimeters is $height.";
  echo " Am I a student now? " . ($is_student ? "Yes" : "No");
?>
```

In this example, we declare and initialize several variables of different data types. We then output the values of these variables using the `echo` statement. 

Next, we manipulate the values of some of these variables using basic arithmetic operators. We update the `$age` variable by adding 5 to it, we update the `$height` variable by multiplying it by 100, and we change the value of the `$is_student` variable from true to false.

Finally, we output the new values of these variables using the `echo` statement. This demonstrates how variables can be updated and manipulated throughout the course of a PHP script.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

