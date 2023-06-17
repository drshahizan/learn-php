<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# PHP: Fundamentals
Please answer the following 50 multiple-choice questions to test your knowledge in PHP fundamentals. You must place your answer file in the submission folder. Within the [`submission/Q4/set_a`](./submission/Q4/set_a) folder, create a folder called your `github_id`. 

1. Which of the following is the correct opening tag for PHP code?
   - a) `<?php`
   - b) `<php>`
   - c) `<script>`
   - d) `<?=`

2. What does PHP stand for?
   - a) Personal Home Page
   - b) Pretext Hypertext Processor
   - c) PHP: Hypertext Preprocessor
   - d) Preprocessor Hyperlink Pages

3. Which PHP function is used to output text to the browser?
   - a) `echo`
   - b) `print`
   - c) `display`
   - d) `output`

4. How do you assign a value to a variable in PHP?
   - a) Using the assignment operator (`=`)
   - b) Using the `set` keyword
   - c) Using the `value` keyword
   - d) Using the `assign` function

5. What is the correct way to end a PHP statement?
   - a) With a semicolon (`;`)
   - b) With a colon (`:`)
   - c) With a comma (`,`)
   - d) With a period (`.`)

6. Which operator is used for concatenation in PHP?
   - a) `.`
   - b) `+`
   - c) `-`
   - d) `*`

7. What is the correct way to comment a single line in PHP?
   - a) `//`
   - b) `#`
   - c) `/* ... */`
   - d) `<!-- -->`

8. Which function is used to determine the length of a string in PHP?
   - a) `strlen()`
   - b) `strlength()`
   - c) `stringlength()`
   - d) `length()`

9. What is the output of the following code?

```php
$x = 10;
$y = 5;
$result = $x + $y;
echo $result;
```

   - a) 15
   - b) 10 + 5
   - c) $result
   - d) Error

10. What is the correct way to declare an array in PHP?
    - a) `$fruits = array("Apple", "Banana", "Orange");`
    - b) `$fruits = ["Apple", "Banana", "Orange"];`
    - c) `$fruits = "Apple", "Banana", "Orange";`
    - d) `$fruits = ("Apple", "Banana", "Orange");`

11. How do you access the value at a specific index in an array?
    - a) By using square brackets `[]` and the index number
    - b) By using parentheses `()` and the index number
    - c) By using curly braces `{}` and the index number
    - d) By using a period `.` and the index number

12. What is the output of the following code?

    ```php
    $num = 7;
    if ($num % 2 == 0) {
        echo "Even";
    } else {
        echo "Odd";
    }
    ```
    - a) Even
    - b) Odd
    - c) 7
    - d) Error

13. Which function is used to include an external PHP file?
    - a) `include()`
    - b) `import()`
    - c) `require()`
    - d) `load()`

14. What is the correct way to define a constant in PHP?
    - a) `define("PI", 3.14);`
    - b) `constant("PI", 3.14);`
    - c) `$PI = 3.14;`
    - d) `const PI = 3.14;`

15. How do you start a session in PHP?
    - a) `session_start()`
    - b) `start_session()`
    - c) `new Session()`
    - d) `begin_session()`

16. What is the correct way to retrieve a value from a query string in PHP?
    - a) `$_GET["param"]`
    - b) `$_POST["param"]`
    - c) `$_REQUEST["param"]`
    - d) `$_SERVER["param"]`

17. Which PHP superglobal variable stores cookies?
    - a) `$_SESSION`
    - b) `$_GET`
    - c) `$_POST`
    - d) `$_COOKIE`

18. What is the correct way to redirect a user to a different page in PHP?
    - a) `header("Location: newpage.php");`
    - b) `redirect("newpage.php");`
    - c) `load_page("newpage.php");`
    - d) `goto("newpage.php");`

19. What is the output of the following code?

    ```php
    $num1 = 5;
    $num2 = "10";
    $result = $num1 + $num2;
    echo $result;
    ```
    - a) 15
    - b) 510
    - c) Error
    - d) 510 (as a string)

20. What is the correct way to connect to a MySQL database in PHP?
    - a) `mysqli_connect()`
    - b) `mysql_connect()`
    - c) `pdo_connect()`
    - d) `db_connect()`

21. What is the purpose of prepared statements in PHP?
    - a) To prevent SQL injection attacks
    - b) To optimize database queries
    - c) To execute complex SQL queries
    - d) To store frequently used SQL queries

22. What is the correct way to retrieve the number of rows returned from a MySQL query in PHP?
    - a) `mysqli_num_rows()`
    - b) `mysql_num_rows()`
    - c) `pdo_num_rows()`
    - d) `db_num_rows()`

23. How do you close a MySQL database connection in PHP?
    - a) `mysqli_close()`
    - b) `mysql_close()`
    - c) `pdo_close()`
    - d) `db_close()`

24. What is the output of the following code?

    ```php
    $fruit = "Apple";
    switch ($fruit) {
        case "Apple":
            echo "It's a fruit.";
            break;
        case "Banana":
            echo "It's a fruit.";
            break;
        default:
            echo "Unknown fruit.";
    }
    ```
    - a) It's a fruit.
    - b) Unknown fruit.
    - c) Apple
    - d) Banana

25. What is the correct way to handle errors in PHP?
    - a) Using `try...catch` blocks
    - b) Using `if...else` statements
    - c) Using `error_reporting()`
    - d) Using `print_error()`

26. What is the purpose of the `__construct()` function in PHP classes?
    - a) To create a new object instance of the class
    - b) To destroy an object instance of the class
    - c) To initialize the object's properties and perform setup tasks
    - d) To define the behavior of the class methods

