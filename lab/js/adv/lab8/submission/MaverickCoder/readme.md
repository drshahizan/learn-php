# Lab 8: weather

Activity 🏆 :
## Q1: Provide weather information for the cities of Longyearbyen and Novosibirsk.
Ans:
Longyearbyen: Clear sky, 13°C, 51% humidity
Novosibirsk: Clear sky, 26°C, 47% humidity

## Q2: Demonstrate how to use device location.
Ans:
1. n the JavaScript code (script.js), locate the event listener for the "Get Device Location" button. It should be associated with the locationBtn variable.

2. Inside the event listener function, you'll find a conditional statement checking if the browser supports the Geolocation API using navigator.geolocation. If the browser does support it, the getCurrentPosition method is called.

3. To handle the device location, you need to define two callback functions: onSuccess and onError.

4. The latitude and longitude values are then used to construct the API URL by updating the api variable with the appropriate API endpoint.

5. Finally, the fetchData function is called to retrieve the weather details using the updated API URL.

## Q3: What is the openweathermap API?
Ans:
The OpenWeatherMap API is a service that provides weather data and forecast information for various locations worldwide. It allows developers to access current weather conditions, historical data, and weather forecasts through a set of API endpoints. The API provides data such as temperature, humidity, wind speed, atmospheric pressure, precipitation, and more.

## Q4: What exactly is the purpose of weatherDetails?
Ans:
The weatherDetails function is responsible for extracting the relevant weather information from the API response and updating the user interface accordingly.


<!--
            JavaScript adv: Lab 8
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->