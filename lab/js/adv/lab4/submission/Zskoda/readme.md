# Lab 4: Text To Speech

Activity 🏆 :
## Q1: For this application, you must create a flowchart.
Ans:
![flowchart-todo-app](http://www.plantuml.com/plantuml/png/TSzDJkmm40JWlKzHcbLoXPV56mHhDi01J5mPB1ptoDr1pEs97NuoGgpzTLNvgEQBBNDo5YqHDo7WqPyK9hWNetCDk7zFoW9bucWAZop6QlpgRVM3YnEwUl696Fxti1TcT1Tgxu0jOannV5L8nk6hwu3dnKpoKD5Tr7Fob_thBC6duJk1sLYqjIBcsW7Zks6AJA6nsv-E1__6VNvTMLEtbDyZr-jQtC9DsZVhsMwOBkD8LSnKzQVsogH4bwM_bYn5ofNB8Kvkh_-ocrIJipioXsLE7m00)
## Q2: How is select voice displayed as a dropdownlist? (Figure 4.2)
Ans:
The voices function is defined to populate the voiceList select element with available voices. It uses the synth.getVoices() method to retrieve the available voices and dynamically creates an option element for each voice, setting the value and display text based on the voice's name and language. The "Google US English" voice is initially selected.

The synth.addEventListener("voiceschanged", voices) line ensures that the voices list is updated when the available voices change.

## Q3: How does text become speech?
Ans:
The textToSpeech function takes a text parameter and creates a new SpeechSynthesisUtterance object, which represents a speech request. It iterates over the available voices and assigns the selected voice to the utterance based on the value of the voiceList select element. The synth.speak(utterance) method is then called to start the speech synthesis.

## Q4: How can a voice be heard?
Ans:
The voices function is defined to populate the voiceList select element with available voices. It uses the synth.getVoices() method to retrieve the available voices and dynamically creates an option element for each voice, setting the value and display text based on the voice's name and language. The "Google US English" voice is initially selected.

### Team zSkoda:
1.Mohd Noor Hafiz
2.Ikhmal Syazreel
3.
4.
