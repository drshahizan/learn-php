<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Flearn-php&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# Working with strings and regular expressions

Working with strings and regular expressions is a common task in PHP, and there are many built-in functions and features to help you manipulate and search through strings using regular expressions.

## Strings
In PHP, strings are sequences of characters that can be enclosed in single or double quotes. You can concatenate strings using the concatenation operator (`.`) or the shorthand operator (`.=`) to add additional text to an existing string. You can manipulate strings in many ways, such as concatenating, trimming, splitting, and formatting. Here are some examples of string operations in PHP:

### Creating Strings

You can create a string in PHP by enclosing the text in single or double quotes. 

```php
$name = "MSO";
$greeting = 'Hello, ' . $name . '!';
echo $greeting; // Output: Hello, MSO!
```

In the example above, we create a string variable `$name` and assign it the value "MSO". We then create another string variable `$greeting` that concatenates the text "Hello, ", the value of `$name`, and the exclamation mark to create the final string "Hello, MSO!". Finally, we use the `echo` statement to output the string to the screen.

### String Functions

PHP provides many built-in functions to manipulate strings. 

```php
$text = "   This is a sample text.   ";

// Trim whitespace from both ends of the string
$trimmed = trim($text);
echo $trimmed; // Output: "This is a sample text."

// Convert the string to uppercase
$uppercase = strtoupper($text);
echo $uppercase; // Output: "   THIS IS A SAMPLE TEXT.   "

// Replace "sample" with "example" in the string
$replaced = str_replace("sample", "example", $text);
echo $replaced; // Output: "   This is a example text.   "

// Split the string into an array of words
$words = explode(" ", $text);
print_r($words); // Output: Array ( [0] => "" [1] => "" [2] => "" [3] => "This" [4] => "is" [5] => "a" [6] => "sample" [7] => "text." [8] => "" [9] => "" [10] => "" )
```

In the example above, we create a string variable `$text` that contains a sample text with extra whitespace. We then use several string functions to manipulate the string:

- `trim()` removes any whitespace from the beginning and end of the string.
- `strtoupper()` converts the string to uppercase.
- `str_replace()` replaces all occurrences of the word "sample" with "example".
- `explode()` splits the string into an array of words, using the space character as a delimiter.

### String Interpolation

PHP also supports string interpolation, which allows you to embed variable values directly into a string without having to concatenate them. 

```php
$name = "MSO";
$age = 30;
$message = "My name is $name and I am $age years old.";
echo $message; // Output: My name is MSO and I am 30 years old.
```

In the example above, we create two variables `$name` and `$age` with values "MSO" and 30, respectively. We then create a string variable `$message` that includes the variable values using the syntax `$variable_name`. When we output the string using `echo`, the variable values are interpolated into the string.

### String Manipulation
Certainly! Here are some examples of how to concatenate, trim, split, and format strings in PHP:

#### 1. Concatenating Strings

You can concatenate two or more strings in PHP using the `.` (dot) operator. 

```php
$greeting = "Hello";
$name = "John";
$message = $greeting . " " . $name . "!";
echo $message; // Output: Hello John!
```

In the example above, we create two string variables `$greeting` and `$name` with values "Hello" and "John", respectively. We then concatenate the two strings with a space in between using the `.` operator, and assign the resulting string to a variable `$message`. Finally, we output the string to the screen using `echo`.

#### 2. Trimming Strings

You can remove whitespace characters from the beginning and/or end of a string in PHP using the `trim()` function. 

```php
$text = "  This is a sample text.   ";
$trimmed = trim($text);
echo $trimmed; // Output: This is a sample text.
```

In the example above, we create a string variable `$text` that contains a sample text with extra whitespace. We then use the `trim()` function to remove the whitespace characters from the beginning and end of the string, and assign the resulting string to a variable `$trimmed`. Finally, we output the trimmed string to the screen using `echo`.

#### 3. Splitting Strings

You can split a string into an array of substrings in PHP using the `explode()` function. 

```php
$text = "This is a sample text.";
$words = explode(" ", $text);
print_r($words); // Output: Array ( [0] => This [1] => is [2] => a [3] => sample [4] => text. )
```

In the example above, we create a string variable `$text` that contains a sample text. We then use the `explode()` function to split the string into an array of substrings, using the space character as a delimiter. The resulting array is assigned to a variable `$words`, and we output the array to the screen using `print_r()`.

#### 4. Formatting Strings

You can format a string using placeholders and format specifiers in PHP. 

```php
$name = "John";
$age = 30;
$message = sprintf("My name is %s and I am %d years old.", $name, $age);
echo $message; // Output: My name is John and I am 30 years old.
```