27. What is the correct way to create an object of a class in PHP?
    - a) `$object = new ClassName();`
    - b) `$object = createObject(ClassName);`
    - c) `$object = instantiate(ClassName);`
    - d) `$object = object(ClassName);`

28. What is the output of the following code?

    ```php
    class Person {
        public $name;
        public function sayHello() {
            echo "Hello, " . $this->name;
        }
    }

    $person = new Person();
    $person->name = "John";
    $person->sayHello();
    ```
    - a) Hello, John
    - b) Hello, Person
    - c) Error
    - d) John

29. How do you access a static property or method of a class in PHP?
    - a) By using the `::` operator
    - b) By using the `.` operator
    - c) By using the `->` operator
    - d) By using the `=>` operator

30. What is the purpose of the `public` access modifier in PHP class properties and methods?
    - a) It allows access to the property or method from anywhere
    - b) It allows access to the property or method only within the class
    - c) It allows access to the property or method within the class and its subclasses
    - d) It restricts access to the property or method

31. What is the output of the following code?

    ```php
    function add(&$num) {
        $num += 10;
    }

    $number = 5;
    add($number);
    echo $number;
    ```
    - a) 5
    - b) 10
    - c) 15
    - d) Error

32. What is the correct way to read a file line by line in PHP?
    - a) Using the `fread()` function
    - b) Using the `file_get_contents()` function
    - c) Using the `fgets()` function
    - d) Using the `file()` function

33. What is the purpose of the `file_exists()` function in PHP?
    - a) To check if a file or directory exists
    - b) To read the contents of a file
    - c) To write data to a file
    - d) To delete a file or directory

34. What is the output of the following code?

    ```php
    function multiply($num1, $num2 = 2) {
        return $num1 * $num2;
    }

    $result1 = multiply(5);
    $result2 = multiply(5, 3);

    echo $result1 . ", " . $result2;
    ```
    - a) 5, 15
    - b) 10, 15
    - c) 5, 6
    - d) Error

35. What is the correct way to remove leading and trailing whitespace from a string in PHP?
    - a) `trim()`
    - b) `strip()`
    - c) `removeWhitespace()`
    - d) `cleanWhitespace()`

36. What is the output of the following code?

    ```php
    $x = 10;
    echo ++$x;
    ```
    - a) 10
    - b) 11
    - c) Error
    - d) ++10

37. What is the purpose of the `foreach` loop in PHP?
    - a) To iterate over elements in an array or collection
    - b) To execute a block of code repeatedly
    - c) To conditionally execute code based on a condition
    - d) To perform a specific task a fixed number of times

38. What is the correct way to check if a variable is empty in PHP?
    - a) `empty()`
    - b) `isNull()`
    - c) `isBlank()`
    - d) `isEmpty()`

39. What is the output of the following code?

    ```php
    $str = "Hello World";
    echo str_replace("World", "PHP", $str);
    ```
    - a) Hello World
    - b) Hello PHP
    - c) World PHP
    - d) Error

40. What is the purpose of the `array_push()` function in PHP?
    - a) To add elements to the beginning of an array
    - b) To remove elements from an array
    - c) To merge two or more arrays
    - d) To add elements to the end of an array

41. What is the output of the following code?

    ```php
    $numbers = [1, 2, 3, 4, 5];
    $sum = array_sum($numbers);
    echo $sum;
    ```
    - a) 1
    - b) 15
    - c) 5
    - d) Error

42. What is the purpose of the `explode()` function in PHP?
    - a) To split a string into an array
    - b) To combine multiple strings into one string
    - c) To reverse the characters in a string
    - d) To convert a string to lowercase

43. What is the output of the following code?

    ```php
    $number = 3;
    echo pow($number, 2);
    ```
    - a) 3
    - b) 9
    - c) 6
    - d) Error

44. What is the purpose of the `date()` function in PHP?
    - a) To retrieve the current date and time
    - b) To format a date and time string
    - c) To compare two dates
    - d) To add or subtract days from a date

45. What is the output of the following code?

    ```php
    $age = 25;
    echo ($age >= 18) ? "Adult" : "Minor";
    ```
    - a) Adult
    - b) Minor
    - c) 25
    - d) Error

46. What is the purpose of the `header()` function in PHP?
    - a) To set HTTP headers for the response
    - b) To include an external PHP file
    - c) To redirect the user to a different page
    - d) To retrieve the value of a request header

47. What is the output of the following code?

    ```php
    $str = "Hello";
    echo strlen($str);
    ```
    - a) 5
    - b) 6
    - c) 4
    - d) Error

48. What is the purpose of the `json_encode()` function in PHP?
    - a) To convert a PHP array or object into a JSON string
    - b) To convert a JSON string into a PHP array or object
    - c) To encode a URL string
    - d) To encrypt data

49. What is the output of the following code?

    ```php
    $colors = ["Red", "Green", "Blue"];
    $color = "Red";

    if (in_array($color, $colors)) {
        echo "Color found!";
    } else {
        echo "Color not found!";
    }
    ```
    - a) Color found!
    - b) Color not found!
    - c) Red
    - d) Error

50. What is the purpose of the `filter_input()` function in PHP?
    - a) To filter and sanitize user input data
    - b) To retrieve the value of a request header
    - c) To validate email addresses
    - d) To decode a JSON string

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://komarev.com/ghpvc/?username=drshahizan&label=Views&color=0e75b6&style=flat)
![](https://hit.yhype.me/github/profile?user_id=81284918)


