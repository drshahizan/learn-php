<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# PHP: MySQL and CRUD
## Set A
Please answer the following 50 multiple-choice questions to test your knowledge in MySQL and CRUD. You must place your answer file in the submission folder. Within the [`submission/Q5/set_a`](./submission/Q5/set_a) folder, create a folder called your `github_id`. 

1. Which of the following is a popular open-source relational database management system?
   - a) MySQL
   - b) MongoDB
   - c) Oracle
   - d) SQLite

2. How do you establish a connection to a MySQL database in PHP?
   - a) `mysqli_connect()`
   - b) `mysql_connect()`
   - c) `pdo_connect()`
   - d) `db_connect()`

3. Which PHP function is used to execute an SQL query?
   - a) `mysql_query()`
   - b) `mysqli_query()`
   - c) `pdo_query()`
   - d) `db_query()`

4. What does SQL stand for?
   - a) Structured Query Language
   - b) Sequential Query Language
   - c) Specific Query Language
   - d) Structured Question Language

5. How do you fetch a single row of data from a MySQL query result in PHP?
   - a) `mysqli_fetch_row()`
   - b) `mysqli_fetch_array()`
   - c) `mysqli_fetch_assoc()`
   - d) `mysqli_fetch_object()`

6. Which PHP function is used to retrieve the number of rows returned by a MySQL query?
   - a) `mysql_num_rows()`
   - b) `mysqli_num_rows()`
   - c) `pdo_num_rows()`
   - d) `db_num_rows()`

7. How do you escape special characters in a string before inserting it into a MySQL database?
   - a) `mysql_escape_string()`
   - b) `mysqli_escape_string()`
   - c) `pdo_escape_string()`
   - d) `db_escape_string()`

8. Which SQL statement is used to insert data into a MySQL database?
   - a) `INSERT INTO`
   - b) `UPDATE`
   - c) `SELECT`
   - d) `DELETE FROM`

9. How do you retrieve the ID of the last inserted row in a MySQL database using PHP?
   - a) `mysql_insert_id()`
   - b) `mysqli_insert_id()`
   - c) `pdo_insert_id()`
   - d) `db_insert_id()`

10. What is the result of the following PHP code?
    ```php
    $conn = mysqli_connect("localhost", "username", "password", "database");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ```
    - a) Establishes a connection to the MySQL database
    - b) Prints "Connection failed" if the connection is unsuccessful
    - c) Terminates the script execution if the connection fails
    - d) All of the above

11. Which PHP function is used to close a connection to a MySQL database?
    - a) `mysql_close()`
    - b) `mysqli_close()`
    - c) `pdo_close()`
    - d) `db_close()`

12. What does the `mysqli_fetch_array()` function return in PHP?
    - a) An associative array
    - b) A numeric array
    - c) Both associative and numeric arrays
    - d) A single value

13. How do you execute a prepared statement with placeholders in PHP using MySQLi?
    - a) `mysqli_prepare()`
    - b) `mysqli_execute()`
    - c) `mysqli_bind_param()`
    - d) `mysqli_stmt_execute()`

14. Which PHP function is used to handle errors during MySQL database operations?
    - a) `mysql_error()`
    - b) `mysqli_error()`
    - c) `pdo_error()`
    - d) `db_error()`

15. How do you retrieve the number of affected rows after an `UPDATE` or `DELETE` query in MySQLi?
    - a) `$mysqli->affected_rows`
    - b) `mysqli_affected_rows()`
    - c) `$pdo->affected_rows`
    - d) `db_affected_rows()`

16. Which PHP function is used to handle transactions in MySQL databases?
    - a) `mysql_transaction()`
    - b) `mysqli_transaction()`
    - c) `pdo_transaction()`
    - d) `db_transaction()`

17. How do you retrieve the auto-incremented ID of the last inserted row in PDO?
    - a) `$pdo->lastInsertId()`
    - b) `pdo_last_insert_id()`
    - c) `$pdo->insertId()`
    - d) `pdo_insert_id()`

18. Which SQL statement is used to update data in a MySQL database?
    - a) `UPDATE`
    - b) `INSERT INTO`
    - c) `SELECT`
    - d) `DELETE FROM`

19. How do you prevent SQL injection in PHP when working with MySQL databases?
    - a) Sanitize user input using filter functions
    - b) Use prepared statements with placeholders
    - c) Escape special characters in SQL queries
    - d) All of the above

