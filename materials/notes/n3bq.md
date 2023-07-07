<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Flearn-php&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# JavaScript: Event & Form Validation

## Set B
Please answer the following 50 multiple-choice questions to test your knowledge in Event & Form Validation. You must place your answer file in the submission folder. Within the [`submission/Q3/set_b`](./submission/Q3/set_b) folder, create a folder called your `github_id`. 


1. Which method is used to attach an event handler to an HTML element in JavaScript?
   - a) `addEventListener`
   - b) `attachEvent`
   - c) `onEvent`
   - d) `bindEvent`

2. What is the output of the following code snippet?

   ```javascript
   document.getElementById('myButton').addEventListener('click', function() {
     console.log('Button clicked');
   });
   ```
   - a) It attaches a click event handler to the element with the ID `myButton`.
   - b) It logs 'Button clicked' to the console when the button is clicked.
   - c) Both a) and b) are correct.
   - d) None of the above.

3. How do you prevent the default behavior of an HTML element's event in JavaScript?
   - a) `event.defaultPrevented = true;`
   - b) `event.preventDefault();`
   - c) `event.stopDefault();`
   - d) `event.prevent();`

4. What is the purpose of the `event.stopPropagation()` method in JavaScript?
   - a) To prevent event bubbling.
   - b) To cancel the event.
   - c) To stop the event from being captured.
   - d) To stop the event from propagating to parent elements.

5. What is the output of the following code snippet?

   ```javascript
   document.getElementById('myLink').addEventListener('click', function(event) {
     event.preventDefault();
     console.log(this.href);
   });
   ```
   - a) It prevents the default behavior of the link and logs the value of the `href` attribute.
   - b) It prevents the default behavior of the link.
   - c) It logs the value of the `href` attribute when the link is clicked.
   - d) None of the above.

6. How do you attach multiple event handlers to an HTML element in JavaScript?
   - a) Using the `attachEvents` method.
   - b) Using the `addEventListener` method multiple times.
   - c) By passing an array of event handlers to the `addEventListener` method.
   - d) Only one event handler can be attached to an HTML element.

7. What is the output of the following code snippet?

   ```javascript
   document.getElementById('myInput').addEventListener('keydown', function(event) {
     console.log(event.key);
   });
   ```
   - a) It logs the value of the key that was pressed.
   - b) It logs the ASCII code of the key that was pressed.
   - c) It logs the event object.
   - d) None of the above.

8. How do you remove an event handler from an HTML element in JavaScript?
   - a) `removeEventListener`
   - b) `detachEvent`
   - c) `unbindEvent`
   - d) `offEvent`

9. What is the purpose of the `event.target` property in JavaScript?
   - a) To access the element on which the event was triggered.
   - b) To access the parent element of the event target.
   - c) To access the next sibling element of the event target.
   - d) To access the previous sibling element of the event target.

10. What is the output of the following code snippet?

    ```javascript
    document.getElementById('myForm').addEventListener('submit', function(event) {
      event.preventDefault();
      console.log('Form submitted');
    });
    ```
    - a) It prevents the default behavior of the form submission and logs 'Form submitted' to the console.
    - b) It prevents the default behavior of the form submission.
    - c) It logs 'Form submitted' to the console when the form is submitted.
    - d) None of the above.

11. How do you validate a required input field in a form using JavaScript?
    - a) Check if the input field's value is empty.
    - b) Check if the input field's value is null.
    - c) Check if the input field's value is undefined.
    - d) All of the above.

12. What is the output of the following code snippet?

    ```javascript
    var emailInput = document.getElementById('email');
    emailInput.addEventListener('blur', function(event) {
      var value = event.target.value;
      if (!value.includes('@')) {
        event.target.classList.add('error');
        console.log('Invalid email address');
      }
    });
    ```
    - a) It adds an error class to the email input if the value does not contain an '@' symbol and logs 'Invalid email address' to the console.
    - b) It adds an error class to the email input if the value does not contain an '@' symbol.
    - c) It logs 'Invalid email address' to the console when the email input loses focus.
    - d) None of the above.

