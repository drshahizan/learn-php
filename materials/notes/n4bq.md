<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Flearn-php&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# PHP: Fundamentals

## Set B
Please answer the following 50 multiple-choice questions to test your knowledge in PHP fundamentals. You must place your answer file in the submission folder. Within the [`submission/Q4/set_b`](./submission/Q4/set_b) folder, create a folder called your `github_id`. 

1. Which of the following is a correct way to start a PHP script?
   - a) `<?php`
   - b) `<?`
   - c) `<?php start`
   - d) `<script>`

2. What is the correct way to print "Hello, World!" in PHP?
   - a) `echo "Hello, World!";`
   - b) `print("Hello, World!");`
   - c) `printf("Hello, World!");`
   - d) `console.log("Hello, World!");`

3. Which of the following variables is valid in PHP?
   - a) `$my_var`
   - b) `%myVar`
   - c) `#myVar`
   - d) `@myVar`

4. How do you concatenate two strings in PHP?
   - a) Using the `.` operator.
   - b) Using the `+` operator.
   - c) Using the `:` operator.
   - d) Using the `*` operator.

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


6. How do you comment a single line in PHP?
   - a) `// Comment`
   - b) `/* Comment */`
   - c) `# Comment`
   - d) `<!-- Comment -->`

7. Which of the following is the correct way to define a constant in PHP?
   - a) `define("MY_CONSTANT", 100);`
   - b) `MY_CONSTANT = 100;`
   - c) `const MY_CONSTANT = 100;`
   - d) `$MY_CONSTANT = 100;`

8. What is the correct syntax to include an external PHP file?
   - a) `include "file.php";`
   - b) `require_once("file.php");`
   - c) `import "file.php";`
   - d) `load "file.php";`

9. What does the `$_POST` superglobal in PHP represent?
   - a) Data sent through a GET request.
   - b) Data sent through a POST request.
   - c) Server information.
   - d) File upload information.

10. What is the correct way to check if a file exists in PHP?
    - a) `file_exists("file.txt")`
    - b) `is_file("file.txt")`
    - c) `file_exists("file.txt") && is_file("file.txt")`
    - d) `exists("file.txt")`

11. What is the purpose of the `strlen()` function in PHP?
    - a) To calculate the length of a string.
    - b) To convert a string to lowercase.
    - c) To remove whitespace from the beginning and end of a string.
    - d) To reverse a string.

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

14. What is the purpose of the `return` statement in a function?
    - a) To terminate the execution of the function and return a value.
    - b) To restart the execution of the function from the beginning.
    - c) To output a message to the browser.
    - d) To include another file in the function.

15. What is the correct way to call a function in PHP?
    - a) `myFunction();`
    - b) `$myFunction();`
    - c) `call myFunction();`
    - d) `execute myFunction();`

16. What is the purpose of the `foreach` loop in PHP?
    - a) To loop through each element in an array or object.
    - b) To repeat a block of code a specific number of times.
    - c) To conditionally execute a block of code.
    - d) To define a function.

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

18. What is the purpose of the `continue` statement in a loop?
    - a) To skip the current iteration of the loop and continue to the next iteration.
    - b) To exit the loop completely.
    - c) To restart the loop from the beginning.
    - d) To output a message to the browser.

19. What is the purpose of the `break` statement in a loop?
    - a) To exit the loop completely.
    - b) To skip the current iteration of the loop and continue to the next iteration.
    - c) To restart the loop from the beginning.
    - d) To output a message to the browser.


20. What is the purpose of the `$_GET` superglobal in PHP?
    - a) Data sent through a GET request.
    - b) Data sent through a POST request.
    - c) Server information.
    - d) File upload information.

21. What is the correct way to redirect a user to another page in PHP?
    - a) `header("Location: newpage.php");`
    - b) `redirect("newpage.php");`
    - c) `goTo("newpage.php");`
    - d) `location.href = "newpage.php";`

22. What is the purpose of the `$_SESSION` superglobal in PHP?
    - a) To store session variables.
    - b) To store cookies.
    - c) To retrieve form data.
    - d) To access server information.

23. How do you destroy a session in PHP?
    - a) `session_destroy();`
    - b) `destroy_session();`
    - c) `unset($_SESSION);`
    - d) `delete_session();`

24. What is the purpose of the `include_once` statement in PHP?
    - a) To include an external PHP file only once.
    - b) To include an external PHP file multiple times.
    - c) To execute a PHP script.
    - d) To import functions from another PHP file.

25. What is the purpose of the `require` statement in PHP?
    - a) To include an external PHP file.
    - b) To execute a PHP script.
    - c) To import functions from another PHP file.
    - d) To define a constant.

26. What is the purpose of the `is_numeric()` function in PHP?
    - a) To check if a value is a number or a numeric string.
    - b) To convert a value to a numeric data type.
    - c) To format a number as a string.
    - d) To round a number to the nearest integer.

27. What is the purpose of the `str_replace()` function in PHP?
    - a) To replace occurrences of a substring with another substring in a string.
    - b) To convert a string to uppercase.
    - c) To remove whitespace from the beginning and end of a string.
    - d) To split a string into an array.