20. What does the SQL statement `SELECT * FROM users WHERE age > 25` do?
    - a) Retrieves all users with an age greater than 25
    - b) Retrieves all users with an age less than 25
    - c) Retrieves all users from the "age" table
    - d) Retrieves all columns from the "users" table

21. How do you retrieve the number of rows returned by a PDO query?
    - a) `$pdo->rowCount()`
    - b) `pdo_num_rows()`
    - c) `count($pdo)`
    - d) `count($pdo->fetchAll())`

22. What is the result of the following code?
    ```php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    echo $count;
    ```
    - a) Prints the number of rows in the "users" table
    - b) Prints the number of columns in the "users" table
    - c) Prints the result of the query
    - d) Error

23. Which PHP function is used to fetch the next row from a MySQL query result?
    - a) `mysql_fetch_row()`
    - b) `mysqli_fetch_row()`
    - c) `pdo_fetch_row()`
    - d) `db_fetch_row()`

24. How do you retrieve the value of a specific column from a MySQL query result in PHP?
    - a) By specifying the column name in the fetch function
    - b) By accessing the column index in the fetch function
    - c) By using the `mysql_result()` function
    - d) By using the `mysqli_result()` function

25. Which PHP function is used to free the memory associated with a MySQL query result?
    - a) `mysql_free_result()`
    - b) `mysqli_free_result()`
    - c) `pdo_free_result()`
    - d) `db_free_result()`

26. How do you retrieve the number of fields (columns) in a MySQL query result in PHP?
    - a) `$result->num_fields()`
    - b) `mysqli_num_fields($result)`
    - c) `$result->field_count()`
    - d) `count($result)`

27. Which SQL statement is used to delete data from a MySQL database?
    - a) `DELETE FROM`
    - b) `UPDATE`
    - c) `INSERT INTO`
    - d) `SELECT`

28. How do you retrieve the value of a specific field (column) from a MySQL query result in PHP?
    - a) By specifying the field name in the fetch function
    - b) By accessing the field index in the fetch function
    - c) By using the `mysql_field_result()` function
    - d) By using the `mysqli_field_result()` function

29. What is the result of the following code?
    ```php
    $sql = "SELECT COUNT(*) FROM users";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_fetch_array($result)[0];
    echo $count;
    ```
    - a) Prints the number of rows in the "users" table
    - b) Prints the number of columns in the "users" table
    - c) Prints the result of the query
    - d) Error

30. How do you retrieve the error message from a failed MySQL query in PHP?
    - a) `$conn->error`
    - b) `mysqli_error()`
    - c) `$pdo->error`
    - d) `db_error()`

31. Which PHP function is used to fetch all rows from a MySQL query result at once?
    - a) `mysql_fetch_all()`
    - b) `mysqli_fetch_all()`
    - c) `pdo_fetch_all()`
    - d) `db_fetch_all()`

32. How do you retrieve the current auto-increment value for a table in MySQL using PHP?
    - a) `SHOW AUTO_INCREMENT FROM table`
    - b) `SELECT AUTO_INCREMENT FROM table`
    - c) `AUTO_INCREMENT()`
    - d) `mysql_auto_increment()`

33. Which PHP function is used to escape special characters in a string before inserting it into a MySQL database?
    - a) `mysql_escape_string()`
    - b) `mysqli_escape_string()`
    - c) `pdo_escape_string()`
    - d) `db_escape_string()`

34. How do you retrieve the number of affected rows after an `INSERT` query in MySQLi?
    - a) `$mysqli->affected_rows`
    - b) `mysqli_affected_rows()`
    - c) `$pdo->affected_rows`
    - d) `db_affected_rows()`

35. What is the result of the following code?
    ```php
    $sql = "SELECT * FROM users WHERE id = '1'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['name'];
    ```
    - a) Prints the name of the user with ID 1
    - b) Prints the name of the first user in the table
    - c) Prints the ID of the user with name '1'
    - d) Error

36. How do you retrieve the number of rows affected by an `UPDATE` or `DELETE` query in PDO?
    - a) `$pdo->rowCount()`
    - b) `pdo_num_rows()`
    - c) `count($pdo)`
    - d) `count($pdo->fetchAll())`

37. Which PHP function is used to handle transactions in PDO?
    - a) `$pdo->transaction()`
    - b) `pdo_transaction()`
    - c) `$pdo->beginTransaction()`
    - d) `pdo_begin_transaction()`

