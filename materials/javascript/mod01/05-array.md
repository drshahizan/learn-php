<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Arrays
In JavaScript, an array is a collection of values that can hold any type of data, including numbers, strings, objects, and even other arrays. Arrays are used to store and manipulate multiple values in a single variable.

## Create an array 
To create an array in JavaScript, you can use the array literal notation, which consists of square brackets and a list of values separated by commas:

```javascript
const myArray = [1, 2, 3, "four", true];
```

You can also create an empty array and add elements to it later:

```javascript
const myArray = [];
myArray.push("apple");
myArray.push("banana");
```
## Access the elements of an array
To access the elements of an array, you can use the index of the element, which starts at 0.

```javascript
const myArray = ["apple", "banana", "orange"];
console.log(myArray[0]); // "apple"
console.log(myArray[2]); // "orange"
```
## Modify the elements of an array
You can also modify the elements of an array by assigning a new value to a specific index:

```javascript
const myArray = ["apple", "banana", "orange"];
myArray[1] = "pear";
console.log(myArray); // ["apple", "pear", "orange"]
```
## Built-in methods 
Arrays have a number of built-in methods that you can use to manipulate and work with them, such as `push()`, `pop()`, `shift()`, `unshift()`, `slice()`, `splice()`, `concat()`, `sort()`, `reverse()`, and `forEach()`. These methods allow you to add, remove, and modify elements in an array, as well as perform operations on each element.

```javascript
const fruits = ["apple", "banana", "orange"];

fruits.push("grape"); // adds "grape" to the end of the array
fruits.pop(); // removes the last element ("grape") from the array
fruits.shift(); // removes the first element ("apple") from the array
fruits.unshift("kiwi"); // adds "kiwi" to the beginning of the array

console.log(fruits.slice(1, 3)); // ["banana", "orange"]
fruits.splice(1, 1, "pear", "pineapple"); // removes one element at index 1 and inserts "pear" and "pineapple"
console.log(fruits); // ["kiwi", "pear", "pineapple", "orange"]

const moreFruits = ["grape", "watermelon"];
const allFruits = fruits.concat(moreFruits); // concatenates two arrays
console.log(allFruits); // ["kiwi", "pear", "pineapple", "orange", "grape", "watermelon"]

allFruits.sort(); // sorts the elements in alphabetical order
console.log(allFruits); // ["kiwi", "orange", "pear", "pineapple", "grape", "watermelon"]

allFruits.reverse(); // reverses the order of the elements
console.log(allFruits); // ["watermelon", "grape", "pineapple", "pear", "orange", "kiwi"]

allFruits.forEach(function(fruit) {
  console.log(fruit);
}); // logs each element in the array to the console
```

## Code
An example of an HTML file with a JavaScript array and some functions that manipulate the array:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>JavaScript Arrays Example</title>
  </head>
  <body>
    <h1>JavaScript Arrays Example</h1>
    <p>Click the buttons to manipulate the array:</p>
    <button onclick="addFruit()">Add Fruit</button>
    <button onclick="removeLast()">Remove Last Fruit</button>
    <button onclick="showLength()">Show Length</button>
    <ul id="fruitList"></ul>
    <script>
      // Define an array of fruits
      const fruits = ["apple", "banana", "orange"];

      // Function to add a new fruit to the array
      function addFruit() {
        const newFruit = prompt("Enter a new fruit:");
        fruits.push(newFruit);
        showFruits();
      }

      // Function to remove the last fruit from the array
      function removeLast() {
        fruits.pop();
        showFruits();
      }

      // Function to show the length of the array
      function showLength() {
        alert("The length of the array is: " + fruits.length);
      }

      // Function to display the fruits in the array
      function showFruits() {
        const fruitList = document.getElementById("fruitList");
        fruitList.innerHTML = "";
        fruits.forEach(function(fruit) {
          const li = document.createElement("li");
          li.textContent = fruit;
          fruitList.appendChild(li);
        });
      }

      // Call the showFruits function to display the initial array
      showFruits();
    </script>
  </body>
</html>
```

In this example, we first define an array of fruits (`const fruits = ["apple", "banana", "orange"];`) and then create three functions that manipulate the array:

- `addFruit()`: Prompts the user to enter a new fruit and adds it to the end of the array using the `push()` method. Then it calls the `showFruits()` function to display the updated array.

- `removeLast()`: Removes the last fruit from the array using the `pop()` method. Then it calls the `showFruits()` function to display the updated array.

- `showLength()`: Shows an alert with the length of the array using the `length` property.

We also define a `showFruits()` function that displays the fruits in the array as an unordered list on the web page. It first clears any existing list items (`fruitList.innerHTML = "";`), then loops through the array using the `forEach()` method to create a new list item for each fruit and append it to the unordered list.

Finally, we call the `showFruits()` function once at the end of the script to display the initial array on the web page.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
