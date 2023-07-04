# Lab 7: A Randome Quote Generator

Activity 🏆 :
## Q1: Describe how this JavaScript works.
Ans: 
This JavaScript code performs the following tasks:

1. Selecting HTML elements:
   - It uses the `document.querySelector` method to select specific HTML elements and assigns them to variables:
     - `quoteText`: Represents an element with the class "quote."
     - `quoteBtn`: Represents a button element.
     - `authorName`: Represents an element with the class "name."
     - `speechBtn`: Represents an element with the class "speech."
     - `copyBtn`: Represents an element with the class "copy."
     - `twitterBtn`: Represents an element with the class "twitter."

2. Defining the `randomQuote` function:
   - This function is responsible for fetching a random quote from the Quotable API.
   - It adds a "loading" class to the `quoteBtn` element, changes its text to "Loading Quote...," and sends a request to the API using the `fetch` function.
   - The response from the API is then parsed as JSON using the `response.json()` method.
   - The resulting quote content and author are assigned to the `innerText` properties of the `quoteText` and `authorName` elements, respectively.
   - Finally, the "loading" class is removed from the `quoteBtn` element, and its text is changed to "New Quote."

3. Adding an event listener to the `speechBtn` element:
   - When the "Speech" button is clicked, the callback function is executed.
   - It first checks if the `quoteBtn` element does not have the "loading" class.
   - If the condition is met, it creates a `SpeechSynthesisUtterance` object, which represents the text that will be spoken.
   - The text is constructed by concatenating the `innerText` values of `quoteText` and `authorName` elements.
   - The `speak` method of the `speechSynthesis` object is called with the `utterance` object to generate speech.
   - Additionally, there is a setInterval function that checks if the speech synthesis is speaking (`synth.speaking`). It updates the class of `speechBtn` to either "active" or removes the "active" class based on the condition.

4. Adding an event listener to the `copyBtn` element:
   - When the "Copy" button is clicked, the callback function is executed.
   - It uses the `navigator.clipboard.writeText` method to copy the `innerText` value of the `quoteText` element to the clipboard.

5. Adding an event listener to the `twitterBtn` element:
   - When the "Twitter" button is clicked, the callback function is executed.
   - It constructs a tweet URL using the `quoteText` element's `innerText` value as part of the URL.
   - The `window.open` function is called to open the tweet URL in a new browser window or tab.

6. Adding an event listener to the `quoteBtn` element:
   - When the "New Quote" button is clicked, the `randomQuote` function is called to fetch and display a new random quote from the Quotable API.

## Q2: In this exercise, what API was used? how it functions
Ans:

Google Fonts API:
- The code imports the Google Font "Poppins" by including a CSS file from the Google Fonts API.
- The URL https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap is used to import the font styles.
- The imported font is then applied to the font-family property of the * selector, which sets it as the default font for the entire page.

Quotable API:
- The code makes an HTTP request to the Quotable API to fetch a random quote.
- The URL http://api.quotable.io/random is used to request a random quote.
- The fetch function is used to make the request, and the response is handled using promises (response.json()).
- The received quote content and author are then used to update the respective elements in the HTML.
- This functionality is encapsulated in the randomQuote function, which is called when the "New Quote" button (quoteBtn) is clicked.


## Q3: Please use the Twitter icon to post a quote. Explain what happened and how it happened?
Ans: In the JavaScript code, you retrieve the text content of the quote element and use it to construct the URL for the Twitter intent. The encodeURIComponent() function ensures that any special characters in the quote are properly encoded for the URL. Finally, the window.open() function is called to open the Twitter intent URL in a new window or tab, allowing the user to post the quote on their Twitter account.

<!--
            JavaScript adv: Lab 7
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->