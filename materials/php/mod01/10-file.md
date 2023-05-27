<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Working with files and directories
Working with files and directories is a common task in PHP. PHP provides a variety of built-in functions and features to handle file operations. Here are some commonly used functions and techniques for working with files and directories in PHP:

1. **File Operations:**

- **Opening and Reading Files:**
  - `fopen($filename, $mode)`: Opens a file in the specified mode (e.g., read, write, append).
  - `fgets($fileHandle)`: Reads a line from an open file.
  - `file_get_contents($filename)`: Reads the entire contents of a file into a string.

- **Writing to Files:**
  - `fwrite($fileHandle, $data)`: Writes data to an open file.
  - `file_put_contents($filename, $data)`: Writes data to a file (overwriting existing content).

- **Closing Files:**
  - `fclose($fileHandle)`: Closes an open file.

- **Checking File Existence:**
  - `file_exists($filename)`: Checks if a file exists.
  - `is_file($filename)`: Checks if a path is a regular file.

- **Deleting Files:**
  - `unlink($filename)`: Deletes a file.

2. **Directory Operations:**

- **Creating Directories:**
  - `mkdir($dirname)`: Creates a new directory.

- **Listing Directory Contents:**
  - `scandir($dirname)`: Retrieves the list of files and directories in a directory.
  - `glob($pattern)`: Returns an array of files/directories that match a specific pattern.

- **Deleting Directories:**
  - `rmdir($dirname)`: Removes an empty directory.
  - `unlink($filename)`: Deletes a file.

- **Recursive Operations:**
  - `recursive_directory_iterator()`: Iterates through directories and subdirectories recursively.
  - `recursiveIteratorIterator()`: Iterates through a recursive iterator.

- **File Information:**
  - `filetype($filename)`: Returns the file type (file, directory, symlink, etc.).
  - `filesize($filename)`: Returns the size of a file.

These are just a few examples of the functions available in PHP for working with files and directories. PHP also offers functions for renaming files, copying files, changing file permissions, and more. It's important to handle file operations with care and validate user input to ensure security and prevent unauthorized access or data loss.

## Code
An example of working with files and directories in PHP, along with complete PHP and HTML code:

```php
<!DOCTYPE html>
<html>
<head>
    <title>File and Directory Operations</title>
</head>
<body>
    <?php
    // Create a directory
    $dirName = 'my_directory';
    if (!is_dir($dirName)) {
        mkdir($dirName);
        echo "Directory '$dirName' created successfully.<br>";
    } else {
        echo "Directory '$dirName' already exists.<br>";
    }

    // Create a file
    $fileName = $dirName . '/my_file.txt';
    $fileContent = "This is the content of my file.";
    file_put_contents($fileName, $fileContent);
    echo "File '$fileName' created successfully.<br>";

    // Read file content
    $readContent = file_get_contents($fileName);
    echo "File content: $readContent<br>";

    // List directory contents
    $dirContents = scandir($dirName);
    echo "Directory contents:<br>";
    echo "<ul>";
    foreach ($dirContents as $item) {
        if ($item !== '.' && $item !== '..') {
            echo "<li>$item</li>";
        }
    }
    echo "</ul>";

    // Delete the file
    unlink($fileName);
    echo "File '$fileName' deleted successfully.<br>";

    // Delete the directory
    rmdir($dirName);
    echo "Directory '$dirName' deleted successfully.<br>";
    ?>
</body>
</html>
```

In this example, we perform file and directory operations using PHP functions. Here's a breakdown of the code:

1. We first check if the directory 'my_directory' exists using `is_dir()`. If it doesn't exist, we create the directory using `mkdir()`. We display a message indicating whether the directory was created or if it already exists.

2. We create a file 'my_file.txt' inside the 'my_directory' directory using `file_put_contents()`. The content of the file is set to "This is the content of my file.".

3. We read the content of the file using `file_get_contents()` and display it on the webpage.

4. We list the contents of the 'my_directory' directory using `scandir()`. We exclude the current directory (.) and the parent directory (..) from the listing.

5. We delete the file using `unlink()` and display a message indicating that the file was deleted.

6. Finally, we delete the directory using `rmdir()` and display a message indicating that the directory was deleted.

When you run this code, it will create a directory, create a file inside it, read the file's content, display the directory contents, delete the file, and delete the directory. Each step is accompanied by an appropriate message displayed on the webpage.

## Case Study
An example of working with files and directories in PHP for a university academic course registration system, along with complete PHP and HTML code:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Course Registration System</title>
</head>
<body>
    <?php
    // Function to save registration data to a file
    function saveRegistrationToFile($studentName, $courseName) {
        $fileName = 'registrations.txt';
        $data = "$studentName,$courseName\n";
        file_put_contents($fileName, $data, FILE_APPEND);
    }

    // Function to retrieve registration data from a file
    function getRegistrationsFromFile() {
        $fileName = 'registrations.txt';
        $registrations = [];

        if (file_exists($fileName)) {
            $fileContents = file($fileName, FILE_IGNORE_NEW_LINES);
            foreach ($fileContents as $line) {
                $data = explode(',', $line);
                $studentName = $data[0];
                $courseName = $data[1];
                $registrations[] = [$studentName, $courseName];
            }
        }

        return $registrations;
    }

    // Handle form submission
    if (isset($_POST['submit'])) {
        $studentName = $_POST['student'];
        $courseName = $_POST['course'];

        // Save registration to file
        saveRegistrationToFile($studentName, $courseName);
    }

    // Retrieve registrations from file
    $registrations = getRegistrationsFromFile();
    ?>

    <h1>Course Registration System</h1>

    <h2>Register for a Course</h2>
    <form method="post" action="">
        <label for="student">Student Name:</label>
        <input type="text" name="student" id="student" required><br>

        <label for="course">Course Name:</label>
        <input type="text" name="course" id="course" required><br>

        <input type="submit" name="submit" value="Register">
    </form>

    <h2>Registered Students</h2>
    <?php if (count($registrations) > 0) : ?>
        <ul>
            <?php foreach ($registrations as $registration) : ?>
                <li><?php echo $registration[0] ?> - <?php echo $registration[1] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>No registrations found.</p>
    <?php endif; ?>
</body>
</html>
```

In this example, we have a university academic course registration system. Here's a breakdown of the code:

1. We define two functions: `saveRegistrationToFile()` and `getRegistrationsFromFile()`. The `saveRegistrationToFile()` function takes the student name and course name as parameters and appends the data to a file named 'registrations.txt'. The `getRegistrationsFromFile()` function reads the data from the file and returns an array of registrations.

2. When the form is submitted (`$_POST['submit']` is set), we retrieve the student name and course name from the form inputs and call the `saveRegistrationToFile()` function to save the registration data to the file.

3. We retrieve the registrations from the file using the `getRegistrationsFromFile()` function and store them in the `$registrations` variable.

4. The HTML section of the code displays a form where students can register for a course. The form data is submitted to the same page using the `POST` method. Registered students are listed below the form.

5. If there are registrations (`count($registrations) > 0

`), the registered students are displayed in an unordered list. Otherwise, a message indicating no registrations are found is displayed.

When you run this code, it will display a form where students can register for a course. The registration data will be saved to the 'registrations.txt' file, and the registered students will be displayed below the form. Each time a student registers, their name and the course they registered for will be appended to the file.
## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
