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

## Type of object in JavaScript
A brief description of each type of object in JavaScript, along with a code example:

1. **Object**: The most basic type of object in JavaScript, which stores key-value pairs of data and methods. 

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

2. **Array**: An object that stores an ordered list of values.

```javascript
const fruits = ["apple", "banana", "orange"];
console.log(fruits[1]); // "banana"
```

3. **String**: An object that represents a sequence of characters.

```javascript
const greeting = "Hello, world!";
console.log(greeting.length); // 13
```

4. **Number**: An object that represents a numeric value.

```javascript
const num = 42;
console.log(num.toString()); // "42"
```

5. **Boolean**: An object that represents a boolean value (`true` or `false`).

```javascript
const isReady = true;
console.log(!isReady); // false
```

6. **Function**: An object that represents a callable block of code.

```javascript
function addNumbers(a, b) {
  return a + b;
}
console.log(addNumbers(2, 3)); // 5
```

7. **Date**: An object that represents a date and time.

```javascript
const now = new Date();
console.log(now.getFullYear()); // current year
```

8. **RegExp**: An object that represents a regular expression pattern.

```javascript
const pattern = /hello/gi;
console.log(pattern.test("Hello, world!")); // true
```

9. **Error**: An object that represents an error message.

```javascript
try {
  // some code that might throw an error
} catch(error) {
  console.error(error.message);
}
```

10. **Math**: An object that provides mathematical constants and functions.

```javascript
console.log(Math.PI); // 3.141592653589793
console.log(Math.floor(2.99)); // 2
```

11. **JSON**: An object that provides methods for working with JSON (JavaScript Object Notation) data.

```javascript
const data = {
  name: "John",
  age: 30
};
const jsonString = JSON.stringify(data);
console.log(jsonString); // {"name":"John","age":30}
```

12. **Promise**: An object that represents a value that may not be available yet, but will be resolved at some point in the future.

```javascript
const promise = new Promise(function(resolve, reject) {
  // some async operation
  if (success) {
    resolve(result);
  } else {
    reject(error);
  }
});
promise.then(function(result) {
  console.log(result);
}).catch(function(error) {
  console.error(error);
});
```

13. **Map**: An object that stores key-value pairs, similar to an object, but with additional methods for manipulating the data.

```javascript
const map = new Map();
map.set("key1", "value1");
map.set("key2", "value2");
console.log(map.get("key1")); // "value1"
```

14. **Set**: An object that stores a collection of unique values.

```javascript
const set = new Set([1, 2, 3, 3, 4, 5]);
console.log(set.size); // 5
```

15. **WeakMap**: An object that stores key-value pairs, but with weaker references to the keys, allowing them to be garbage collected if they are no longer used.

```javascript
const weakMap = new WeakMap();
const key = {};
weakMap.set(key, "value");
console.log(weakMap.get(key)); // "value"
```

16. **WeakSet**: An object that stores a collection of weakly referenced objects.

```javascript
const weakSet = new WeakSet();
const obj = {};
weakSet.add(obj);
console.log(weakSet.has(obj)); // true
```

These are just a few examples of the many types of objects available in JavaScript. Each object has its own unique properties and methods that can be used to manipulate and interact with the data stored within it.

## Code
An example HTML file with JavaScript code that demonstrates how to create and manipulate an object in JavaScript:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Object Manipulation Example</title>
  </head>
  <body>
    <h1>Object Manipulation Example</h1>
    <p>Open the browser console to see the output.</p>
    <script>
      // Creating an object using object literal notation
      const person = {
        firstName: "Dr",
        lastName: "MSO",
        age: 30,
        greet: function () {
          console.log(
            `Hello, my name is ${this.firstName} ${this.lastName} and I'm ${this.age} years old.`
          );
        },
      };

      // Accessing object properties
      console.log(person.firstName);
      console.log(person["lastName"]);

      // Modifying object properties
      person.age = 35;
      console.log(person.age);

      // Adding new properties and methods to the object
      person.email = "drmso@example.com";
      person.sayHello = function () {
        console.log("Hello!");
      };

      // Calling object methods
      person.greet();
      person.sayHello();
    </script>
  </body>
