<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# PHP: Lab
PHP Lab is a collection of programming projects that provide hands-on experience in developing web applications using PHP and MySQL database. The lab covers a range of projects, from setting up the XAMPP server to developing full-scale applications such as Hospital Management System, Tourism Management System, and COVID19 Testing Management System. The projects also cover important topics such as PHP Intelephense and PHP Server, running PHP on Visual Studio Code, MySQL and image handling, and more. By working through these projects, users can gain valuable experience in PHP development and database management.

## Lab

| Lab | Title | Files |
| :-----: | ----- | :------: | 
| 01 | How to Install XAMPP Server on Windows 11 |<a href="../../lab/php/lab1" ><img src="../../images/folder_info.png" width="24px" height="24px" ></a> |
| 02 | PHP Intelephense and PHP Server |<a href="../../lab/php/lab2" ><img src="../../images/folder_info.png" width="24px" height="24px"></a>|
| 03 | How to run PHP on Visual Studio Code |<a href="../../lab/php/lab3" ><img src="../../images/folder_info.png" width="24px" height="24px" ></a> |
| 04 | PHP & MySQL source code |<a href="../../lab/php/lab4/phpweb.zip" ><img src="../../images/folder_info.png" width="24px" height="24px" ></a> |
| 05 | MySQL & image |<a href="../../lab/php/lab5/crudimage.zip" ><img src="../../images/folder_info.png" width="24px" height="24px" ></a> |
| 06 | Tourism Management System |<a href="../../lab/php/lab6" ><img src="../../images/folder_info.png" width="24px" height="24px" ></a> |
| 07 | Hospital Management System |<a href="../../lab/php/lab7" ><img src="../../images/folder_info.png" width="24px" height="24px" ></a> |
| 08 | COVID19 Testing Management System |<a href="../../lab/php/lab8" ><img src="../../images/folder_info.png" width="24px" height="24px" ></a> |

## Basic

## MySQL
| No  | Topic | Description | File |
|---|----------------------------|------------------------------------------|-------------------------------------|
|12a| Connecting to MySQL Database Server | In PHP you can easily do this using the mysqli_connect() function. All communication between PHP and the MySQL database server takes place through this connection. | [File](http://localhost/msoWP/DBmysql/lesson/1connect-to-mysql-database-server.php)                       |
|12b| Closing the MySQL Database Server Connection | The connection to the MySQL database server will be closed automatically as soon as the execution of the script ends. However, if you want to close it earlier you can do this by simply calling the PHP mysqli_close() function. | [File](http://localhost/msoWP/DBmysql/lesson/1connect-to-mysql-database-server.php) |
|12c| Creating MySQL Database Using PHP | Before saving or accessing the data, we need to create a database first. The CREATE DATABASE statement is used to create a new database in MySQL. Let's make a SQL query using the CREATE DATABASE statement, after that we will execute this SQL query through passing it to the PHP mysqli_query() function to finally create our database. Database: demo1. | [File](http://localhost/msoWP/DBmysql/lesson/3create-mysql-database.php) |
|12d| PHP MySQL Create Tables | A table organizes the information into rows and columns. The SQL CREATE TABLE statement is used to create a table in the database. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/4create-mysql-table.php) |
|12e| Inserting Data into a MySQL Database Table | The INSERT INTO statement is used to insert new rows in a database table. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/5insert-records-into-mysql-database-table.php) |
|12f| Inserting Multiple Rows into a Table | To do this, include multiple lists of column values within the INSERT INTO statement, where column values for each row must be enclosed within parentheses and separated by a comma. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/6insert-multiple-rows-into-table-in-mysql.php) |
|12g| PHP MySQL Prepared Statements | A prepared statement (also known as parameterized statement) is simply a SQL query template containing placeholder instead of the actual parameter values. These placeholders will be replaced by the actual values at the time of execution of the statement. Prepared statements also provide strong protection against SQL injection, because parameter values are not embedded directly inside the SQL query string. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/7prepared-statement.php) |
|12h| PHP MySQL Last Inserted ID | For this example, we'll use the same persons table that we've created in the PHP MySQL create tables chapter, which has four columns id, first_name, last_name, and email, where id is the primary key column and marked with AUTO_INCREMENT flag. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/8get-last-inserted-id-from-mysql-database-table.php) |
|12i| Selecting Data From Database Tables | Now it's time to retrieve data that have been inserted in the preceding tutorial. The SQL SELECT statement is used to select the records from database tables. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/9mysql-select-query.php) |
|12j| Filtering the Records | In this tutorial, you will learn how to select the records from a MySQL database table based on specific conditions using PHP. The WHERE clause is used to extract only those records that fulfill a specified condition. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/10mysql-where-clause.php) |
|12k| Limiting Result Sets | The LIMIT clause is used to constrain the number of rows returned by the SELECT statement. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/11mysql-limit-clause.php) |
|12l| Ordering the Result Set | The ORDER BY clause can be used in conjunction with the SELECT statement to see the data from a table ordered by a specific field. The ORDER BY clause lets you define the field name to sort against and the sort direction, either ascending or descending. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/12mysql-order-by-clause.php) |
|12m| Updating Database Table Data | The UPDATE statement is used to change or modify the existing records in a database table. This statement is typically used in conjunction with the WHERE clause to apply the changes to only those records that match specific criteria. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/13mysql-update-query.php) |
|12n| Deleting Database Table Data | Just as you insert records into tables, you can delete records from a table using the SQL DELETE statement. It is typically used in conjunction with the WHERE clause to delete only those records that match specific criteria or condition. Database: demo1, table: persons. | [File](http://localhost/msoWP/DBmysql/lesson/14mysql-delete-query.php) |

Please note that the alignment and spacing may vary depending on the Markdown rendering.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