38. How do you retrieve the auto-incremented ID of the last inserted row in MySQLi?
    - a) `$mysqli->insert_id`
    - b) `mysqli_insert_id()`
    - c) `$mysqli->lastInsertId()`
    - d) `mysqli_last_insert_id()`

39. What is the result of the following code?
    ```php
    $sql = "INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com')";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        echo "User inserted successfully.";
    } else {
        echo "Error inserting user.";
    }
    ```
    - a) Prints "User inserted successfully" if the query is successful
    - b) Prints "Error inserting user" if the query fails
    - c) Prints nothing
    - d) Error

40. How do you retrieve the number of fields (columns) in a MySQL query result in PDO?
    - a) `$result->columnCount()`
    - b) `pdo_num_fields()`
    - c) `count($result)`
    - d) `count($result->fetch())`

41. Which PHP function is used to fetch the next row from a MySQL query result in PDO?
    - a) `$result->nextRow()`
    - b) `pdo_fetch_row()`
    - c) `$result->fetch()`
    - d) `pdo_next_row()`

42. What is the result of the following code?
    ```php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_fields($result);
    echo $count;
    ```
    - a) Prints the number of fields (columns) in the "users" table
    - b) Prints the number of rows in the "users" table
    - c) Prints the result of the query
    - d) Error

43. How do you retrieve the value of a specific column from a MySQL query result in PDO?
    - a) By specifying the column name in the fetch function
    - b) By accessing the column index in the fetch function
    - c) By using the `pdo_result()` function
    - d) By using the `pdo_fetch_column()` function

44. Which PHP function is used to free the memory associated with a MySQL query result in PDO?
    - a) `$result->free()`
    - b) `pdo_free_result()`
    - c) `$result->close()`
    - d) `pdo_free_memory()`

45. How do you retrieve the number of rows returned by a MySQL query in PDO?
    - a) `$result->rowCount()`
    - b) `pdo_num_rows()`
    - c) `count($result)`
    - d) `count($result->fetch())`

46. What is the result of the following code?
    ```php
    $sql = "SELECT * FROM users WHERE age > 25";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    echo $count;
    ```
    - a) Prints the number of users with an age greater than 25
    - b) Prints the number of users with an age less than 25
    - c) Prints the result of the query
    - d) Error

47. How do you retrieve the error message from a failed MySQL query in PDO?
    - a) `$pdo->errorInfo()`
    - b) `pdo_error()`
    - c) `$pdo->errorMessage()`
    - d) `pdo_error_message()`

48. Which PHP function is used to fetch all rows from a MySQL query result at once in PDO?
    - a) `$result->fetchAll()`
    - b) `pdo_fetch_all()`
    - c) `$result->getAll()`
    - d) `pdo_get_all()`

49. How do you retrieve the current auto-increment value for a table in MySQL using PHP and MySQLi?
    - a) `SHOW AUTO_INCREMENT FROM table`
    - b) `SELECT AUTO_INCREMENT FROM table`
    - c) `AUTO_INCREMENT()`
    - d) `mysqli_auto_increment()`

50. What is the result of the following code?
    ```php
    $sql = "DELETE FROM users WHERE id = 1";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user.";
    }
    ```
    - a) Prints "User deleted successfully" if the query is successful
    - b) Prints "Error deleting user" if the query fails
    - c) Prints nothing
    - d) Error

## Set B
Please answer the following 50 multiple-choice questions to test your knowledge in MySQL and CRUD. You must place your answer file in the submission folder. Within the [`submission/Q5/set_b`](./submission/Q5/set_b) folder, create a folder called your `github_id`. 

1. What does CRUD stand for in the context of database operations?
    - a) Create, Read, Update, Delete
    - b) Copy, Rename, Update, Drop
    - c) Create, Remove, Upload, Delete
    - d) Control, Retrieve, Update, Destroy

```php
// Code for question 1
// Create a new record
INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com');
```

2. Which PHP extension is commonly used to interact with MySQL databases?
    - a) MySQLi
    - b) PDO
    - c) SQLi
    - d) MySQLx

```php
// Code for question 2
// Create a new PDO connection to a MySQL database
$pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');
```

3. What is the purpose of the `mysqli_connect()` function in PHP?
    - a) To establish a connection to a MySQL database
    - b) To execute a SQL query
    - c) To fetch rows from a database result
    - d) To close a database connection

