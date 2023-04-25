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


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
