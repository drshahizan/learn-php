# Lab 4: Text To Speech

<!--
Group : GREENHORN
1. Name: AMMAR IBRAHIM BIN MOHAMED, Matrix No: SX220326ECJH, Github ID: ammaribrahim95
2. Name: SHANMUGADHARSHINI A/P MURALI Matrix No: SX201656ECRHF04, Github ID: Shan9821
3. Name: LOGESWARY A/P KRISHNAMOORTHY, Matrix No: SX211705ECRHF04, Github ID: Logeswary98
4. Name: ADAM SHAH BIN MOHD FAIZAL, Matrix No: SX190401CSJS04 , Github ID: adamshahmf
-->

Activity:
## Q1: For this application, you must create a flowchart.
![flowchart-todo-app]()

## Q2: How is select voice displayed as a dropdownlist? (Figure 4.2)
Ans:
The voices function is defined to populate the voiceList select element with available voices. It uses the synth.getVoices() method to retrieve the available voices and dynamically creates an option element for each voice, setting the value and display text based on the voice's name and language. The "Google US English" voice is initially selected.

The synth.addEventListener("voiceschanged", voices) line ensures that the voices list is updated when the available voices change.

## Q3: How does text become speech?
The textToSpeech function takes a text parameter and creates a new SpeechSynthesisUtterance object, which represents a speech request. It iterates over the available voices and assigns the selected voice to the utterance based on the value of the voiceList select element. The synth.speak(utterance) method is then called to start the speech synthesis.

## Q4: How can a voice be heard?
The voices function is defined to populate the voiceList select element with available voices. It uses the synth.getVoices() method to retrieve the available voices and dynamically creates an option element for each voice, setting the value and display text based on the voice's name and language. The "Google US English" voice is initially selected.