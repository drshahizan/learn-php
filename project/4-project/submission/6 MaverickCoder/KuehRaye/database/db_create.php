<?php

// db_create.php

// Include the database configuration and connection file
require_once 'database/db_config.php';
require_once 'database/db_connection.php';

// Check if tables have been created
if (!defined('TABLES_CREATED')) {

    // Attempt to create users table query execution
    $sql = "CREATE TABLE IF NOT EXISTS users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        username VARCHAR(30) NOT NULL UNIQUE,
        email VARCHAR(70) NOT NULL UNIQUE,
        password VARCHAR(30) NOT NULL,
        role VARCHAR(30) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        status INT(1) NOT NULL DEFAULT '1',
        membership_id INT(1) NULL,
        is_verified INT(1) NOT NULL DEFAULT '0',
        profile_pic_id INT(1) NULL
        )";

    if (mysqli_query($link, $sql)) {
        error_log('Users table created successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }

    // Attempt to create products table query execution
    $sql = "CREATE TABLE IF NOT EXISTS products(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        product_name VARCHAR(30) NOT NULL,
        product_price VARCHAR(30) NOT NULL,
        product_image VARCHAR(70) NOT NULL,
        product_description VARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        status INT(1) NOT NULL DEFAULT '1'
        )";

    if (mysqli_query($link, $sql)) {
        error_log('Products table created successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }

    // Attempt to create Membership table query execution
    $sql = "CREATE TABLE IF NOT EXISTS membership(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        membership_name VARCHAR(30) NOT NULL,
        membership_description VARCHAR(70) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        status INT(1) NOT NULL DEFAULT '1',
        discount_id INT(1) NULL
        )";

    if (mysqli_query($link, $sql)) {
        error_log('Membership table created successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }

    // Attempt to create Discount table query execution
    $sql = "CREATE TABLE IF NOT EXISTS discount(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        discount_percentage VARCHAR(70) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        status INT(1) NOT NULL DEFAULT '1'
        )";

    if (mysqli_query($link, $sql)) {
        error_log('Discount table created successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }

    // Attempt to create Profile Picture table query execution
    $sql = "CREATE TABLE IF NOT EXISTS profile_pic(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        profile_pic_url VARCHAR(70) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        deleted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        status INT(1) NOT NULL DEFAULT '1'
        )";

    if (mysqli_query($link, $sql)) {
        error_log('Profile Picture table created successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }

    // Set the flag to true indicating that tables have been created
    define('TABLES_CREATED', true);

    error_log('Tables created successfully.<br>');
} else {
    error_log('Tables have already been created. No action taken.<br>');
}

?>