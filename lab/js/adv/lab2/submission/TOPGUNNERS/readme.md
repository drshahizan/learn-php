2. How are the three default tags displayed?

-The three default tags are displayed by creating HTML elements dynamically using JavaScript and appending them to the tag container. The displayTags function is responsible for this. It retrieves the tags from the defaultTags array and creates a <span> element for each tag with appropriate classes and content.


3. Explain the purpose of each function used:

-displayTags(): This function is responsible for rendering the tags on the webpage. It retrieves the tags from the tags array and creates a <span> element for each tag, appending them to the tag container.
addTag(): This function is called when the user enters a new tag in the input field and presses the Enter key or clicks the Add button. It validates the input, checks if the tag already exists, and adds the new tag to the tags array. It then calls the displayTags function to update the UI.
removeTag(): This function is called when the user clicks the close icon (X) of a tag. It removes the corresponding tag from the tags array and calls the displayTags function to update the UI.
removeAllTags(): This function is called when the user clicks the Remove All button. It clears the tags array and calls the displayTags function to update the UI.
checkTagExists(): This function checks if a given tag already exists in the tags array. It is used in the addTag function to prevent duplicate tags from being added.

4. How do I remove all tags?

-You can remove all tags by clicking the Remove All button. This will trigger the removeAllTags function, which clears the tags array and updates the UI by calling the displayTags function. After clicking the Remove All button, all tags will be removed from the input field.
