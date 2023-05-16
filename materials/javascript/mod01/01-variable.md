<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Variables and Data Types
![Introduction to JS](webdev-js-datatypes.png)
> Sketchnote by [Tomomi Imura](https://twitter.com/girlie_mac)
> 

In JavaScript, variables are used to store data values that can be used and manipulated throughout a program. There are several different data types in JavaScript, including strings, numbers, booleans, null, undefined, and objects. Strings represent text, numbers represent numeric values, booleans represent true or false values, null represents a deliberate non-value, undefined represents an uninitialized value, and objects are complex data structures that can contain multiple values and functions. It's important to understand data types in JavaScript because they determine how values can be used and manipulated, and can affect how your program behaves. Additionally, variables in JavaScript can be declared using keywords such as var, let, and const, each with its own set of rules and behaviors. Overall, understanding variables and data types is essential to writing effective JavaScript code.

## Variables
Variables are used to store data that can be used and manipulated throughout a program. They are declared using the var, let, or const keyword, and the value of a variable can be changed throughout the program.

The var keyword was traditionally used to declare variables in JavaScript, but in more recent versions of the language, the let and const keywords have been introduced. The let keyword allows for block-level scoping, meaning that a variable declared with let can only be accessed within the block in which it was declared. The const keyword, on the other hand, declares a constant variable whose value cannot be changed once it has been set.

When declaring a variable, you can also assign an initial value to it using the = operator. For example, var myVar = "Hello World"; would declare a variable called myVar and assign it the value "Hello World".

Variables can hold data of different types, including strings, numbers, booleans, null, undefined, and objects. It's important to be aware of the data type of a variable, as it can affect how the value is used and manipulated in your code.

Overall, variables are an essential part of JavaScript programming, allowing you to store and manipulate data values throughout your program.

### How to declare and use variables in JavaScript:

```javascript
// Declare a variable using the var keyword
var message = "Hello, world!";

// Declare a variable using the let keyword
let count = 0;

// Declare a constant variable using the const keyword
const pi = 3.14159;

// Output the value of the variables
console.log(message); // Output: "Hello, world!"
console.log(count); // Output: 0
console.log(pi); // Output: 3.14159

// Change the value of the variables
message = "Welcome to my website!";
count = 1;

// Output the new values of the variables
console.log(message); // Output: "Welcome to my website!"
console.log(count); // Output: 1
```

In this example, we declare three variables using the var, let, and const keywords, and assign them initial values. We then output the values of the variables using the console.log() function, which prints the values to the browser console. Finally, we change the values of the variables and output them again to show that they can be modified throughout the program.

## Data types
In JavaScript, a data type is a classification of the type of data that can be stored and manipulated in a program. JavaScript has six primitive data types: 

| Data Type | Description | Code Example |
| --------- | ----------- | ------------ |
| `string` | Represents text data, enclosed in single or double quotes | `let message = "Hello, world!";` |
| `number` | Represents numeric values, including integers and floating-point numbers | `let count = 42;` |
| `boolean` | Represents a logical value of `true` or `false` | `let isActive = true;` |
| `null` | Represents a deliberate non-value | `let myValue = null;` |
| `undefined` | Represents an uninitialized value | `let myVar;` |
| `symbol` | Represents a unique identifier that can be used as an object key | `const mySymbol = Symbol();` |

In the `Code Example` column, we show how to declare a variable of each data type using the appropriate syntax in JavaScript.

In addition to the primitive data types, JavaScript also has an object data type, which is a complex data structure that can contain multiple values and functions.

It's important to understand data types in JavaScript because they determine how values can be used and manipulated, and can affect how your program behaves. For example, if you try to perform a mathematical operation on a string, JavaScript will attempt to convert the string to a number before performing the operation. Similarly, if you try to access a property of an object that doesn't exist, JavaScript will return the value `undefined`.

You can determine the data type of a value in JavaScript using the `typeof` operator, which returns a string indicating the type of the value. For example, `typeof "Hello, world!"` would return the string `"string"`. 

Overall, understanding data types is an essential part of writing effective JavaScript code, and can help you avoid common programming errors.

### How to use data types in JavaScript with an HTML page:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Data Types in JavaScript</title>
    <script>
      // Declare and initialize variables of different data types
      let message = "Hello, world!";
      let count = 42;
      let pi = 3.14159;
      let isActive = true;
      let myValue = null;
      let myVar;

      // Output the data types of the variables
      console.log(typeof message); // Output: "string"
      console.log(typeof count); // Output: "number"
      console.log(typeof pi); // Output: "number"
      console.log(typeof isActive); // Output: "boolean"
      console.log(typeof myValue); // Output: "object"
      console.log(typeof myVar); // Output: "undefined"

      // Use variables with different data types
      let firstName = "Dr";
      let lastName = "MSO";
      let fullName = firstName + " " + lastName;
      let num1 = 10;
      let num2 = "5";
      let sum = num1 + Number(num2);

      // Output the values of the variables to the HTML page
      document.write("<p>" + fullName + "</p>");
      document.write("<p>" + sum + "</p>");
    </script>
  </head>
  <body>
    <h1>Data Types in JavaScript</h1>
    <p>Open the console to view the output.</p>
  </body>
</html>

```

In this example, we use an HTML page to display the output of our JavaScript code. We declare and initialize variables of different data types using the appropriate syntax, and output the data types of the variables to the console using the `typeof` operator. We then use variables of different data types in JavaScript, including concatenating strings and converting a string to a number using the `Number()` function. Finally, we output the values of the variables to the HTML page using the `document.write()` method.

Overall, this example demonstrates how data types can be used and manipulated in JavaScript, and how the output can be displayed in an HTML page.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
