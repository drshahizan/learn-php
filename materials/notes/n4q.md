<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# PHP: Fundamentals

## Set A
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

## Set B
Please answer the following 50 multiple-choice questions to test your knowledge in PHP fundamentals. You must place your answer file in the submission folder. Within the [`submission/Q4/set_b`](./submission/Q4/set_b) folder, create a folder called your `github_id`. 

1. Which of the following is a correct way to start a PHP script?
   - a) `<?php`
   - b) `<?`
   - c) `<?php start`
   - d) `<script>`

```php
<?php
// Code block starts here
```

2. What is the correct way to print "Hello, World!" in PHP?
   - a) `echo "Hello, World!";`
   - b) `print("Hello, World!");`
   - c) `printf("Hello, World!");`
   - d) `console.log("Hello, World!");`

```php
echo "Hello, World!";
```

3. Which of the following variables is valid in PHP?
   - a) `$my_var`
   - b) `%myVar`
   - c) `#myVar`
   - d) `@myVar`

```php
$my_var = "Some value";
```

4. How do you concatenate two strings in PHP?
   - a) Using the `.` operator.
   - b) Using the `+` operator.
   - c) Using the `:` operator.
   - d) Using the `*` operator.

```php
$string1 = "Hello";
$string2 = "World";
$result = $string1 . $string2;
```

5. What will be the output of the following code snippet?

```php
$x = 5;
$y = 10;
$result = $x + $y;
echo $result;
```
   - a) 15
   - b) "15"
   - c) Error
   - d) Undefined

```php
15
```

6. How do you comment a single line in PHP?
   - a) `// Comment`
   - b) `/* Comment */`
   - c) `# Comment`
   - d) `<!-- Comment -->`

```php
// This is a comment
```

7. Which of the following is the correct way to define a constant in PHP?
   - a) `define("MY_CONSTANT", 100);`
   - b) `MY_CONSTANT = 100;`
   - c) `const MY_CONSTANT = 100;`
   - d) `$MY_CONSTANT = 100;`

```php
define("MY_CONSTANT", 100);
```

8. What is the correct syntax to include an external PHP file?
   - a) `include "file.php";`
   - b) `require_once("file.php");`
   - c) `import "file.php";`
   - d) `load "file.php";`

```php
include "file.php";
```

9. What does the `$_POST` superglobal in PHP represent?
   - a) Data sent through a GET request.
   - b) Data sent through a POST request.
   - c) Server information.
   - d) File upload information.

```php
$data = $_POST["input_name"];
```

10. What is the correct way to check if a file exists in PHP?
    - a) `file_exists("file.txt")`
    - b) `is_file("file.txt")`
    - c) `file_exists("file.txt") && is_file("file.txt")`
    - d) `exists("file.txt")`

```php
if (file_exists("file.txt")) {
    echo "File exists";
} else {
    echo "File does not exist";
}
```

11. What is the purpose of the `strlen()` function in PHP?
    - a) To calculate the length of a string.
    - b) To convert a string to lowercase.
    - c) To remove whitespace from the beginning and end of a string.
    - d) To reverse a string.

```php
$length = strlen("Hello, World!");
```

12. What will be the output of the following code snippet?

```php
$x = 10;
if ($x > 5) {
    echo "Greater than 5";
} else {
    echo "Less than or equal to 5";
}
```
    - a) Greater than 5
    - b) Less than or equal to 5
    - c) Error
    - d) Undefined

```php
Greater than 5
```

13. How do you define a function in PHP?
    - a) `function myFunction() {}`
    - b) `def myFunction() {}`
    - c) `fn myFunction() {}`
    - d) `fun myFunction() {}`

```php
function myFunction() {
    // Function code here
}
```

14. What is the purpose of the `return` statement in a function?
    - a) To terminate the execution of the function and return a value.
    - b) To restart the execution of the function from the beginning.
    - c) To output a message to the browser.
    - d) To include another file in the function.

```php
function multiply($x, $y) {
    return $x * $y;
}
```

15. What is the correct way to call a function in PHP?
    - a) `myFunction();`
    - b) `$myFunction();`
    - c) `call myFunction();`
    - d) `execute myFunction();`

```php
myFunction();
```

16. What is the purpose of the `foreach` loop in PHP?
    - a) To loop through each element in an array or object.
    - b) To repeat a block of code a specific number of times.
    - c) To conditionally execute a block of code.
    - d) To define a function.

```php
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo $number;
}
```

17. What will be the output of the following code snippet?

```php
$x = 1;
while ($x <= 5) {
    echo $x;
    $x++;
}
```
    - a) 12345
    - b) 54321
    - c) 11111
    - d) 123456789

```php
12345
```