```php
// Code for question 3
// Establish a connection to a MySQL database using mysqli_connect()
$connection = mysqli_connect('localhost', 'username', 'password', 'database');
```

4. Which PHP function is used to execute a SQL query in MySQL?
    - a) `mysqli_query()`
    - b) `mysqli_fetch_assoc()`
    - c) `mysqli_connect()`
    - d) `mysqli_num_rows()`

```php
// Code for question 4
// Execute a SQL query using mysqli_query()
$query = 'SELECT * FROM users';
$result = mysqli_query($connection, $query);
```

5. What is the purpose of the `mysqli_fetch_assoc()` function in PHP?
    - a) To fetch a row from a database result as an associative array
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To get the number of rows in a database result

```php
// Code for question 5
// Fetch a row from a database result as an associative array using mysqli_fetch_assoc()
$row = mysqli_fetch_assoc($result);
```

6. How can you retrieve the number of rows returned by a SELECT query in MySQL using PHP?
    - a) Using `mysqli_num_rows()`
    - b) Using `mysqli_query()`
    - c) Using `mysqli_fetch_assoc()`
    - d) Using `mysqli_connect()`

```php
// Code for question 6
// Get the number of rows returned by a SELECT query using mysqli_num_rows()
$numRows = mysqli_num_rows($result);
```

7. What is the purpose of the `mysqli_insert_id()` function in PHP?
    - a) To retrieve the ID generated by the previous INSERT query
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To get the number of rows affected by a query

```php
// Code for question 7
// Retrieve the ID generated by the previous INSERT query using mysqli_insert_id()
$insertId = mysqli_insert_id($connection);
```

8. Which SQL statement is used to update data in a MySQL table?
    - a) UPDATE
    - b) INSERT
    - c) SELECT
    - d) DELETE

```php
// Code for question 8
// Update data in a MySQL table using the UPDATE statement


$query = "UPDATE users SET name = 'Jane Doe' WHERE id = 1";
mysqli_query($connection, $query);
```

9. Which SQL statement is used to delete data from a MySQL table?
    - a) DELETE
    - b) INSERT
    - c) UPDATE
    - d) SELECT

```php
// Code for question 9
// Delete data from a MySQL table using the DELETE statement
$query = "DELETE FROM users WHERE id = 1";
mysqli_query($connection, $query);
```

10. What is the purpose of the `mysqli_affected_rows()` function in PHP?
    - a) To get the number of rows affected by a query
    - b) To execute a SQL query
    - c) To fetch a row from a database result as an associative array
    - d) To establish a connection to a MySQL database

```php
// Code for question 10
// Get the number of rows affected by a query using mysqli_affected_rows()
$affectedRows = mysqli_affected_rows($connection);
```

11. Which PHP function is used to escape special characters in a string to prevent SQL injection?
    - a) `mysqli_real_escape_string()`
    - b) `mysqli_query()`
    - c) `mysqli_fetch_assoc()`
    - d) `mysqli_connect()`

```php
// Code for question 11
// Escape special characters in a string using mysqli_real_escape_string()
$name = mysqli_real_escape_string($connection, "John O'Reilly");
```

12. How can you retrieve the error message associated with a MySQL query in PHP?
    - a) Using `mysqli_error()`
    - b) Using `mysqli_query()`
    - c) Using `mysqli_fetch_assoc()`
    - d) Using `mysqli_connect()`

```php
// Code for question 12
// Retrieve the error message associated with a MySQL query using mysqli_error()
$query = "SELECT * FROM non_existent_table";
$result = mysqli_query($connection, $query);
if (!$result) {
    $errorMessage = mysqli_error($connection);
    echo "Query error: " . $errorMessage;
}
```

13. What is the purpose of the `mysqli_close()` function in PHP?
    - a) To close a database connection
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 13
// Close a database connection using mysqli_close()
mysqli_close($connection);
```

14. Which PHP function is used to check if a MySQL table exists?
    - a) `mysqli_num_rows()`
    - b) `mysqli_query()`
    - c) `mysqli_fetch_assoc()`
    - d) `mysqli_table_exists()`

```php
// Code for question 14
// Check if a MySQL table exists using mysqli_num_rows()
$query = "SELECT 1 FROM users LIMIT 1";
$result = mysqli_query($connection, $query);
if ($result && mysqli_num_rows($result) > 0) {
    echo "Table exists";
} else {
    echo "Table does not exist";
}
```

15. How can you retrieve the number of affected rows by an UPDATE or DELETE query in MySQL using PHP?
    - a) Using `mysqli_affected_rows()`
    - b) Using `mysqli_num_rows()`
    - c) Using `mysqli_insert_id()`
    - d) Using `mysqli_error()`

```php
// Code for question 15
// Get the number of affected rows by an UPDATE or DELETE query using mysqli_affected_rows()
$

