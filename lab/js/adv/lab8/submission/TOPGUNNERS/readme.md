Q1: Provide weather information for the cities of Longyearbyen and Novosibirsk.

Here is the weather information for the cities of Longyearbyen and Novosibirsk:
Longyearbyen:

Weather: Clear sky
Temperature: 13°C
Humidity: 51%
Novosibirsk:

Weather: Clear sky
Temperature: 26°C
Humidity: 47%

Q2: Demonstrate how to use device location.

-To use the device location in the Weather App, follow these steps:

In the JavaScript code (script.js), locate the event listener for the "Get Device Location" button. It should be associated with the locationBtn variable.

Inside the event listener function, you'll find a conditional statement checking if the browser supports the Geolocation API using navigator.geolocation. If the browser does support it, the getCurrentPosition method is called, passing in two callback functions: onSuccess and onError.

Define the onSuccess function to handle the successful retrieval of the device's location. This function will receive a position parameter containing the latitude and longitude coordinates.

Inside the onSuccess function, update the api variable with the appropriate API endpoint by appending the latitude and longitude values to the URL. For example:

bash

api = `https://api.openweathermap.org/data/2.5/weather?lat=${position.coords.latitude}&lon=${position.coords.longitude}&appid=${apiKey}`;

Define the onError function to handle any errors that occur while retrieving the device's location. This function will receive an error parameter containing information about the error.
Inside the onError function, display an appropriate error message to the user, informing them that the device location could not be retrieved.
By following these steps, the Weather App will be able to use the device's location to fetch and display the weather details for the current location.

Q3: What is the openweathermap API?

-The OpenWeatherMap API is a service that provides weather data and forecast information for various locations worldwide. It allows developers to access current weather conditions, historical data, and weather forecasts through a set of API endpoints. The API provides data such as temperature, humidity, wind speed, atmospheric pressure, precipitation, and more.

Q4: What exactly is the purpose of weatherDetails?

-The weatherDetails function is responsible for extracting the relevant weather information from the API response and updating the user interface accordingly.

Group:

 1. Name: SHARVIN A/L M.GUNALAN,          Matrix No: SX221955ECJHF04 , Github ID: Sharvin01
 2. Name: SUBAHSHINI A/P SANGARA LINGAM,  Matrix No: SX220328ECJHS04 , Github ID: Subahshini15
 3. Name: MUHAMMAD FAIZAL BIN ASARAB ALI, Matrix No: SX221609ECJHF04 , Github ID: Faizal994
 4. Name: MOGANAKUMARAN A/L SELVAKUMARAN, Matrix No: SX211706ECRHF04 , Github ID: RN1310
