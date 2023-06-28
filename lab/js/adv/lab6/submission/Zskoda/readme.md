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

When the translate button (translateBtn) is clicked, the code retrieves the text from the fromText field and the selected translation languages from the select tags (translateFrom and translateTo).

It then constructs the API URL using the retrieved text and language pair. The API URL is formed using the MyMemory Translation API endpoint: https://api.mymemory.translated.net/get?q=${text}&langpair=${translateFrom}|${translateTo}. The q parameter represents the text to be translated, and the langpair parameter specifies the source and target languages.

The code uses the fetch function to make an HTTP request to the API URL (fetch(apiUrl)). This request fetches the translation response from the MyMemory Translation API.

Once the translation response is received, the code extracts the translated text from the response JSON (data.responseData.translatedText) and updates the value of the toText field with the translated text.

The code also handles multiple translation matches returned by the API. It iterates through the data.matches array and checks if a specific match ID is found (e.g., data.id === 0). If a match with the specified ID is found, it overrides the translated text with the corresponding translation. This allows for prioritizing certain translations if available.

While the translation is in progress, the code sets a placeholder text (Translating...) for the toText field using toText.setAttribute("placeholder", "Translating..."). This provides visual feedback to the user during the translation process.

## Q3: Enter text to be converted to French. Is the text accurate?
Ans:




### Team Skoda:
1.Mohd Noor Hafiz
2.Ikhmal Syazreel
3.
4.