affectedRows = mysqli_affected_rows($connection);
```

16. Which PHP function is used to handle transactions in MySQL?
    - a) `mysqli_begin_transaction()`
    - b) `mysqli_commit()`
    - c) `mysqli_rollback()`
    - d) All of the above

```php
// Code for question 16
// Start a transaction using mysqli_begin_transaction()
mysqli_begin_transaction($connection);
```

17. What is the purpose of the `mysqli_commit()` function in PHP?
    - a) To commit a transaction
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 17
// Commit a transaction using mysqli_commit()
mysqli_commit($connection);
```

18. What is the purpose of the `mysqli_rollback()` function in PHP?
    - a) To rollback a transaction
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 18
// Rollback a transaction using mysqli_rollback()
mysqli_rollback($connection);
```

19. Which PHP function is used to get the last error message from a MySQL connection?
    - a) `mysqli_error()`
    - b) `mysqli_errno()`
    - c) `mysqli_connect_error()`
    - d) `mysqli_connect_errno()`

```php
// Code for question 19
// Get the last error message from a MySQL connection using mysqli_error()
$errorMessage = mysqli_error($connection);
```

20. What is the purpose of prepared statements in PHP when working with MySQL?
    - a) To prevent SQL injection and improve performance
    - b) To execute a SQL query
    - c) To fetch rows from a database result
    - d) To establish a connection to a MySQL database

```php
// Code for question 20
// Use prepared statements to prevent SQL injection and improve performance
$query = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, 'i', $userId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
```

21. Which PHP function is used to bind parameters to a prepared statement in MySQL?
    - a) `mysqli_stmt_bind_param()`
    - b) `mysqli_stmt_execute()`
    - c) `mysqli_stmt_get_result()`
    - d) `mysqli_stmt_fetch()`

```php
// Code for question 21
// Bind parameters to a prepared statement using mysqli_stmt_bind_param()
mysqli_stmt_bind_param($stmt, 'i', $userId);
```

22. What is the purpose of the `mysqli_stmt_execute()` function in PHP when working with prepared statements?
    - a) To execute a prepared statement
    - b) To bind parameters to a prepared statement
    - c) To get the result set of a prepared statement
    - d) To fetch rows from a prepared statement result

```php
// Code for question 22
// Execute a prepared statement using mysqli_stmt_execute()
mysqli_stmt_execute($stmt);
```

23. What is the purpose of the `mysqli_stmt_get_result()` function in PHP when working with prepared statements?
    - a) To get the result set of a prepared statement
    - b) To execute a prepared statement
    - c) To bind parameters to a prepared statement
    - d) To fetch rows from a prepared statement result

```php
// Code for question 23


// Get the result set of a prepared statement using mysqli_stmt_get_result()
$result = mysqli_stmt_get_result($stmt);
```

24. How can you retrieve the rows returned by a prepared statement in PHP when working with MySQL?
    - a) Using `mysqli_stmt_get_result()`
    - b) Using `mysqli_stmt_fetch()`
    - c) Using `mysqli_stmt_execute()`
    - d) Using `mysqli_stmt_bind_param()`

```php
// Code for question 24
// Retrieve the rows returned by a prepared statement using mysqli_stmt_get_result()
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    // Process each row
}
```

25. Which PHP function is used to fetch a row from a prepared statement result in MySQL?
    - a) `mysqli_stmt_fetch()`
    - b) `mysqli_stmt_get_result()`
    - c) `mysqli_stmt_execute()`
    - d) `mysqli_stmt_bind_param()`

```php
// Code for question 25
// Fetch a row from a prepared statement result using mysqli_stmt_fetch()
mysqli_stmt_fetch($stmt);
```

26. What is the purpose of the `mysqli_stmt_close()` function in PHP?
    - a) To close a prepared statement
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 26
// Close a prepared statement using mysqli_stmt_close()
mysqli_stmt_close($stmt);
```

27. Which PHP function is used to handle errors when working with MySQL in PHP?
    - a) `mysqli_error()`
    - b) `mysqli_errno()`
    - c) `mysqli_connect_error()`
    - d) `mysqli_connect_errno()`

