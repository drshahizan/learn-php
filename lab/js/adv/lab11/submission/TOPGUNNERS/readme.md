Lab 11: A Notes App
Activity 🏆 :

Q1: What are the functions of question.js and script.js?
Ans:
question.js: This file contains functions and data related to handling quiz questions. It defines the Question object constructor that represents a single question. The Question object includes properties such as the question text, options, and the correct answer. Additionally, the file may include functions for manipulating and retrieving quiz questions.

script.js: This file is the main script for the quiz application. It handles the overall flow of the quiz, including displaying different sections of the quiz (info box, quiz box, result box), managing the timer, handling user interactions and responses, calculating scores, and controlling the navigation between questions.

Q2: Try adding quiz questions to the list of ten questions.
Ans:

{ numb: 6, question: "Your Question is Here", answer: "Correct answer of the question is here", options: [ "Option 1", "option 2", "option 3", "option 4" ] },

Q3: How to change Response Time to 30 Seconds.
Ans:
To change the response time to 30 seconds, open the script.js file and locate the variable that represents the timer duration (e.g., const TIMER_DURATION = 15;). Change the value of the variable to 30 to set the response time to 30 seconds. Save the file, and the quiz will now have a response time of 30 seconds for each question.

Q4: Where are the scores saved?
Ans: In the provided code, the user's score is stored in the userScore variable. The userScore variable is initially set to 0 and is updated whenever the user selects the correct answer to a question. The score is incremented by 1 for each correct answer.

The userScore variable is used in the showResult function to display the final score to the user in the result box. Depending on the score, different messages are displayed to the user.

Q5: What happens when you click the Quiz replay button?
Ans:

"Quiz replay" button is designed to allow the user to restart or play the quiz again from the beginning.

Q6: What are the css/all.min.css files for?
Ans: The file css/all.min.css is commonly associated with the Font Awesome icon library. Font Awesome is a popular collection of scalable vector icons that can be used in web development. The all.min.css file is a compressed and minified CSS file that contains the styles necessary to display and render the Font Awesome icons.
