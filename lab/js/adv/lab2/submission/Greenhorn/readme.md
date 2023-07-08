# Lab 2: A Notes App

<!--
Group : GREENHORN
1. Name: AMMAR IBRAHIM BIN MOHAMED, Matrix No: SX220326ECJH, Github ID: ammaribrahim95
2. Name: SHANMUGADHARSHINI A/P MURALI Matrix No: SX201656ECRHF04, Github ID: Shan9821
3. Name: LOGESWARY A/P KRISHNAMOORTHY, Matrix No: SX211705ECRHF04, Github ID: Logeswary98
4. Name: ADAM SHAH BIN MOHD FAIZAL, Matrix No: SX190401CSJS04 , Github ID: adamshahmf
-->

Activity :
## Q1: For this application, you must create a flowchart.


## Q2: How are the three default tags displayed?
an array of initial tags (tags).

## Q3: Explain the purpose of each function used.
-(maxTags) The countTags function updates the tag count displayed on the page by subtracting the current number of tags from the maximum allowed .

-The createTag function dynamically creates and inserts HTML elements representing the tags. It removes any existing  elements, iterates through the tags array (in reverse order), and generates HTML for each tag with a corresponding removal icon. The HTML is inserted into the  element using insertAdjacentHTML, and the countTags function is called to update the tag count.
  
-The remove function is called when a tag's removal icon is clicked. It retrieves the index of the tag in the tags array, removes the tag from the array using array slicing, removes the corresponding  element from the DOM, and updates the tag count.
  
-The addTag function is triggered when a key is pressed in the input field. If the key pressed is "Enter," it retrieves the entered tag value, removes any excessive whitespace, and checks if the tag length is valid and not already in the tags array. If the conditions are met, it splits the tag value by commas (in case multiple tags are entered), adds each tag to the tags array, and calls createTag to update the UI. Finally, it clears the input field.


## Q4: How do I remove all tags?
element.parentElement.remove();