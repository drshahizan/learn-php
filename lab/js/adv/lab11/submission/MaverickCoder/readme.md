# Lab 11: A Notes App

Activity 🏆 :
## Q1: What are the functions of question.js and script.js?
Ans:

1. showQuestions(index): This function displays the question and options based on the given index. It retrieves the question and options from the "questions" array and updates the HTML elements accordingly.
2. optionSelected(answer): This function is called when the user selects an option. It compares the selected option with the correct answer, updates the user score, and provides visual feedback to the user by highlighting the selected option and displaying tick or cross icons.
3. showResult(): This function is called when the quiz is completed. It hides the quiz box and shows the result box. It calculates the user's score and displays a message based on the score.
4. startTimer(time): This function starts a countdown timer for each question. It updates the timer element every second and handles the time expiration event.
5. startTimerLine(time): This function updates a timer line element to indicate the remaining time visually.
6. queCounter(index): This function updates the question counter element to display the current question number out of the total number of questions.

## Q2: Try adding quiz questions to the list of ten questions.
Ans:

{
numb: 6,
    question: "Your Question is Here",
    answer: "Correct answer of the question is here",
    options: [
      "Option 1",
      "option 2",
      "option 3",
      "option 4"
    ]
},

## Q3: How to change Response Time to 30 Seconds.
Ans:

1. In the start_btn.onclick event handler function, locate the line startTimer(15); and change the value 15 to 30. This will set the initial timer value to 30 seconds.

2. In the startTimer function, locate the line counter = setInterval(timer, 1000); and change the value 1000 to 1000 * 30. This will change the timer interval from 1 second to 30 seconds.

// if continueQuiz button clicked
continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.add("activeQuiz"); //show quiz box
    showQuetions(0); //calling showQestions function
    queCounter(1); //passing 1 parameter to queCounter
    startTimer(15); //calling startTimer function
    startTimerLine(0); //calling startTimerLine function
}

function startTimer(time){
    counter = setInterval(timer, 1000 * time);
... }

## Q4: Where are the scores saved?
Ans:
In the provided code, the user's score is stored in the userScore variable. The userScore variable is initially set to 0 and is updated whenever the user selects the correct answer to a question. The score is incremented by 1 for each correct answer.

The userScore variable is used in the showResult function to display the final score to the user in the result box. Depending on the score, different messages are displayed to the user.
   
## Q5: What happens when you click the Quiz replay button?
Ans:

"Quiz replay" button is designed to allow the user to restart or play the quiz again from the beginning. 

## Q6: What are the css/all.min.css files for?
Ans:
The file css/all.min.css is commonly associated with the Font Awesome icon library. Font Awesome is a popular collection of scalable vector icons that can be used in web development. The all.min.css file is a compressed and minified CSS file that contains the styles necessary to display and render the Font Awesome icons.

<!--
            JavaScript adv: Lab 11
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->