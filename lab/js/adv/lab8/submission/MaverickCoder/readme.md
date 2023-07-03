# Lab 8: weather

Activity 🏆 :
## Q1: Provide weather information for the cities of Longyearbyen and Novosibirsk.
Ans:
Longyearbyen - 10C, Clear sky, 46% humidity
Novosibirsk - 22C, clear sky, 56% humidity

## Q2: Demonstrate how to use device location.
Ans:
HTML Markup: Create an HTML structure that includes elements for displaying the weather information, such as temperature, weather description, and location.

JavaScript: Write JavaScript code to handle the location retrieval and fetch weather data using an API (e.g., OpenWeatherMap API). You can use the device's geolocation to get the latitude and longitude and then make a request to the weather API using those coordinates.

CSS (Optional): Apply CSS styles to the HTML elements to improve the visual appearance of the weather information.

Testing: Open the web page in a browser that supports geolocation. The app will request permission to access the device's location. Once permission is granted, the app will retrieve the latitude and longitude and make a request to the weather API. The received weather data will then be displayed on the web page.

## Q3: What is the openweathermap API?
Ans:

The OpenWeatherMap API is a service that provides weather data and forecasts for locations worldwide. It allows developers to access a wide range of weather-related information, including current weather conditions, forecasts, historical data, and more.

The OpenWeatherMap API offers a RESTful interface, allowing developers to make HTTP requests to retrieve weather data in various formats such as JSON, XML, and HTML. It provides access to real-time weather data, including temperature, humidity, wind speed, atmospheric pressure, precipitation, and more.

With the OpenWeatherMap API, developers can integrate weather information into their applications, websites, or services. It is commonly used in weather apps, travel websites, outdoor activity planners, and any other application that requires weather data to provide accurate and up-to-date weather information to users.

To use the OpenWeatherMap API, developers need to sign up for an API key, which is required for making API requests. The API key ensures authentication and helps track usage limits. By including the API key in the API request, developers can access the desired weather data for specific locations by providing coordinates (latitude and longitude) or location names.

The OpenWeatherMap API offers both free and paid plans, with the paid plans providing additional features, higher request limits, and more frequent updates. The API documentation provides detailed information on available endpoints, request parameters, response formats, and examples to help developers effectively integrate weather data into their applications.


## Q4: What exactly is the purpose of weatherDetails?
Ans:
The purpose of the weatherDetails function is to extract specific weather information from the API response and update the HTML elements on the page with the corresponding weather data.

<!--
            JavaScript adv: Lab 8
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->