<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

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

#### 1.Concatenating Strings

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

#### 4.Formatting Strings

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

A table summarizing the most commonly used functions and syntax for working with strings and regular expressions in PHP:

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

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