</html>

```

This HTML file creates an object called `person` using object literal notation, which has properties for first name, last name, age, and a `greet` method that logs a greeting message to the console. The JavaScript code also demonstrates how to access object properties, modify object properties, add new properties and methods to the object, and call object methods.

To run this code, save it as a `.html` file and open it in a web browser. Open the browser console to see the output of the JavaScript code.

## Case Study
Example HTML page with JavaScript object code for a university academic course registration system

```html
<!DOCTYPE html>
<html>
<head>
  <title>Course Registration System</title>
</head>
<body>
  <h1>Course Registration System</h1>
  
  <form>
    <label for="name">Name:</label>
    <input type="text" id="name"><br><br>
    
    <label for="id">Student ID:</label>
    <input type="text" id="id"><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email"><br><br>
    
    <label for="course">Select a course:</label>
    <select id="course">
      <option value="CS101">Introduction to Computer Science</option>
      <option value="ENG101">English Composition I</option>
      <option value="HIS101">World History I</option>
    </select><br><br>
    
    <input type="button" value="Register" onclick="register()">
  </form>
  
  <script>
    // Define the Student object
    function Student(name, id, email) {
      this.name = name;
      this.id = id;
      this.email = email;
      this.courses = [];
    }
    
    // Define the Course object
    function Course(code, name, instructor) {
      this.code = code;
      this.name = name;
      this.instructor = instructor;
      this.students = [];
    }
    
    // Create some sample students and courses
    const student1 = new Student("John Smith", "12345", "jsmith@example.com");
    const student2 = new Student("Jane Doe", "67890", "jdoe@example.com");
    
    const course1 = new Course("CS101", "Introduction to Computer Science", "Dr. Smith");
    const course2 = new Course("ENG101", "English Composition I", "Dr. Johnson");
    const course3 = new Course("HIS101", "World History I", "Dr. Williams");
    
    // Add the sample students to the courses
    course1.students.push(student1);
    course2.students.push(student2);
    course3.students.push(student1, student2);
    
    // Register the student for the selected course
    function register() {
      const name = document.getElementById("name").value;
      const id = document.getElementById("id").value;
      const email = document.getElementById("email").value;
      const courseCode = document.getElementById("course").value;
      
      const student = new Student(name, id, email);
      let course;
      
      if (courseCode === "CS101") {
        course = course1;
      } else if (courseCode === "ENG101") {
        course = course2;
      } else if (courseCode === "HIS101") {
        course = course3;
      }
      
      course.students.push(student);
      
      alert("Registration successful!");
    }
  </script>
</body>
</html>
```
Sure, let me describe the coding used in the Course Registration System example.

The HTML page contains a form where the user can input their name, student ID, email, and select a course from a drop-down list. When the user clicks the "Register" button, a JavaScript function called `register()` is called. This function creates a new `Student` object with the data entered in the form, and then finds the corresponding `Course` object based on the selected course code. It then adds the newly created `Student` object to the `students` array of the selected `Course` object. Finally, the function displays an alert message indicating that the registration was successful.

The JavaScript code also defines the `Student` and `Course` objects using constructor functions. The `Student` object has properties for name, ID, email, and an array of enrolled courses. The `Course` object has properties for course code, name, instructor, and an array of enrolled students.

The `register()` function creates a new `Student` object using the data entered in the form, and finds the corresponding `Course` object based on the selected course code. It then adds the newly created `Student` object to the `students` array of the selected `Course` object. This data is stored in memory for the duration of the program, but it could be stored persistently in a database for a real-world system.

Overall, this coding example shows how JavaScript objects can be used to represent and manipulate data in a simple academic course registration system.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

