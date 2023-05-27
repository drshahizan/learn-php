<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Lab 21: COVID19 Testing Management System

The COVID19 Testing Management System is a web-based application that is built using PHP and MySQL database. It aims to provide an efficient and effective solution to manage the testing process of COVID-19. This system has two modules, the Admin module, and the User (Patient) module.

The **Admin module** is the superuser of the system who has complete control over the website. The admin can log in through the login page and view the dashboard where he can see all the details in brief, such as the total assigned and completed tests. In the Phlebotomist section, the admin can manage the Phlebotomist by adding, updating, or deleting their profiles. The Testing section allows the admin to manage all the tests by assigning the test to Phlebotomist and updating the history. The Report section enables the admin to generate two types of reports; one is between dates, and the other one is by search. The admin can also search the report by order number, name, and mobile number. Additionally, the Notification section is there to get notified of every new test request.

On the other hand, the **User module** is designed to cater to the needs of the Patients. Users can visit the application through a URL, and in the Testing section, they can provide their personal and testing information. There are two parts in this section; one is for new users, and another one is for registered users. A registered user only needs to provide test information, and their personal information will be fetched from the database. In the Report section, users can search their test report using order number, name, and registered mobile number. Lastly, the Dashboard section shows the user the number of tests done in the state they live in.

To run the Online COVID Testing Management System, one has to download the zip file, extract the file, and copy the *covid-tms* folder. Paste the folder inside the root directory (for xampp xampp/htdocs) and open PHPMyAdmin (http://localhost/phpmyadmin). Create a database with the name *covidtmsdb* and import the **covidtmsdb.sql** file (given inside the zip package in SQL file folder). Lastly, run the script http://localhost/covid-tms and use the admin credential, which is Username: **admin** and Password: **Test@123**.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