28. What is the purpose of the `date()` function in PHP?
    - a) To format the current date and time.
    - b) To retrieve the current timestamp.
    - c) To calculate the difference between two dates.
    - d) To convert a string to a date object.

29. What is the purpose of the `count()` function in PHP?
    - a) To count the number of elements in an array.
    - b) To calculate the sum of elements in an array.
    - c) To find the average of elements in an array.
    - d) To sort elements in an array.

30. What is the purpose of the `array_push()` function in PHP?
    - a) To add one or more elements to the end of an array.
    - b) To remove the last element from an array.
    - c) To check if an element exists in an array.
    - d) To merge two or more arrays.

31. What is the correct way to open a file in PHP for reading?
    - a) `fopen("file.txt", "r");`
    - b) `open_file("file.txt", "r");`
    - c) `read_file("file.txt", "r");`
    - d) `file_open("file.txt", "r");`

32. What is the purpose of the `feof()` function in PHP?
    - a) To check if the end of a file has been reached.
    - b) To read the contents of a file.
    - c) To close a file.
    - d) To write data to a file.

33. What is the purpose of the `file_get_contents()` function in PHP?
    - a) To read the contents of a file into a string.
    - b) To write data to a file.
    - c) To check if a file exists.
    - d) To close a file.

34. What is the purpose of the `file_put_contents()` function in PHP?
    - a) To write data to a file.
    - b) To read the contents of a file into a string.
    - c) To check if a file exists.
    - d) To close a file.

35. What is the purpose of the `unlink()` function in PHP?
    - a) To delete a file.
    - b) To rename a file.
    - c) To copy a file.
    - d) To move a file.

36. What is the purpose of the `mysqli_connect()` function in PHP?
    - a) To establish a connection to a MySQL database.
    - b) To execute a SQL query.
    - c) To fetch rows from a database result.
    - d) To close a database connection.

37. What is the purpose of the `mysqli_query()` function in PHP?
    - a) To execute a SQL query.
    - b) To establish a connection to a MySQL database.
    - c) To fetch rows from a database result.
    - d) To close a database connection.

38. What is the purpose of the `mysqli_fetch_assoc()` function in PHP?
    - a) To fetch a row from a database result as an associative array.
    - b) To execute a SQL query.
    - c) To establish a connection to a MySQL database.
    - d) To close a database connection.

39. What is the purpose of the `mysqli_num_rows()` function in PHP?
    - a) To get the number of rows in a database result.
    - b) To execute a SQL query.
    - c) To establish a connection to a MySQL database.
    - d) To close a database connection.

40. What is the purpose of the `mysqli_close()` function in PHP?
    - a) To close a database connection.
    - b) To execute a SQL query.
    - c) To establish a connection to a MySQL database.
    - d) To fetch rows from a database result.

41. What is the purpose of the `htmlspecialchars()` function in PHP?
    - a) To convert special characters to HTML entities.
    - b) To sanitize user input to prevent cross-site scripting (XSS) attacks.
    - c) To remove whitespace from the beginning and end of a string.
    - d) To concatenate two strings.

42. What is the purpose of the `filter_var()` function in PHP?
    - a) To validate and filter data.
    - b) To convert a string to uppercase.
    - c) To calculate the length of a string.
    - d) To check if a variable is empty.

43. What is the purpose of the `filter_input()` function in PHP?
    - a) To retrieve external variables and filter them.
    - b) To sanitize user input to prevent SQL injection attacks.
    - c) To execute a SQL query.
    - d) To close a database connection.

44. What is the purpose of the `password_hash()` function in PHP?
    - a) To hash a password using a specified algorithm.
    - b) To encrypt a password using a secret key.
    - c) To validate a password against a hashed value.
    - d) To generate a random password.

45. What is the purpose of the `password_verify()` function in PHP?
    - a) To validate a password against a hashed value.
    - b) To hash a password using a specified algorithm.
    - c) To encrypt a password using a secret key.
    - d) To generate a random password.

46. What is the purpose of the `session_start()` function in PHP?
    - a) To start a new session or resume an existing session.
    - b) To retrieve session variables.
    - c) To destroy a session.
    - d) To close a database connection.

47. What is the purpose of the `$_COOKIE` superglobal in PHP?
    - a) To retrieve cookie values.
    - b) To store session variables.
    - c) To access server information.
    - d) To manage file uploads.

48. What is the purpose of the `setcookie()` function in PHP?
    - a) To set a cookie.
    - b) To retrieve cookie values.
    - c) To store session variables.
    - d) To delete a cookie.

49. What is the purpose of the `$_SERVER` superglobal in PHP?
    - a) To access server information.
    - b) To retrieve form data.
    - c) To manage file uploads.
    - d) To retrieve cookie values.

50. What is the purpose of the `$_POST` superglobal in PHP?
    - a) To retrieve form data submitted with the POST method.
    - b) To retrieve form data submitted with the GET method.
    - c) To manage file uploads.
    - d) To access server information.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)


