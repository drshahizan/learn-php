<?php

// db_seed.php

// Include the database configuration file
require_once 'database/db_config.php';

// Function to seed data into the 'users' table
function seedUsersTable()
{
    global $link;

    $sql = "INSERT INTO users (first_name, last_name, username, email, password, role, profile_pic_id)
            VALUES
            ('Admin', 'KuehRaye', 'admin', 'admin@kuehraye.com', 'admin123', 'Admin', 1),
            ('Jane', 'Smith', 'janesmith', 'jane@google.com', 'password123', 'User', 2),
            ('Mike', 'Johnson', 'mikejohnson', 'mike@google.com', 'password123', 'User', 3)";

    if (mysqli_query($link, $sql)) {
        error_log('Data seeded into users table successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }

}

// Function to seed data into the 'products' table
function seedProductsTable()
{
    global $link;

    $sql = "INSERT INTO products (product_name, product_price, product_image, product_description)
            VALUES
            ('Almond London', '50.00', 'images/products/product-img-1.jpg', 'Discover pure bliss with Almond London, a heavenly cookie featuring a luscious almond at its heart, embraced by rich chocolate. Each bite delivers a perfect harmony of nutty, buttery, and chocolaty goodness, leaving you craving more of this irresistible delight.'),
            ('Honey Cornflakes', '20.00', 'images/products/product-img-2.jpg', 'Savor the golden delight of Honey Cornflakes, a delectable treat that brings joy with every spoonful. Crispy cornflakes drenched in a drizzle of golden honey create a symphony of textures and flavors. Experience the perfect balance of crunchy satisfaction and sweet indulgence, making every bite an irresistible pleasure.'),
            ('Nutella Pod', '45.00', 'images/products/product-img-3.jpg', 'Experience sheer delight with the Nutella Pod, a delightful pastry that takes your taste buds on a journey of pure bliss. Encased within a light, flaky shell lies a generous filling of creamy Nutella spread, rich with the goodness of hazelnuts and chocolate. Each bite offers a heavenly combination of smooth, nutty flavors and velvety chocolate, making the Nutella Pod an irresistible treat that leaves you craving for more.'),
            ('Pandan Layer Cake', '55.00', 'images/products/product-img-5.jpg', 'Indulge in the magic of Pandan Layer Cake, a green-hued marvel that delights with each bite. Soft and sponge-like, infused with pandan\\'s natural essence, this cake offers a delightful dance of subtle sweetness and fragrant charm, leaving you enchanted by its unique flavors.'),
            ('Dates & Cinnamon Cake', '65.00', 'images/products/product-img-4.jpg', 'Enjoy the perfect blend of sweetness and spice with Dates & Cinnamon Cake. Moist and flavorful, this treat is adorned with luscious dates and infused with aromatic cinnamon, creating a delightful symphony of tastes that will warm your heart with every bite.')";

    if (mysqli_query($link, $sql)) {
        error_log('Data seeded into products table successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }
}

// Function to seed data into the 'membership' table
function seedMembershipTable()
{
    global $link;

    $sql = "INSERT INTO membership (membership_name, membership_description, discount_id)
            VALUES
            ('Gold', 'This is the Gold membership description.', 3),
            ('Silver', 'This is the Silver membership description.', 2),
            ('Bronze', 'This is the Bronze membership description.', 1)";

    if (mysqli_query($link, $sql)) {
        error_log('Data seeded into membership table successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }
}

// Function to seed data into the 'discount' table
function seedDiscountTable()
{
    global $link;

    $sql = "INSERT INTO discount (discount_percentage)
            VALUES
            ('10%'),
            ('20%'),
            ('30%')";

    if (mysqli_query($link, $sql)) {
        error_log('Data seeded into discount table successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }
}

// Function to seed data into the 'profile_pic' table
function seedProfilePicTable()
{
    global $link;

    $sql = "INSERT INTO profile_pic (profile_pic_url)
            VALUES
            ('images/users/profile-pic-1.jpeg'),
            ('images/users/profile-pic-2.jpeg'),
            ('images/users/profile-pic-3.jpeg')";

    if (mysqli_query($link, $sql)) {
        error_log('Data seeded into profile_pic table successfully.<br>');
    } else {
        error_log('ERROR: Not able to execute $sql. ' . mysqli_error($link) . '<br>');
    }
}

// Seed data into the tables
seedUsersTable();
seedProductsTable();
seedMembershipTable();
seedDiscountTable();
seedProfilePicTable();

// Close connection to the server as we no longer need it for database creation
mysqli_close($link);

?>