13. How do you dynamically update the contents of a select element in JavaScript?
    - a) Manipulate the options array of the select element.
    - b) Use the `appendChild` method to add new options.
    - c) Use the `innerHTML` property to update the HTML markup of the select element.
    - d) All of the above.

14. What is the purpose of the `input` event in JavaScript?
    - a) To detect changes to an input element's value.
    - b) To detect when an input element gains focus.
    - c) To detect when an input element loses focus.
    - d) To detect when a key is pressed inside an input element.

15. What is the output of the following code snippet?

    ```javascript
    var checkbox = document.getElementById('myCheckbox');
    checkbox.addEventListener('change', function(event) {
      console.log(event.target.checked);
    });
    ```
    - a) It logs `true` or `false` based on whether the checkbox is checked or not.
    - b) It logs the value of the checkbox element.
    - c) It logs `true` when the checkbox is checked and `false` when it is unchecked.
    - d) None of the above.

16. How do you prevent form submission if the input fields are not valid using JavaScript?
    - a) Use the `event.preventDefault()` method inside the form's submit event handler.
    - b) Set the form's `onsubmit` attribute to return `false`.
    - c) Both a) and b) are correct.
    - d) None of the above.

17. What is the purpose of the `focus` event in JavaScript?
    - a) To detect when an element gains focus.
    - b) To detect when an element loses focus.
    - c) To detect changes to an input element's value.
    - d) To detect when a key is pressed inside an input element.

18. What is the output of the following code snippet?

    ```javascript
    var passwordInput = document.getElementById('password');
    passwordInput.addEventListener('input', function(event) {
      var value = event.target.value;
      if (value.length < 8) {
        event.target.setCustomValidity('Password must be at least 8 characters long.');
      } else {
        event.target.setCustomValidity('');
      }
    });
    ```
    - a) It sets a custom validation message on the password input if the password is less than 8 characters long.
    - b) It clears the custom validation message on the password input if the password is at least 8 characters long.
    - c) It sets a custom validity state on the password input based on its length.
    - d) None of the above.

19. How do you trigger an event programmatically using JavaScript?
    - a) Use the `dispatchEvent` method.
    - b) Use the `triggerEvent` method.
    - c) Use the `fireEvent` method.
    - d) Use the `emitEvent` method.

20. What is the purpose of the `keyup` event in JavaScript?
    - a) To detect when a key is released after being pressed inside an input element.
    - b) To detect when a key is pressed inside an input element.
    - c) To detect when an element gains focus.
    - d) To detect when an element loses focus.

21. What is the output of the following code snippet?

    ```javascript
    var form = document.getElementById('myForm');
    form.addEventListener('invalid', function(event) {
      event.preventDefault();
      console.log('Form is invalid');
    }, true);
    ```
    - a) It prevents the default behavior of the form submission and logs 'Form is invalid' to the console.
    - b) It logs 'Form is invalid' to the console when the form is submitted with invalid inputs.
    - c) It prevents the default behavior of the form submission.
    - d) None of the above.

22. How do you check if an input element's value is valid using JavaScript?
    - a) Use the `validity.valid` property.
    - b) Use the `checkValidity()` method.
    - c) Both a) and b) are correct.
    - d) None of the above.

23. What is the purpose of the `change` event in JavaScript?
    - a) To detect changes to an input element's value.
    - b) To detect when an input element gains focus.
    - c) To detect when an input element loses focus.
    - d) To detect when a key is pressed inside an input element.

24. What is the output of the following code snippet?

    ```javascript
    var select = document.getElementById('mySelect');
    select.addEventListener('change', function(event) {
      console.log(event.target.value);
    });
    ```
    - a) It logs the selected value of the select element.
    - b) It logs the index of the selected option in the select element.
    - c) It logs the event object.
    - d) None of the above.

