# Group Members

| Name | Matric No | Github ID |
| ----------------------- | --------------- | -------------- |
| Muhammad Hafiz Iskandar | SX202325ECJHF04 | mhafiziskandar |
| Nabilah Abd Rahman | SX202285ECJHF04 | nabilaharahman |
| Effa Aiza Sulaiman | SX202206ECJHF04 | effaaiza |

# Prerequisites

Before running the project, make sure you have the following software installed on your machine:

1. PHP (>=7.4)
2. Composer
3. MySQL or any other compatible database server
4. Node.js and npm (for frontend assets)

# Installation

1. Navigate to the project's root directory. Install PHP dependencies using Composer.
```
composer install
```

2. Create a copy of the .env.example file and rename it to .env. Update the .env file with your local database credentials and other environment-specific configurations.
```
cp .env.example .env
```

3. Generate an application key.
```
php artisan key:generate
```

4. Migrate the database.
```
php artisan migrate
```

5. Seed the database with sample data.
```
php artisan db:seed
```

6. Install frontend dependencies using npm.
```
npm install
npm run dev
```

# Running the Application

To run the Laravel application on your localhost, use the following command

```
php artisan serve
```

# Demo Account

You can access the demo accounts to explore different roles within the application. Please use the following credentials:

## Admin Role:

- **Username**: `admin@example.com`
- **Password**: `password`

As an admin, you have access to all administrative functionalities and can manage users, settings, and other privileged actions.

## User Role:

- **Username**: `user@example.com`
- **Password**: `password`

The user role has limited access to certain features and is intended for regular users of the application.

## Project Screenshot

![Home Screenshot](/project/4-project/submission/2%20Boundless/public/assets/screenshots/Home_Boundless.PNG)
![About Screenshot](/project/4-project/submission/2%20Boundless/public/assets/screenshots/About_Boundless.PNG);
![Cultures Screenshot](/project/4-project/submission/2%20Boundless/public/assets/screenshots/Cultures_Boundless.PNG)
![Reviews Screenshot](/project/4-project/submission/2%20Boundless/public/assets/screenshots/Reviews_Boundless.PNG)
![Festivals Screenshot](/project/4-project/submission/2%20Boundless/public/assets/screenshots/Festivals_Boundless.PNG)
![Login Screenshot](/project/4-project/submission/2%20Boundless/public/assets/screenshots/Login_Boundless.PNG)

Above is a screenshot of our project's main interface.
