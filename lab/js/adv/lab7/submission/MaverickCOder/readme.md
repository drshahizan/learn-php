# Lab 7: quote

Activity 🏆 :
## Q1: Describe how this JavaScript works.
Ans:
1. The code declares variables and assigns them to the corresponding elements in the HTML document using the document.querySelector() method. These variables include quoteText (representing the element with class "quote"), quoteBtn (representing the button element), authorName (representing the element with class "name"), speechBtn (representing the element with class "speech"), copyBtn (representing the element with class "copy"), twitterBtn (representing the element with class "twitter"), and synth (representing the speechSynthesis object).

2. The randomQuote() function is defined. It is responsible for fetching a random quote from the "http://api.quotable.io/random" API. Inside the function, the quoteBtn is temporarily modified to show a loading state while the quote is being fetched. Once the API response is received, the quote content and author are updated in the respective HTML elements, and the quoteBtn is reverted to its original state.

3. An event listener is added to the speechBtn element, which triggers the speech synthesis functionality when clicked. If the quoteBtn does not have the "loading" class, a new SpeechSynthesisUtterance object is created, combining the quote content and author. The speak() method of the synth (speechSynthesis) object is called with the utterance object as an argument to initiate the speech synthesis. A setInterval function is set up to continuously check if the speech synthesis is ongoing and toggle the "active" class on the speechBtn accordingly.

4. An event listener is added to the copyBtn element, which uses the navigator.clipboard.writeText() method to copy the text of the quote (quoteText.innerText) to the clipboard.

5. An event listener is added to the twitterBtn element, which constructs a tweet URL using the quote content (quoteText.innerText) and opens it in a new window using the window.open() method. This allows users to share the quote on Twitter.

6. Finally, an event listener is added to the quoteBtn element, which triggers the randomQuote() function when clicked. This fetches and displays a new random quote from the API.

## Q2: In this exercise, what API was used? how it functions
Ans:
The code uses the "http://api.quotable.io/random" API to fetch random quotes. This API provides a collection of famous quotes from various authors.

## Q3: Please use the Twitter icon to post a quote. Explain what happened and how it happened?
Ans:
1. Event Listener: The JavaScript code sets up an event listener on the twitterBtn element, which triggers a function when the button is clicked.

2. Constructing the Tweet URL: Inside the event handler function, a tweetUrl variable is created. It constructs a URL string that includes the quote content as a query parameter.

3. Opening the Tweet Intent: The window.open() method is called with the constructed tweetUrl and "_blank" as arguments. This opens a new browser window or tab (depending on the user's browser settings) with the Twitter tweet intent page.

4. Twitter Tweet Intent: The Twitter tweet intent page is a pre-filled form that allows users to compose and post a tweet. The URL passed to window.open() specifies the tweet content via the query parameter.

5. User Interaction: The user can then interact with the tweet intent page to modify the tweet if desired. They can add hashtags, mention users, or customize the tweet text before posting it.

6. Tweet Posting: Once the user is satisfied with the tweet, they can click the "Tweet" button on the tweet intent page to post it on their Twitter profile.


<!--
            JavaScript adv: Lab 7
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->