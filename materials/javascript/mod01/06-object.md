<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Objects


In JavaScript, an object is a data structure that can store data and methods. It is an instance of a class, which is a blueprint for creating objects with specific properties and behaviors. 

Objects in JavaScript are used to represent real-world entities or concepts, and they can be created using object literals or constructor functions. Object literals are a simple and concise way of creating objects using curly braces {} and key-value pairs, whereas constructor functions are used to create objects with more complex behaviors and properties.

An object in JavaScript can have properties, which are key-value pairs that store data, and methods, which are functions that can be called on the object. Properties can store any type of data, including strings, numbers, arrays, and other objects. Methods can manipulate the object's properties or perform other operations.

Objects in JavaScript are dynamic, which means that properties and methods can be added, deleted, or modified at any time. They also support inheritance, which allows objects to inherit properties and methods from other objects.

Overall, objects in JavaScript are a powerful tool for organizing and manipulating data and behavior, and they are used extensively in web development, data processing, and other programming domains.

Sure! Here is a table of common types of objects in JavaScript, along with their description and an example code snippet:

| Type | Description | Example |
| ---- | ----------- | ------- |
| Object | The most basic type of object, which stores key-value pairs of data and methods. | 
```javascript
const person = {
  firstName: "John",
  lastName: "Doe",
  age: 30,
  greet: function() {
    console.log(`Hello, my name is ${this.firstName} ${this.lastName} and I'm ${this.age} years old.`);
  }
};
```
| Array | An object that stores an ordered list of values. | 
```javascript
const fruits = ["apple", "banana", "orange"];
console.log(fruits[1]); // "banana"
```
| String | An object that represents a sequence of characters. |
```javascript
const greeting = "Hello, world!";
console.log(greeting.length); // 13
```
| Number | An object that represents a numeric value. |
```javascript
const num = 42;
console.log(num.toString()); // "42"
```
| Boolean | An object that represents a boolean value (`true` or `false`). |
```javascript
const isReady = true;
console.log(!isReady); // false
```
| Function | An object that represents a callable block of code. |
```javascript
function addNumbers(a, b) {
  return a + b;
}
console.log(addNumbers(2, 3)); // 5
```
| Date | An object that represents a date and time. |
```javascript
const now = new Date();
console.log(now.getFullYear()); // current year
```
| RegExp | An object that represents a regular expression pattern. |
```javascript
const pattern = /hello/gi;
console.log(pattern.test("Hello, world!")); // true
```

These are just a few examples of the many types of objects in JavaScript. Each type has its own unique properties and methods for manipulating and accessing data.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
