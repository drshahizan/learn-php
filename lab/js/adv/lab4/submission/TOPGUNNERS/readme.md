File 📁 : 4Text To Speech

Activity 🏆 :

For this application, you must create a flowchart.


How is select voice displayed as a dropdownlist? (Figure 4.2)
-The select voice is displayed as a dropdown list by utilizing an HTML <select> element. Within the JavaScript code, the getVoices() method of the Speech Synthesis API is used to retrieve the available voices on the user's device. These voices are then dynamically populated into the <select> element as <option> elements using JavaScript. Each <option> represents an available voice, allowing the user to choose their preferred voice from the dropdown list.


How does text become speech?
-Text becomes speech by utilizing the Speech Synthesis API provided by the browser. Within the JavaScript code, the speechSynthesis.speak() method is called with a SpeechSynthesisUtterance object as its argument. The SpeechSynthesisUtterance object contains the text that needs to be converted to speech. When the speak() method is invoked, the browser's text-to-speech engine converts the provided text into audible speech using the specified voice and settings.

How can a voice be heard?
-To hear a voice, the user needs to select a voice from the dropdown list (selecting a specific <option> element). Once a voice is selected, the JavaScript code retrieves the voice's identifier and assigns it to the SpeechSynthesisUtterance object's voice property. Then, the speechSynthesis.speak() method is called with the SpeechSynthesisUtterance object as its argument. The browser's text-to-speech engine will utilize the selected voice to convert the text into audible speech, which can be heard through the device's speakers or audio output.