```php
// Code for question 27
// Handle errors when working with MySQL using mysqli_error() and mysqli_errno()
if (!$connection) {
    $errorMessage = mysqli_error($connection);
    $errorCode = mysqli_errno($connection);
    echo "Connection error ($errorCode): $errorMessage";
}
```

28. What is the purpose of the `mysqli_fetch_row()` function in PHP?
    - a) To fetch a row from a database result as an enumerated array
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To get the number of rows in a database result

```php
// Code for question 28
// Fetch a row from a database result as an enumerated array using mysqli_fetch_row()
$row = mysqli_fetch_row($result);
```

29. What is the purpose of the `mysqli_fetch_array()` function in PHP?
    - a) To fetch a row from a database result as an array (both associative and enumerated)
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To get the number of rows in a database result

```php
// Code for question 29
// Fetch a row from a database result as an array using mysqli_fetch_array()
$row = mysqli_fetch_array($result);
```

30. What is the purpose of the `mysqli_fetch_object()` function in PHP?
    - a) To fetch a row from a database result as an object
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To get the number of rows in a database result

```php
// Code for question 30
// Fetch a row from a database result as an object using mysqli_fetch_object()
$row = mysqli_fetch

_object($result);
```

31. Which PHP function is used to retrieve the number of rows returned by a SELECT query in MySQL?
    - a) `mysqli_num_rows()`
    - b) `mysqli_query()`
    - c) `mysqli_fetch_assoc()`
    - d) `mysqli_connect()`

```php
// Code for question 31
// Get the number of rows returned by a SELECT query using mysqli_num_rows()
$numRows = mysqli_num_rows($result);
```

32. What is the purpose of the `mysqli_data_seek()` function in PHP?
    - a) To move the internal result pointer to a specified row number
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 32
// Move the internal result pointer to a specified row number using mysqli_data_seek()
mysqli_data_seek($result, 3); // Move to the 4th row
```

33. What is the purpose of the `mysqli_field_count()` function in PHP?
    - a) To retrieve the number of fields in a result set
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 33
// Retrieve the number of fields in a result set using mysqli_field_count()
$fieldCount = mysqli_field_count($connection);
```

34. Which PHP function is used to retrieve the metadata of a field in a result set in MySQL?
    - a) `mysqli_fetch_field()`
    - b) `mysqli_field_count()`
    - c) `mysqli_num_rows()`
    - d) `mysqli_data_seek()`

```php
// Code for question 34
// Retrieve the metadata of a field in a result set using mysqli_fetch_field()
$field = mysqli_fetch_field($result);
```

35. What is the purpose of the `mysqli_free_result()` function in PHP?
    - a) To free the memory associated with a result set
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 35
// Free the memory associated with a result set using mysqli_free_result()
mysqli_free_result($result);
```

36. Which PHP function is used to retrieve the auto-generated ID of the last inserted row in MySQL?
    - a) `mysqli_insert_id()`
    - b) `mysqli_num_rows()`
    - c) `mysqli_fetch_assoc()`
    - d) `mysqli_connect()`

```php
// Code for question 36
// Retrieve the auto-generated ID of the last inserted row using mysqli_insert_id()
$insertId = mysqli_insert_id($connection);
```

37. What is the purpose of the `mysqli_real_escape_string()` function in PHP when working with MySQL?
    - a) To escape special characters in a string to prevent SQL injection
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 37
// Escape special characters in a string using mysqli_real_escape_string()
$name = mysqli_real_escape_string($connection, "John O'Reilly");
```

38. How can you check if a MySQL query executed successfully in PHP?
    - a) By checking the return value of `mysqli_query()`
    - b) By checking the return value of `mysqli_fetch_assoc

()`
    - c) By checking the return value of `mysqli_connect()`
    - d) By checking the return value of `mysqli_num_rows()`

```php
// Code for question 38
// Check if a MySQL query executed successfully by checking the return value of mysqli_query()
$result = mysqli_query($connection, $query);
if ($result) {
    echo "Query executed successfully";
} else {
    echo "Query execution failed";
}
```

