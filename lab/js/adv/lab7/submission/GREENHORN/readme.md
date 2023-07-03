# Lab 7: A Random Quote Generator

> Activity 🏆 :
> - Describe how this JavaScript works.
The JavaScript code, along with the accompanying HTML and CSS, creates a "Random Quote Generator" web application. This application allows users to fetch and display random quotes, listen to the quotes being spoken, copy the quotes to the clipboard, and share them on Twitter.

Let's describe the operation of this JavaScript:

1. **HTML Structure**: The HTML file defines the structure of the web page. It consists of a container with class `wrapper`, containing a header displaying "Quote of the Day," a section for the quote content, an area to display the author's name, and a set of buttons for various features like speech, copy, and sharing on Twitter.

2. **CSS Styling**: The CSS file (`style.css`) applies styling to the elements defined in the HTML file. It formats the layout, colors, and fonts of the web page to give it a visually appealing look.

3. **JavaScript Functionality**:
   - The JavaScript code defines several variables to store references to various DOM elements, such as the quote text, author name, buttons, etc.

   - The `randomQuote` function is responsible for fetching a random quote from the "quotable.io" API. When the "New Quote" button is clicked (`quoteBtn.addEventListener("click", randomQuote)`), this function is called. It adds a loading indicator to the button, fetches a random quote using the API, updates the quote and author content in the HTML, and then removes the loading indicator from the button.

   - The "Speech" button (`speechBtn`) allows the user to listen to the quote being spoken. When this button is clicked (`speechBtn.addEventListener("click", ...)`), a `SpeechSynthesisUtterance` object is created, combining the quote text and author name. The `speechSynthesis.speak(utterance)` method is used to start speaking the combined text. Additionally, the button's appearance changes to show a visual indicator (`speechBtn.classList.add("active")`) while the speech is in progress, and it changes back when the speech is completed (`speechSynthesis.speaking` is false).

   - The "Copy" button (`copyBtn`) allows the user to copy the quote to their clipboard. When this button is clicked (`copyBtn.addEventListener("click", ...)`), the `navigator.clipboard.writeText()` method is used to write the quote text to the clipboard.

   - The "Twitter" button (`twitterBtn`) allows the user to share the quote on Twitter. When this button is clicked (`twitterBtn.addEventListener("click", ...)`), a Twitter intent URL is constructed with the quote text (`quoteText.innerText`) as the message. The `window.open()` method is then used to open this URL in a new tab.

4. **API Interaction**: The application fetches random quotes from the "quotable.io" API. When the page loads, the `randomQuote` function is called to display an initial random quote. Subsequently, clicking the "New Quote" button fetches and displays new random quotes.

5. **Icons and Button Interactions**: The application uses Font Awesome icons to represent various functionalities, such as speaking, copying, and sharing. The icons change appearance (color) when hovered over or when certain actions (speech synthesis) are in progress.

Overall, this JavaScript code powers a simple web application that allows users to explore random quotes, listen to the quotes, copy them, and share them on Twitter.

> - In this exercise, what API was used? how it functions
In this exercise, the API used is the "quotable.io" API. The quotable.io API is a free API that provides a collection of quotes from various authors. Developers can use this API to fetch random quotes, search for specific quotes, or retrieve quotes by author or tag.

How it functions:

1. **API Endpoint**: The JavaScript code makes an HTTP GET request to the "quotable.io" API's endpoint `http://api.quotable.io/random` to fetch a random quote.

2. **Random Quote Request**: When the "New Quote" button is clicked (`quoteBtn.addEventListener("click", randomQuote)`), the `randomQuote` function is called. Within this function, the button's appearance is updated to show a loading state, and the button text is changed to "Loading Quote...".

3. **API Response**: The fetch function sends a GET request to the API endpoint, and the API responds with a JSON object containing the random quote and its associated data, such as the quote content and the author's name.

4. **Displaying the Quote**: After receiving the API response, the JavaScript code extracts the quote content and author's name from the JSON object. It then updates the corresponding elements in the HTML (`quoteText` and `authorName`) to display the fetched quote.

5. **Loading Indicator**: Once the quote is displayed, the loading indicator is removed, and the "New Quote" button text is restored.

The quotable.io API serves as a convenient source of random quotes for the "Random Quote Generator" web application. By making requests to this API, the application can display fresh quotes each time the "New Quote" button is clicked, giving users a dynamic and engaging experience. Additionally, this API is free to use, which makes it accessible to developers looking to add a random quote feature to their projects without having to maintain a large quote database themselves.

> - Please use the Twitter icon to post a quote. Explain what happened and how it happened?
To use the Twitter icon to post a quote, you would need to click on the Twitter icon (`.twitter`) present on the web page. This action triggers an event listener (`twitterBtn.addEventListener("click", ...)`), which executes the following code:

```javascript
twitterBtn.addEventListener("click", () => {
    let tweetUrl = `https://twitter.com/intent/tweet?url=${quoteText.innerText}`;
    window.open(tweetUrl, "_blank");
});
```

Explanation of what happened and how it happened:

1. **Click Event**: When the Twitter icon is clicked, the event listener attached to the Twitter button is triggered.

2. **URL Generation**: The JavaScript code inside the event listener constructs a URL (`tweetUrl`) using a template literal. It includes the URL of the web page and the quote text as a parameter.

   - `quoteText.innerText`: This retrieves the content of the HTML element with the class `.quote`, which contains the current quote text.

   - The generated URL will look something like this: `https://twitter.com/intent/tweet?url=QUOTE_TEXT`.

3. **Window Open**: The `window.open()` method is then used to open a new browser window or tab. The `tweetUrl` is passed as the URL for the new window, and `"_blank"` indicates that the new window should be opened in a new tab.

4. **Twitter Intent**: The generated URL is a Twitter intent URL. Twitter intent URLs allow you to create pre-populated tweets, messages, or actions for users to engage with. In this case, the URL includes the quote text as a parameter in the intent, which means when the user clicks on the link, Twitter's compose tweet screen will open with the quote text pre-filled in the tweet box.

5. **Twitter Interaction**: When the new tab opens with the Twitter compose tweet screen, the user can review the pre-filled quote and can make any additional edits if desired before posting it to their Twitter account.

In summary, clicking the Twitter icon on the web page opens a new tab with the Twitter compose tweet screen, pre-filling it with the current quote text. This allows users to easily share the quote on their Twitter account with just a few clicks.




Group:
1. Name: AMMAR IBRAHIM BIN MOHAMED, Matrix No: SX220326ECJH, Github ID: ammaribrahim95
2. Name: SHANMUGADHARSHINI A/P MURALI Matrix No: SX201656ECRHF04, Github ID: Shan9821
3. Name: LOGESWARY A/P KRISHNAMOORTHY, Matrix No: SX211705ECRHF04, Github ID: Logeswary98
4. Name: ADAM SHAH BIN MOHD FAIZAL, Matrix No: SX190401CSJS04 , Github ID: adamshahmf