# Lab 6: Lang Trans

Activity 🏆 :
## Q1: Describe the operation of this JavaScript.
Ans:
1- It starts by selecting various elements from the HTML document using document.querySelector and document.querySelectorAll methods. The selected elements include input fields, select tags, icons, and a button.

2- The code iterates over each select tag using selectTag.forEach and generates a list of options based on the countries object. It dynamically creates option elements and inserts them into the select tag.

3- The code adds a click event listener to the exchange icon (exchageIcon). When clicked, it swaps the values between the fromText and toText input fields, as well as the selected values of the select tags. This allows users to quickly switch the translation direction.

4- An event listener is added to the fromText input field (fromText.addEventListener). When the user types in the fromText field, it checks if the field is empty. If it is empty, it clears the value of the toText field.

5- An event listener is added to the translate button (translateBtn.addEventListener). When clicked, it retrieves the text from the fromText field and the selected translation languages from the select tags. It then constructs an API URL with the text and language pair to be translated. The code fetches the translation from the API, updates the value of the toText field with the translated text, and sets a placeholder text while the translation is in progress.

6- Event listeners are added to the icons (icons.forEach). When a copy icon is clicked, it checks whether the source or target text field is selected (target.id) and copies the corresponding text to the clipboard using the navigator.clipboard.writeText method. When a speech icon is clicked, it checks whether the source or target text field is selected and creates a SpeechSynthesisUtterance object with the corresponding text. It sets the language for speech synthesis based on the selected language. The speech is then synthesized using the speechSynthesis.speak method.

## Q2: What API was used in this exercise? how it operates?
Ans:
MyMemory Translation API

Here's how the API operates within the code:

Translate Button Click Event: When the translate button is clicked, the code retrieves the text from the "fromText" input field and the selected values from the first and second select tags, representing the source language and target language, respectively.

API URL Construction: The code constructs a URL for the API request using the retrieved values. It includes the text to translate (text), the source language (translateFrom), and the target language (translateTo) in the URL. The API URL is constructed using a template string and the variables obtained from the user's input.

Fetch Request: The code uses the fetch function to send a GET request to the constructed API URL. This initiates the API call to the MyMemory Translation API.

Handling the API Response: The response from the API is received in the form of a res object. The code uses the res.json() method to parse the response as JSON.

Processing the Translation: Once the JSON response is obtained, the code accesses the translated text using data.responseData.translatedText. This is the translated text returned by the API based on the provided source text and language pair.

Handling Additional Data: The API response may also include an array of matches (data.matches). The code iterates over this array and, in this case, checks if data.id is equal to 0. If it is, it updates the translated text in the "toText" input field with data.translation. This additional handling is specific to the MyMemory Translation API and may not apply to other translation APIs.

Displaying the Translation: The translated text is assigned to the "toText" input field value using toText.value = data.responseData.translatedText. This updates the input field to display the translated text.

Updating Placeholder Text: While the translation is being fetched, the "toText" input field displays a placeholder text indicating that the translation is in progress (toText.setAttribute("placeholder", "Translating...")). Once the translation is complete, the placeholder text is updated to its original value (toText.setAttribute("placeholder", "Translation")).

## Q3: Enter text to be converted to French. Is the text accurate?
Ans:
The accuracy of the translation depends on various factors, including the quality of the translation model used by the API and the amount of training data available for the languages being translated.

<!--
            JavaScript adv: Lab 6
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->