25. How do you prevent form submission if any of the input fields are empty using JavaScript?
    - a) Iterate through all input fields and check if any of their values are empty.
    - b) Use the `required` attribute on input fields.
    - c) Both a) and b) are correct.
    - d) None of the above.

26. What is the purpose of the `submit` event in JavaScript?
    - a) To detect when a form is submitted.
    - b) To detect changes to an input element's value.
    - c) To detect when an input element gains focus.
    - d) To detect when an input element loses focus.

27. What is the output of the following code snippet?

    ```javascript
    var checkbox = document.getElementById('myCheckbox');
    checkbox.addEventListener('click', function(event) {
      console.log(event.target.checked);
    });
    ```
    - a) It logs `true` or `false` based on whether the checkbox is clicked or not.
    - b) It logs the value of the checkbox element.
    - c) It logs `true` when the checkbox is clicked and `false` when it is clicked again.
    - d) None of the above.

28. How do you check if an input element's value matches a specific pattern using JavaScript?
    - a) Use the `pattern` attribute on the input element.
    - b) Use the `test()` method of a regular expression with the input element's value as the argument.
    - c) Both a) and b) are correct.
    - d) None of the above.

29. What is the output of the following code snippet?

    ```javascript
    var textarea = document.getElementById('myTextarea');
    textarea.addEventListener('input', function(event) {
      console.log(event.target.value.length);
    });
    ```
    - a) It logs the length of the text in the textarea whenever it changes.
    - b) It logs the event object.
    - c) It logs the number of lines in the textarea.
    - d) None of the above.

30. How do you disable a submit button until all required fields are filled using JavaScript?
    - a) Use the `disable` property on the submit button element.
    - b) Use the `disabled` attribute on the submit button element.
    - c) Both a) and b) are correct.
    - d) None of the above.

31. What is the purpose of the `mouseenter` event in JavaScript?
    - a) To detect when the mouse enters an element.
    - b) To detect when the mouse leaves an element.
    - c) To detect when the mouse moves inside an element.
    - d) To detect when the mouse clicks an element.

32. What is the output of the following code snippet?

    ```javascript
    var button = document.getElementById('myButton');
    button.addEventListener('mouseenter', function(event) {
      console.log('Mouse entered the button');
    });
    ```
    - a) It logs 'Mouse entered the button' to the console when the mouse enters the button.
    - b) It logs 'Mouse entered the button' to the console when the button is clicked.
    - c) It logs the event object.
    - d) None of the above.

33. How do you check if an input element's value is numeric using JavaScript?
    - a) Use the `isNaN()` function with the input element's value as the argument.
    - b) Use a regular expression to match numeric patterns with the input element's value.
    - c) Both a) and b) are correct.
    - d) None of the above.

34. What is the purpose of the `mouseout` event in JavaScript?
    - a) To detect when the mouse leaves an element.
    - b) To detect when the mouse enters an element.
    - c) To detect when the mouse moves inside an element.
    - d) To detect when the mouse clicks an element.

35. What is the output of the following code snippet?

    ```javascript
    var link = document.getElementById('myLink');
    link.addEventListener('mouseout', function(event) {
      console.log('Mouse left the link');
    });
    ```
    - a) It logs 'Mouse left the link' to the console when the mouse leaves the link.
    - b) It logs 'Mouse left the link' to the console when the link is clicked.
    - c) It logs the event object.
    - d) None of the above.

36. How do you check if all checkboxes in a group are checked using JavaScript?
    - a) Iterate through all checkboxes and check if their `checked` property is `true`.
    - b) Use the `querySelectorAll` method with a CSS selector for checkboxes.
    - c) Both a) and b) are correct.
    - d) None of the above.

37. What is the purpose of the `mousemove` event in JavaScript?
    - a) To detect when the mouse enters an element.
    - b) To detect when the mouse leaves an element.
    - c) To detect when the mouse moves inside an element.
    - d) To detect when the mouse clicks an element.

