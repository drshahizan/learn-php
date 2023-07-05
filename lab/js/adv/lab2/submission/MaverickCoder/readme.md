# Lab 2: A Notes App

<!--
            JavaScript adv: Lab 2
            Group:
            1. Name: SITI DZIN NORSYAFIKA BINTI MOHD ISA, Matrix No: SX220330ECJHS04, Github ID: dzinsyafika97
            2. Name: MOHAMED HARIS BIN MOHAMED MAZLAN, Matrix No: SX221954ECJHF04, Github ID: harismazlan
            3. Name: EL INSYIRAAH FATHIN BINTI AMIRUDDIN, Matrix No: SX22034ECJHS04, Github ID: elleamyr
            4. Name: MUHAMMAD FAIZ FITRI BIN MOHD NOH, Matrix No: SX220354ECJHS04, Github ID: AshuraRin
-->

Activity 🏆 :
## Q1: For this application, you must create a flowchart.
Ans:
![flowchart-todo-app](http://www.plantuml.com/plantuml/png/TSzDJkmm40JWlKzHcbLoXPV56mHhDi01J5mPB1ptoDr1pEs97NuoGgpzTLNvgEQBBNDo5YqHDo7WqPyK9hWNetCDk7zFoW9bucWAZop6QlpgRVM3YnEwUl696Fxti1TcT1Tgxu0jOannV5L8nk6hwu3dnKpoKD5Tr7Fob_thBC6duJk1sLYqjIBcsW7Zks6AJA6nsv-E1__6VNvTMLEtbDyZr-jQtC9DsZVhsMwOBkD8LSnKzQVsogH4bwM_bYn5ofNB8Kvkh_-ocrIJipioXsLE7m00)
## Q2: How are the three default tags displayed?
Ans:an array of initial tags (tags).

## Q3: Explain the purpose of each function used.
Ans:
-The countTags function updates the tag count displayed on the page by subtracting the current number of tags from the maximum allowed (maxTags).

-The createTag function dynamically creates and inserts HTML elements representing the tags. It removes any existing  elements, iterates through the tags array (in reverse order), and generates HTML for each tag with a corresponding removal icon. The HTML is inserted into the  element using insertAdjacentHTML, and the countTags function is called to update the tag count.
  
-The remove function is called when a tag's removal icon is clicked. It retrieves the index of the tag in the tags array, removes the tag from the array using array slicing, removes the corresponding  element from the DOM, and updates the tag count.
  
-The addTag function is triggered when a key is pressed in the input field. If the key pressed is "Enter," it retrieves the entered tag value, removes any excessive whitespace, and checks if the tag length is valid and not already in the tags array. If the conditions are met, it splits the tag value by commas (in case multiple tags are entered), adds each tag to the tags array, and calls createTag to update the UI. Finally, it clears the input field.


## Q4: How do I remove all tags?
Ans:
element.parentElement.remove();

