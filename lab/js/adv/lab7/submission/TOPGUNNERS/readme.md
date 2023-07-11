Describe how this JavaScript works:

-The JavaScript code in this Random Quote Generator project fetches random quotes from the quotable API and displays them on the webpage. It utilizes the fetch API to make a GET request to the quotable API and retrieve a random quote. The received quote data is then parsed and displayed in the appropriate HTML elements. The code also incorporates functionality for text-to-speech (TTS), copying the quote and sharing the quote on Twitter using various JavaScript methods and properties.

In this exercise, what API was used? How does it function?

-The API used in this exercise is the quotable API. The quotable API is a free API that provides a collection of random quotes. It allows developers to make GET requests to retrieve random quotes, specify the number of quotes, and filter quotes by tags or authors. By making a request to the API's endpoint, developers can receive JSON data containing random quotes, which can then be used in the application.


Please use the Twitter icon to post a quote. Explain what happened and how it happened?

-When the Twitter icon is clicked in the Random Quote Generator, it triggers an event handler in the JavaScript code. Inside the event handler, the quote text is extracted from the displayed quote. The extracted quote text is then encoded and appended to the Twitter share URL, along with the appropriate hashtags and additional message if needed. Finally, the window.open() method is used to open the constructed Twitter share URL in a new browser tab. This allows the user to share the quote on Twitter, pre populating the tweet with the quote text and any other desired content.
