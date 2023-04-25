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
## built-in methods 
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

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
