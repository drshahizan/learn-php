<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Handling errors and exceptions in PHP

In PHP, error handling and exception handling are essential for dealing with unexpected situations and errors that may occur during the execution of a script. Error handling refers to how errors and warnings are reported and logged, while exception handling provides a structured way to catch and handle exceptional situations in your code.

Here's an overview of how errors and exceptions can be handled in PHP:

1. **Error Reporting:**
   PHP provides several directives in the configuration file (`php.ini`) and runtime functions to control error reporting. The `error_reporting` directive sets the level of errors to report, and the `display_errors` directive determines whether errors are displayed on the screen or logged to a file. The `error_reporting()` function can be used to change the error reporting level at runtime.

2. **Error Types:**
   PHP defines different error types, such as notices, warnings, and fatal errors. Notices are non-critical issues, warnings indicate potential problems, and fatal errors halt script execution. The error types can be controlled using the `error_reporting` directive or the `error_reporting()` function.

3. **Error Handling Functions:**
   PHP provides a set of functions to handle errors programmatically. These functions include `set_error_handler()`, which allows you to define a custom error handler function to process errors, and `restore_error_handler()`, which restores the default error handler. The `error_get_last()` function retrieves the last error that occurred, and `error_log()` allows you to log errors to a file or another destination.

4. **Exception Handling:**
   Exceptions provide a more structured way to handle errors and exceptional situations. Exceptions are thrown using the `throw` statement and caught using `try-catch` blocks. The `try` block contains the code that may throw an exception, while `catch` blocks specify how to handle specific types of exceptions. The `catch` block can also be used without specifying a particular exception type to catch any exception that occurs. The `finally` block is optional and executes regardless of whether an exception was thrown or caught.

   Example:
   ```php
   try {
       // Code that may throw an exception
   } catch (ExceptionType1 $e) {
       // Handle exception of type ExceptionType1
   } catch (ExceptionType2 $e) {
       // Handle exception of type ExceptionType2
   } finally {
       // Optional block that always executes
   }
   ```

5. **Custom Exceptions:**
   PHP allows you to define your own custom exception classes by extending the built-in `Exception` class. This enables you to create more specific exception types tailored to your application's needs.

   Example:
   ```php
   class CustomException extends Exception {
       // Custom exception code and behavior
   }

   try {
       if ($condition) {
           throw new CustomException("Something went wrong.");
       }
   } catch (CustomException $e) {
       // Handle the custom exception
   }
   ```

6. **Logging Exceptions:**
   It's common practice to log exceptions for debugging and monitoring purposes. PHP provides the `error_log()` function, which can be used to log exceptions or other error messages to a file or syslog.

By effectively handling errors and exceptions in PHP, you can improve the robustness and reliability of your code, making it easier to identify and resolve issues that may arise during script execution.

## Code
An example that demonstrates handling errors and exceptions in PHP within a complete PHP and HTML code:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Error Handling Example</title>
</head>
<body>
    <h1>Error Handling Example</h1>

    <?php
    // Custom exception class
    class CustomException extends Exception {
        // Custom exception code and behavior
    }

    try {
        // Simulating an error
        $numerator = 10;
        $denominator = 0;
        if ($denominator === 0) {
            throw new Exception("Division by zero error.");
        }
        $result = $numerator / $denominator;
        echo "Result: $result";
    } catch (CustomException $e) {
        echo "Custom Exception: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
    } finally {
        echo "<br>Finally block executed.";
    }
    ?>

</body>
</html>
```

In this example, we have a division operation that may throw an exception if the denominator is zero. We catch the exception using `try-catch` blocks. If a `CustomException` is thrown, we handle it in the first `catch` block, and if any other `Exception` is thrown, we handle it in the second `catch` block. The `finally` block is optional and executes regardless of whether an exception was thrown or caught.

When you run this PHP script, it will display the appropriate error message based on the exception caught or the custom exception. The `finally` block will also execute and display a message indicating that it was executed.

## Case Study
An example of handling errors and exceptions in PHP within a complete PHP and HTML code for a university academic course registration system:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Course Registration System</title>
</head>
<body>
    <h1>Course Registration System</h1>

    <?php
    // Custom exception class for course registration errors
    class CourseRegistrationException extends Exception {
        // Custom exception code and behavior
    }

    try {
        // Simulating course registration
        $availableCourses = array("Math", "English", "Computer Science");
        $selectedCourse = $_POST["course"];

        if (!in_array($selectedCourse, $availableCourses)) {
            throw new CourseRegistrationException("Invalid course selection.");
        }

        // Save the registration details to the database or perform further actions
        echo "Registration successful! You have registered for $selectedCourse.";
    } catch (CourseRegistrationException $e) {
        echo "Course Registration Exception: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
    }
    ?>

    <form method="POST" action="">
        <label for="course">Select a course:</label>
        <select name="course" id="course">
            <option value="Math">Math</option>
            <option value="English">English</option>
            <option value="Computer Science">Computer Science</option>
        </select>
        <br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
```

In this example, we have a course registration system where a user can select a course from a dropdown menu and submit the registration form. We simulate the course registration process by validating the selected course against the available courses. If the selected course is not in the list of available courses, we throw a `CourseRegistrationException`. 

We handle the custom exception in the first `catch` block, displaying a specific error message. Any other generic exception is handled in the second `catch` block. 

The user interface consists of an HTML form where the user can select a course from the dropdown menu and submit the form. The selected course is sent via the `POST` method to the same PHP script for processing. Upon successful registration, a success message is displayed. Otherwise, the appropriate error message is shown.

Please note that this is a simplified example for illustrative purposes. In a real-world scenario, you would have more robust validation, database operations, and additional functionality.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
