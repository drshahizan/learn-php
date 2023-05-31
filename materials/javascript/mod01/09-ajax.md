<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# AJAX and APIs

AJAX (Asynchronous JavaScript and XML) is a technique in web development that allows you to send and receive data from a web server without reloading the entire page. It allows you to update parts of a web page without interrupting the user's interaction with the page. AJAX is accomplished by using a combination of JavaScript and HTTP requests.

APIs (Application Programming Interfaces) are sets of protocols, routines, and tools for building software applications. They define how software components should interact with each other. In the context of web development, APIs are often used to allow communication between different web applications or services.

In JavaScript, you can use AJAX to send and receive data from an API. This allows you to use the data provided by the API to dynamically update the content of your web page without the need for a page refresh. 

For example, you can use the XMLHttpRequest object in JavaScript to send an HTTP request to an API endpoint and receive a response. You can then use the response to update the content of your web page. Alternatively, you can use the fetch() method introduced in ES6 to make HTTP requests to APIs and receive responses as promises.

Sure, I'd be happy to provide more details and an example!

AJAX (Asynchronous JavaScript and XML) is a technique in web development that allows you to send and receive data from a web server without reloading the entire page. It is often used in conjunction with APIs to enable dynamic and interactive web applications.

## XMLHttpRequest (XHR) object
In JavaScript, you can use the XMLHttpRequest (XHR) object to make AJAX requests to APIs. The XHR object provides a way to communicate with servers using HTTP or HTTPS, and it can send and receive data in various formats such as JSON, XML, or plain text.

An example of how to use AJAX in JavaScript to send a GET request to the OpenWeather API and receive weather data for a specific location:

```javascript
// Create a new XHR object
let xhr = new XMLHttpRequest();

// Set up the API endpoint URL with a query parameter for the location (in this case, New York City)
let url = "https://api.openweathermap.org/data/2.5/weather?q=New York City&appid=your_api_key_here";

// Set the HTTP method and endpoint URL
xhr.open("GET", url);

// Set the response type to JSON
xhr.responseType = "json";

// Set up a callback function to handle the response
xhr.onload = function() {
  if (xhr.status === 200) {
    // If the request was successful, parse the JSON data and display it in the console
    console.log(xhr.response);
  } else {
    // If the request failed, display an error message in the console
    console.error("Error: " + xhr.status);
  }
};

// Send the request
xhr.send();
```