In the example above, we create two variables `$name` and `$age` with values "John" and 30, respectively. We then use the `sprintf()` function to format a string with two placeholders `%s` and `%d`, which represent a string and an integer, respectively. We pass the values of `$name` and `$age` as arguments to the function, and assign the resulting string to a variable `$message`. Finally, we output the formatted string to the screen using `echo`.

## Regular expressions
Regular expressions are a powerful way to search and manipulate strings. In PHP, you can use regular expressions with the `preg_match` and `preg_replace` functions to search for and replace text that matches a certain pattern. Regular expressions use special characters and syntax to define patterns, such as `^` to match the start of a string, `$` to match the end of a string, and `.` to match any single character.


### How to Use Regular Expressions in PHP

In PHP, you can use regular expressions with a variety of functions, including `preg_match()`, `preg_replace()`, and `preg_split()`. These functions use a syntax called PCRE (Perl Compatible Regular Expressions), which is a widely-used standard for regular expressions.

### Example Code

Here are some examples of how to use regular expressions in PHP:

#### 1. Matching a Pattern

```php
$text = "The quick brown fox jumps over the lazy dog.";
if (preg_match("/quick.*fox/", $text)) {
  echo "Match found!";
} else {
  echo "Match not found.";
}
```

In this example, we have a string variable `$text` that contains a sentence. We then use the `preg_match()` function to search for a pattern that matches the word "quick", followed by any characters (`.*`), followed by the word "fox". If the pattern is found, the function returns a truthy value, and we output "Match found!". Otherwise, we output "Match not found.".

#### 2. Replacing Text

```php
$text = "Hello, World!";
$new_text = preg_replace("/Hello/", "Goodbye", $text);
echo $new_text; // Output: Goodbye, World!
```

In this example, we have a string variable `$text` that contains a greeting. We then use the `preg_replace()` function to replace the word "Hello" with the word "Goodbye". The resulting string is assigned to a variable `$new_text`, and we output the new string to the screen using `echo`.

#### 3. Splitting a String

```php
$text = "apple,banana,orange";
$fruits = preg_split("/,/", $text);
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange )
```

In this example, we have a string variable `$text` that contains a list of fruits separated by commas. We then use the `preg_split()` function to split the string into an array of substrings, using the comma character as a delimiter. The resulting array is assigned to a variable `$fruits`, and we output the array to the screen using `print_r()`.

## Summarizing strings and regular expressions in PHP:

| Task | Function | Syntax |
| --- | --- | --- |
| Extracting substrings | `substr()` | `substr($string, $start, $length)` |
| | `preg_match()` | `preg_match($pattern, $string, $matches)` |
| Replacing text | `str_replace()` | `str_replace($search, $replace, $string)` |
| | `preg_replace()` | `preg_replace($pattern, $replace, $string)` |
| Splitting strings | `explode()` | `explode($delimiter, $string)` |
| | `preg_split()` | `preg_split($pattern, $string)` |
| Searching for patterns | `strpos()` | `strpos($string, $substring)` |
| | `preg_match()` | `preg_match($pattern, $string, $matches)` |

Note that the `$matches` parameter in `preg_match()` and `preg_replace()` is an array that will contain any matches found in the string based on the specified regular expression pattern.

Also, keep in mind that regular expressions can be complex and powerful tools, but they can also be difficult to learn and debug. It's important to test your regular expressions thoroughly and use tools like online regex testers to help you validate your patterns.

## Case Study
An example code for a university academic course registration system that uses strings and regular expressions in PHP:

```php
<?php

// Sample data for the registration system
$available_courses = array(
  "CS101" => "Introduction to Computer Science",
  "MATH202" => "Calculus II",
  "ENG105" => "Composition and Rhetoric",
  "PHYS201" => "Mechanics and Waves",
);

// Sample form data from the user
$user_name = "John Doe";
$user_email = "johndoe@example.com";
$user_courses = "CS101, MATH202";

// Validate the user's email address using a regular expression
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $user_email)) {
  echo "Error: Invalid email address";
  exit;
}

// Split the user's course list into individual course codes
$courses = preg_split("/,\s*/", $user_courses);

// Loop through the list of courses and validate them
foreach ($courses as $course) {
  if (!isset($available_courses[$course])) {
    echo "Error: Invalid course code: $course";
    exit;
  }
}

// If all data is valid, register the user for the selected courses
echo "Registration successful for $user_name ($user_email):\n";
foreach ($courses as $course) {
  echo "- " . $available_courses[$course] . "\n";
}

?>
```

In this example, we have a sample data of available courses, and a form data from the user containing their name, email address, and a comma-separated list of course codes they want to register for. 

We use a regular expression to validate the user's email address format, and split their course list into individual course codes using another regular expression. Then, we loop through the list of courses to validate them against the available course data. If all data is valid, we register the user for the selected courses and output a success message with the course names.

> This example demonstrates how strings and regular expressions can be used in a real-world application to validate and process user input data.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