38. What is the output of the following code snippet?

    ```javascript
    var element = document.getElementById('myElement');
    element.addEventListener('mousemove', function(event) {
      console.log('Mouse moved inside the element');
    });
    ```
    - a) It logs 'Mouse moved inside the element' to the console when the mouse moves inside the element.
    - b) It logs 'Mouse moved inside the element' to the console when the element is clicked.
    - c) It logs the event object.
    - d) None of the above.

39. How do you prevent form submission if any of the checkboxes in a group are unchecked using JavaScript?
    - a) Iterate through all checkboxes and check if any of their `checked` property is `false`.
    - b) Use the `querySelectorAll` method with a CSS selector for checkboxes and check if any of their `checked` property is `false`.
    - c) Both a) and b) are correct.
    - d) None of the above.

40. What is the purpose of the `mouseleave` event in JavaScript?
    - a) To detect when the mouse leaves an element.
    - b) To detect when the mouse enters an element.
    - c) To detect when the mouse moves inside an element.
    - d) To detect when the mouse clicks an element.

41. What is the output of the following code snippet?

    ```javascript
    var element = document.getElementById('myElement');
    element.addEventListener('mouseleave', function(event) {
      console.log('Mouse left the element');
    });
    ```
    - a) It logs 'Mouse left the element' to the console when the mouse leaves the element.
    - b) It logs 'Mouse left the element' to the console when the element is clicked.
    - c) It logs the event object.
    - d) None of the above.

42. How do you check if a textarea element's value contains a specific substring using JavaScript?
    - a) Use the `includes()` method of the textarea element's value.
    - b) Use a regular expression to match the specific substring with the textarea element's value.
    - c) Both a) and b) are correct.
    - d) None of the above.

43. What is the purpose of the `keypress` event in JavaScript?
    - a) To detect when a key is pressed inside an input element.
    - b) To detect when a key is released after being pressed inside an input element.
    - c) To detect when an input element gains focus.
    - d) To detect when an input element loses focus.

44. What is the output of the following code snippet?

    ```javascript
    var input = document.getElementById('myInput');
    input.addEventListener('keypress', function(event) {
      console.log(event.key);
    });
    ```
    - a) It logs the value of the key that was pressed.
    - b) It logs the ASCII code of the key that was pressed.
    - c) It logs the event object.
    - d) None of the above.

45. How do you validate a password input field that must contain at least one uppercase letter using JavaScript?
    - a) Use the `match()` method with a regular expression that matches uppercase letters.
    - b) Use the `toUpperCase()` method on the input field's value and compare it to the original value.
    - c) Both a) and b) are correct.
    - d) None of the above.

46. What is the purpose of the `keydown` event in JavaScript?
    - a) To detect when a key is pressed inside an input element.
    - b) To detect when a key is released after being pressed inside an input element.
    - c) To detect when an input element gains focus.
    - d) To detect when an input element loses focus.

47. What is the output of the following code snippet?

    ```javascript
    var input = document.getElementById('myInput');
    input.addEventListener('keydown', function(event) {
      console.log(event.key);
    });
    ```
    - a) It logs the value of the key that was pressed.
    - b) It logs the ASCII code of the key that was pressed.
    - c) It logs the event object.
    - d) None of the above.

48. How do you check if a textarea element's value is empty using JavaScript?
    - a) Check if the textarea element's value is an empty string.
    - b) Check if the textarea element's value is `null`.
    - c) Check if the textarea element's value is `undefined`.
    - d) All of the above.

49. What is the purpose of the `keyup` event in JavaScript?
    - a) To detect when a key is released after being pressed inside an input element.
    - b) To detect when a key is pressed inside an input element.
    - c) To detect when an input element gains focus.
    - d) To detect when an input element loses focus.

50. What is the output of the following code snippet?

    ```javascript
    var input = document.getElementById('myInput');
    input.addEventListener('keyup', function(event) {
      console.log(event.key);
    });
    ```
    - a) It logs the value of the key that was released.
    - b) It logs the ASCII code of the key that was released.
    - c) It logs the event object.
    - d) None of the above.
    
## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)