In this example, we define a `getWeather` function that uses the `XMLHttpRequest` object to make a GET request to the OpenWeatherMap API. The API endpoint URL includes a query parameter for the location (in this case, New York City) and an API key (which you'll need to replace with your own). We set the `responseType` property of the XHR object to "json" to indicate that we expect the response data to be in JSON format.

We define an `onload` callback function that will be called when the response is received. If the HTTP status code is 200 (indicating a successful response), we extract the temperature data from the JSON response and display it in the result div using string interpolation. If the status code is anything other than 200, we display an error message in the result div.

In the HTML, we define a button that calls the `getWeather` function when clicked, and a div with an id of "result" that will be used to display the weather data or error message.

When the user clicks the "Get Weather" button, the `getWeather` function is called, which sends the AJAX request to the API. The response is handled asynchronously, meaning that the browser won't freeze while waiting for the response to be received. When the response is received, the `onload` callback function is called with the XHR object as its argument.

In the `onload` function, we first check the HTTP status code to make sure the response was successful. If it was, we extract the temperature data from the JSON response using dot notation (`weatherData.main.temp`) and display it in the result div using string interpolation (`${weatherData.name}` and `${weatherData.main.temp}`).

If the response was not successful, we display an error message in the result div.

This is just a basic example, but the same principles can be applied to any API that returns JSON data. You would simply need to replace the API endpoint URL and the logic for extracting and displaying the data. Additionally, there are many libraries available (such as jQuery and Axios) that can simplify the process of making AJAX requests and handling responses.

## Types of APIs
In JavaScript, there are several types of APIs that developers can use to interact with various systems and services. Here are some of the most common types of APIs in JavaScript:

| Type of API | Description| Examples|
|--------|------------------|------------|
| Browser APIs| APIs built into web browsers that allow developers to interact with web page elements and browser functions| Document Object Model (DOM), Web Storage, Geolocation, Web Audio API, Web Speech API|
| Third-party APIs| APIs provided by external services or companies that allow developers to access their data and functionality | Twitter API, Facebook API, Google Maps API, Stripe API, Twilio API|
| Server-side APIs| APIs hosted on a server that allow developers to send and receive data over the internet using HTTP requests | REST API, GraphQL, SOAP API, JSON-RPC API |
| Native APIs | APIs provided by the operating system or platform on which the JavaScript code is running| iOS Native APIs, Android Native APIs, React Native APIs, Electron APIs |
| Database APIs| APIs that allow developers to interact with databases using JavaScript| MongoDB Node.js Driver, Firebase Realtime Database, MySQL Node.js Driver|
| Cloud Computing APIs | APIs that allow developers to interact with cloud computing services using JavaScript| Amazon Web Services (AWS) API, Microsoft Azure API, Google Cloud Platform (GCP) API|

It's worth noting that this is not an exhaustive list and there may be other types of APIs that exist in JavaScript. Additionally, some APIs may fall into multiple categories. For example, a server-side API may also be a third-party API if it's provided by an external service.

## Code
An example of using AJAX in JavaScript to fetch data from an API and display it on a webpage:

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AJAX Example</title>
    <script>
      function getWeather() {
        // Create a new XHR object
        let xhr = new XMLHttpRequest();

        // Set up the API endpoint URL with a query parameter for the location (in this case, New York City)
        let url = "https://api.openweathermap.org/data/2.5/weather?q=New York City&appid=your_api_key_here";

        // Set the HTTP method and endpoint URL
        xhr.open("GET", url);

        // Set the response type to JSON
        xhr.responseType = "json";

        // Set up a callback function to handle the response
        xhr.onload = function() {
          if (xhr.status === 200) {
            // If the request was successful, display the weather data in the result div
            let weatherData = xhr.response;
            let resultDiv = document.getElementById("result");
            resultDiv.innerHTML = `The current temperature in ${weatherData.name} is ${weatherData.main.temp} Kelvin.`;
          } else {
            // If the request failed, display an error message in the result div
            let resultDiv = document.getElementById("result");
            resultDiv.innerHTML = "Error: Unable to retrieve weather data.";
          }
        };

        // Send the request
        xhr.send();
      }
    </script>
  </head>
  <body>
    <h1>Get Weather Data with AJAX</h1>
    <button onclick="getWeather()">Get Weather</button>
    <div id="result"></div>
  </body>
</html>
```

In this example, we define a `getWeather` function that uses the `XMLHttpRequest` object to make a GET request to the OpenWeatherMap API. The API endpoint URL includes a query parameter for the location (in this case, New York City) and an API key (which you'll need to replace with your own). We set the `responseType` property of the XHR object to "json" to indicate that we expect the response data to be in JSON format.

We define an `onload` callback function that will be called when the response is received. If the HTTP status code is 200 (indicating a successful response), we extract the temperature data from the JSON response and display it in the result div using string interpolation. If the status code is anything other than 200, we display an error message in the result div.

In the HTML, we define a button that calls the `getWeather` function when clicked, and a div with an id of "result" that will be used to display the weather data or error message.

When the user clicks the "Get Weather" button, the `getWeather` function is called, which sends the AJAX request to the API. The response is handled asynchronously, meaning that the browser won't freeze while waiting for the response to be received. When the response is received, the `onload` callback function is called with the XHR object as its argument.

In the `onload` function, we first check the HTTP status code to make sure the response was successful. If it was, we extract the temperature data from the JSON response using dot notation (`weatherData.main.temp`) and display it in the result div using string interpolation (`${weatherData.name}` and `${weatherData.main.temp}`). If the response was not successful, we display an error message in the result div.

## Case study
An example HTML and JavaScript code that uses the Fetch API to read data from a "readme.txt" file and displays it in a table. This code is based on the case study of a university academic course registration system.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Course Registration System</title>
    <script>
      window.onload = function () {
        fetch("readme.txt")
          .then((response) => response.text())
          .then((text) => {
            const courses = text.split("\n").map((line) => line.split(","));
            const table = document.getElementById("course-table");
            courses.forEach((course) => {
              const row = document.createElement("tr");
              course.forEach((item) => {
                const cell = document.createElement("td");
                cell.textContent = item;
                row.appendChild(cell);
              });
              table.appendChild(row);
            });
          });
      };
    </script>
  </head>
  <body>
    <h1>Course Registration System</h1>
    <table id="course-table">
      <thead>
        <tr>
          <th>Course Code</th>
          <th>Course Name</th>
          <th>Instructor</th>
          <th>Schedule</th>
          <th>Room</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </body>
</html>
```

### `readme.txt` file 

```
CSC101, Introduction to Computer Science, DR MSO, MWF 10:00-11:30, Room 101
MAT201, Calculus I, El Insyiraah, TTH 13:00-14:30, Room 201
ENG102, Composition and Literature, Adam Shah, MWF 13:00-14:30, Room 102
PSY301, Social Psychology, Moganakumaran A/L Selvakumaran, TTH 10:00-11:30, Room 301
HIS201, World History, Ikhmal Syazreel, MWF 9:00-10:30, Room 201
```

In this example, the file contains the course code, name, instructor, schedule, and room for five different courses offered by the university. Each line represents a separate course, and the values are separated by commas. 

You can modify the content of the file to include information about the courses offered by your university, such as course prerequisites, credit hours, and descriptions.
In this code, the `fetch()` method is used to read the content of a text file named "readme.txt". The file contains information about the university courses, such as the course code, name, instructor, schedule, and room. The content of the file is split into lines and each line is split into an array of items using the comma as a delimiter.

The resulting array of course data is then used to populate a table with the `id` "course-table". The `forEach()` method is used to iterate over the array and create a new row in the table for each course. For each item in the course array, a new cell is created and added to the row.

When the page loads, the `onload` event is fired, and the `fetch()` method is called to retrieve the course data from the file. Once the data is received, the table is populated with the course information.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://komarev.com/ghpvc/?username=drshahizan&label=Views&color=0e75b6&style=flat)