39. What is the purpose of the `mysqli_num_rows()` function in PHP?
    - a) To retrieve the number of rows in a result set
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 39
// Retrieve the number of rows in a result set using mysqli_num_rows()
$numRows = mysqli_num_rows($result);
```

40. Which PHP function is used to retrieve the current row of a result set in MySQL?
    - a) `mysqli_fetch_row()`
    - b) `mysqli_fetch_array()`
    - c) `mysqli_fetch_object()`
    - d) `mysqli_fetch_assoc()`

```php
// Code for question 40
// Retrieve the current row of a result set using mysqli_fetch_assoc()
$row = mysqli_fetch_assoc($result);
```

41. What is the purpose of the `mysqli_fetch_field()` function in PHP when working with MySQL?
    - a) To retrieve the metadata of a field in a result set
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 41
// Retrieve the metadata of a field in a result set using mysqli_fetch_field()
$field = mysqli_fetch_field($result);
```

42. How can you retrieve the number of fields in a result set in PHP when working with MySQL?
    - a) Using `mysqli_field_count()`
    - b) Using `mysqli_num_rows()`
    - c) Using `mysqli_data_seek()`
    - d) Using `mysqli_fetch_field()`

```php
// Code for question 42
// Retrieve the number of fields in a result set using mysqli_field_count()
$fieldCount = mysqli_field_count($connection);
```

43. What is the purpose of the `mysqli_fetch_all()` function in PHP?
    - a) To fetch all rows from a result set as an array
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To get the number of rows in a result set

```php
// Code for question 43
// Fetch all rows from a result set as an array using mysqli_fetch_all()
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
```

44. Which PHP function is used to retrieve the current field value from a result set in MySQL?
    - a) `mysqli_fetch_field()`
    - b) `mysqli_fetch_row()`
    - c) `mysqli_fetch_array()`
    - d) `mysqli_fetch_assoc()`

```php
// Code for question 44
// Retrieve the current field value from a result set using mysqli_fetch_field()
$fieldValue = $row['fieldname'];
```

45. What is the purpose of the `mysqli_store_result()` function in PHP?
    - a) To store the entire result set from a query in memory
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch

 rows from a database result

```php
// Code for question 45
// Store the entire result set from a query in memory using mysqli_store_result()
mysqli_store_result($connection);
```

46. How can you retrieve the number of affected rows by an INSERT, UPDATE, or DELETE query in PHP when working with MySQL?
    - a) Using `mysqli_affected_rows()`
    - b) Using `mysqli_num_rows()`
    - c) Using `mysqli_fetch_assoc()`
    - d) Using `mysqli_num_fields()`

```php
// Code for question 46
// Retrieve the number of affected rows by an INSERT, UPDATE, or DELETE query using mysqli_affected_rows()
$affectedRows = mysqli_affected_rows($connection);
```

47. What is the purpose of the `mysqli_multi_query()` function in PHP?
    - a) To execute multiple SQL queries in a single call
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 47
// Execute multiple SQL queries in a single call using mysqli_multi_query()
$query = "SELECT * FROM users; SELECT * FROM orders;";
mysqli_multi_query($connection, $query);
```

48. How can you retrieve the result of a multi-query execution in PHP when working with MySQL?
    - a) Using `mysqli_use_result()`
    - b) Using `mysqli_store_result()`
    - c) Using `mysqli_next_result()`
    - d) Using `mysqli_free_result()`

```php
// Code for question 48
// Retrieve the result of a multi-query execution using mysqli_use_result() and mysqli_next_result()
do {
    $result = mysqli_use_result($connection);
    // Process the result set
} while (mysqli_next_result($connection));
```

49. What is the purpose of the `mysqli_use_result()` function in PHP when working with MySQL?
    - a) To retrieve the result set of a query incrementally
    - b) To execute a SQL query
    - c) To establish a connection to a MySQL database
    - d) To fetch rows from a database result

```php
// Code for question 49
// Retrieve the result set of a query incrementally using mysqli_use_result()
$result = mysqli_use_result($connection);
while ($row = mysqli_fetch_assoc($result)) {
    // Process each row
}
```

50. Which PHP function is used to retrieve the next result from a multi-query execution in MySQL?
    - a) `mysqli_next_result()`
    - b) `mysqli_use_result()`
    - c) `mysqli_store_result()`
    - d) `mysqli_free_result()`

```php
// Code for question 50
// Retrieve the next result from a multi-query execution using mysqli_next_result()
mysqli_next_result($connection);
```

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://komarev.com/ghpvc/?username=drshahizan&label=Views&color=0e75b6&style=flat)
![](https://hit.yhype.me/github/profile?user_id=81284918)

