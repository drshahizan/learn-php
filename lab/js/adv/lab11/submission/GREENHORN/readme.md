# Lab 11: A Quiz App with Timer

> Activity 🏆 :
> - What are the functions of question.js and script.js?

The question.js file contains an array of quiz questions, including their options and correct answers. It serves as a data source for the quiz questions.
The script.js file contains the logic and functionality for the quiz application. It handles user interactions, displays questions and options, tracks the user's score, and manages the flow of the quiz.


> - Try adding quiz questions to the list of ten questions.

To add additional quiz questions, you can simply append new question objects to the questions array in the question.js file. Each question object should have the following structure:
```js
{
  numb: [question_number],
  question: "[question_text]",
  answer: "[correct_answer]",
  options: ["option1", "option2", "option3", "option4"]
}
```
Make sure to update the numb property with a unique number for each question, incrementing it in the sequence. Add as many question objects as needed to the questions array.


> - How to change Response Time to 30 Seconds.

To change the response time to 30 seconds, you need to update the timeValue variable in the script.js file. Look for the line that initializes timeValue and modify it as follows:
```js
let timeValue = 30;
```
By changing the value of timeValue to 30, you are setting the response time to 30 seconds.


> - Where are the scores saved?

The provided code does not save the scores permanently. The userScore variable keeps track of the user's score during the current quiz session. Once the quiz is completed, the score is displayed in the result box. However, the scores are not saved or stored beyond the current session.


> - What happens when you click the Quiz replay button?

When you click the quiz replay button, the quiz is reset to its initial state. The restart_quiz click event handler is triggered, which hides the result box, shows the quiz box, resets the necessary variables (timeValue, que_count, que_numb, userScore, widthValue), displays the first question, starts the timer, and shows the question counter. Essentially, it restarts the quiz, allowing the user to attempt it again.


> - What are the css/all.min.css files for?

The css/all.min.css file is most likely a CSS file that includes all the necessary styles for using Font Awesome icons. Font Awesome is a popular library of icons that can be used in web development. The all.min.css file contains the CSS styles required to display the Font Awesome icons used in the quiz application.


Group:
1. Name: AMMAR IBRAHIM BIN MOHAMED, Matrix No: SX220326ECJH, Github ID: ammaribrahim95
2. Name: SHANMUGADHARSHINI A/P MURALI Matrix No: SX201656ECRHF04, Github ID: Shan9821
3. Name: LOGESWARY A/P KRISHNAMOORTHY, Matrix No: SX211705ECRHF04, Github ID: Logeswary98
4. Name: ADAM SHAH BIN MOHD FAIZAL, Matrix No: SX190401CSJS04 , Github ID: adamshahmf