18. What is the purpose of the `continue` statement in a loop?
    - a) To skip the current iteration of the loop and continue to the next iteration.
    - b) To exit the loop completely.
    - c) To restart the loop from the beginning.
    - d) To output a message to the browser.

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    echo $i;
}
```

19. What is the purpose of the `break` statement in a loop?
    - a) To exit the loop completely.
    - b) To skip the current iteration of the loop and continue to the next iteration.
    - c) To restart the loop from the beginning.
    - d) To output a message to the browser.

```php
for ($i = 1; $i <= 10; $i++) {
    if ($i

 == 5) {
        break;
    }
    echo $i;
}
```

20. What is the purpose of the `$_GET` superglobal in PHP?
    - a) Data sent through a GET request.
    - b) Data sent through a POST request.
    - c) Server information.
    - d) File upload information.

```php
$id = $_GET["id"];
```

21. What is the correct way to redirect a user to another page in PHP?
    - a) `header("Location: newpage.php");`
    - b) `redirect("newpage.php");`
    - c) `goTo("newpage.php");`
    - d) `location.href = "newpage.php";`

```php
header("Location: newpage.php");
```

22. What is the purpose of the `$_SESSION` superglobal in PHP?
    - a) To store session variables.
    - b) To store cookies.
    - c) To retrieve form data.
    - d) To access server information.

```php
$_SESSION["username"] = "John";
```

23. How do you destroy a session in PHP?
    - a) `session_destroy();`
    - b) `destroy_session();`
    - c) `unset($_SESSION);`
    - d) `delete_session();`

    ```php
    session_destroy();
    ```

24. What is the purpose of the `include_once` statement in PHP?
    - a) To include an external PHP file only once.
    - b) To include an external PHP file multiple times.
    - c) To execute a PHP script.
    - d) To import functions from another PHP file.

    ```php
    include_once "file.php";
    ```

25. What is the purpose of the `require` statement in PHP?
    - a) To include an external PHP file.
    - b) To execute a PHP script.
    - c) To import functions from another PHP file.
    - d) To define a constant.

    ```php
    require "file.php";
    ```

26. What is the purpose of the `is_numeric()` function in PHP?
    - a) To check if a value is a number or a numeric string.
    - b) To convert a value to a numeric data type.
    - c) To format a number as a string.
    - d) To round a number to the nearest integer.

    ```php
    $number = "123";
    if (is_numeric($number)) {
        echo "Number";
    } else {
        echo "Not a number";
    }
    ```

27. What is the purpose of the `str_replace()` function in PHP?
    - a) To replace occurrences of a substring with another substring in a string.
    - b) To convert a string to uppercase.
    - c) To remove whitespace from the beginning and end of a string.
    - d) To split a string into an array.

    ```php
    $string = "Hello, World!";
    $newString = str_replace("World", "John", $string);
    ```

28. What is the purpose of the `date()` function in PHP?
    - a) To format the current date and time.
    - b) To retrieve the current timestamp.
    - c) To calculate the difference between two dates.
    - d) To convert a string to a date object.

    ```php
    $date = date("Y-m-d");
    ```

29. What is the purpose of the `count()` function in PHP?
    - a) To count the number of elements in an array.
    - b) To calculate the sum of elements in an array.
    - c) To find the average of elements in an array.
    - d) To sort elements in an array.

    ```php
    $numbers = [1, 2, 3, 4, 5];
    $count = count($numbers);
    ```

30. What is the purpose of the `array_push()` function in PHP?
    - a) To add one or more elements to the end of an array.
    - b) To remove the last element from an array.
    - c) To check if an element exists in an array.
    - d) To merge two or more arrays.

    ```php
    $fruits = ["apple", "banana"];
    array_push($fruits, "orange");
    ```

31. What is the correct way to open a file in PHP for reading?
    - a) `fopen("file.txt", "r");`
    - b) `open_file("file.txt", "r");`
    - c) `read_file("file.txt", "r");`
    - d) `file_open("file.txt", "r");`

    ```php
    $file = fopen("file.txt", "r");
    ```

32. What is the purpose of the `feof()` function in PHP?
    - a) To check if the end of a file has been reached.
    - b) To read the contents of a file.
    - c) To close a file.
    - d) To write data to a file.

    ```php
    $file = fopen("file.txt", "r");
    while (!feof($file)) {
        echo fgets($file);
    }
    ```

33. What is the purpose of the `file_get_contents()` function in PHP?
    - a) To read the contents of a file into a string.
    - b) To write data to a file.
    - c) To check if a file exists.
    - d) To close a file.

    ```php
    $content = file_get_contents("file.txt");
    ```

34. What is the purpose of the `file_put_contents()` function in PHP?
    - a) To write data to a file.
    - b) To read the contents of a file into a string.
    - c) To check if a file exists.
    - d) To close a file.

    ```php
    $content = "Hello, World!";
    file_put_contents("file.txt", $content);
    ```

35. What is the purpose of the `unlink()` function in PHP?
    - a) To delete a file.
    - b) To rename a file.
    - c) To copy a file.
    - d) To move a file.

    ```php
    unlink("file.txt");
    ```

36. What is the purpose of the `mysqli_connect()` function in PHP?
    - a) To establish a connection to a MySQL database.
    - b) To execute a SQL query.
    - c) To fetch rows from a database result.
    - d) To close a database connection.

    ```php
    $connection = mysqli_connect("localhost", "username", "password", "database");
    ```

37. What is the purpose of the `mysqli_query()` function in PHP?
    - a) To execute a SQL query.
    - b) To establish a connection to a MySQL database.
    - c) To fetch rows from a database result.
    - d) To close a database connection.

    ```php
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    ```

38. What is the purpose of the `mysqli_fetch_assoc()` function in PHP?
    - a) To fetch a row from a database result as an associative array.
    - b) To execute a SQL query.
    - c) To establish a connection to a MySQL database.
    - d) To close a database connection.

    ```php
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["name"];
    }
    ```

39. What is the purpose of the `mysqli_num_rows()` function in PHP?
    - a) To get the number of rows in a database result.
    - b) To execute a SQL query.
    - c) To establish a connection to a MySQL database.
    - d) To close a database connection.

    ```php
    $numRows = mysqli_num_rows($result);
    ```

40. What is the purpose of the `mysqli_close()` function in PHP?
    - a) To close a database connection.
    - b) To execute a SQL query.
    - c) To establish a connection to a MySQL database.
    - d) To fetch rows from a database result.

    ```php
    mysqli_close($connection);
    ```

41. What is the purpose of the `htmlspecialchars()` function in PHP?
    - a) To convert special characters to HTML entities.
    - b) To sanitize user input to prevent cross-site scripting (XSS) attacks.
    - c) To remove whitespace from the beginning and end of a string.
    - d) To concatenate two strings.

    ```php
    $input = "<script>alert('XSS');</script>";
    $encoded = htmlspecialchars($input);
    ```

42. What is the purpose of the `filter_var()` function in PHP?
    - a) To validate and filter data.
    - b) To convert a string to uppercase.
    - c) To calculate the length of a string.
    - d) To check if a variable is empty.

    ```php
    $email = "example@example.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email";
    } else {
        echo "Invalid email";
    }
    ```

43. What is the purpose of the `filter_input()` function in PHP?
    - a) To retrieve external variables and filter them.
    - b) To sanitize user input to prevent SQL injection attacks.
    - c) To execute a SQL query.
    - d) To close a database connection.

    ```php
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    ```

44. What is the purpose of the `password_hash()` function in PHP?
    - a) To hash a password using a specified algorithm.
    - b) To encrypt a password using a secret key.
    - c) To validate a password against a hashed value.
    - d) To generate a random password.

    ```php
    $password = "mypassword";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    ```

45. What is the purpose of the `password_verify()` function in PHP?
    - a) To validate a password against a hashed value.
    - b) To hash a password using a specified algorithm.
    - c) To encrypt a password using a secret key.
    - d) To generate a random password.

    ```php
    $password = "mypassword";
    $hashedPassword =     "$2y$10$0Ttk0ANyEILvwus79FJHseB8emRdSbGQ/rMkw7cI37oh.V1myNpmm";
    if (password_verify($password, $hashedPassword)) {
        echo "Password is correct";
    } else {
        echo "Password is incorrect";
    }
    ```

46. What is the purpose of the `session_start()` function in PHP?
    - a) To start a new session or resume an existing session.
    - b) To retrieve session variables.
    - c) To destroy a session.
    - d) To close a database connection.

    ```php
    session_start();
    ```

47. What is the purpose of the `$_COOKIE` superglobal in PHP?
    - a) To retrieve cookie values.
    - b) To store session variables.
    - c) To access server information.
    - d) To manage file uploads.

    ```php
    $cookieValue = $_COOKIE["cookiename"];
    ```

48. What is the purpose of the `setcookie()` function in PHP?
    - a) To set a cookie.
    - b) To retrieve cookie values.
    - c) To store session variables.
    - d) To delete a cookie.

    ```php
    setcookie("cookiename", "cookievalue", time()+3600, "/");
    ```

49. What is the purpose of the `$_SERVER` superglobal in PHP?
    - a) To access server information.
    - b) To retrieve form data.
    - c) To manage file uploads.
    - d) To retrieve cookie values.

    ```php
    $serverName = $_SERVER["SERVER_NAME"];
    ```

50. What is the purpose of the `$_POST` superglobal in PHP?
    - a) To retrieve form data submitted with the POST method.
    - b) To retrieve form data submitted with the GET method.
    - c) To manage file uploads.
    - d) To access server information.

    ```php
    $username = $_POST["username"];
    ```


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://komarev.com/ghpvc/?username=drshahizan&label=Views&color=0e75b6&style=flat)
![](https://hit.yhype.me/github/profile?user_id=81284918)


