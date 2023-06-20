<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Flearn-php&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# Operators and Expressions

In JavaScript, operators are symbols that perform actions on values or variables. There are arithmetic operators (+, -, *, /, %), assignment operators (=, +=, -=, *=, /=, %=), comparison operators (==, !=, ===, !==, >, <, >=, <=), logical operators (&&, ||, !), bitwise operators (&, |, ^, ~, <<, >>, >>>), and others. Expressions are combinations of values, variables, and operators that are evaluated to produce a single value. They can be simple (such as a single variable) or complex (such as a combination of multiple operators and variables). Understanding operators and expressions is crucial for writing effective and efficient JavaScript code.

## Operators
Operators are symbols or keywords that perform actions on one or more operands (values or variables) and produce a result. Arithmetic operators are used to perform basic mathematical operations, such as addition, subtraction, multiplication, division, and modulus (remainder) operations. Assignment operators are used to assign values to variables or modify existing values. Comparison operators are used to compare two values or variables and return a Boolean value (true or false) depending on the comparison result. Logical operators are used to combine two or more conditions and return a Boolean value based on the result of the conditions. Bitwise operators are used to manipulate the binary representation of values.

Operators play a crucial role in JavaScript programming as they help to perform various operations on values and variables. Understanding how to use and combine operators is essential for writing effective and efficient JavaScript code.

### 1. Arithmetic Operators

| Operator | Description | Code Example |
|----------|-------------|--------------|
| +        | Addition    | `let a = 5 + 3;` (a will be 8) |
| -        | Subtraction | `let b = 10 - 2;` (b will be 8) |
| *        | Multiplication | `let c = 2 * 6;` (c will be 12) |
| /        | Division | `let d = 20 / 5;` (d will be 4) |
| %        | Modulus (remainder) | `let e = 17 % 5;` (e will be 2) |

### 2. Assignment Operators

| Operator | Description | Code Example |
|----------|-------------|--------------|
| =        | Assignment | `let f = 3;` (f will be 3) |
| +=       | Addition assignment | `let g = 4; g += 2;` (g will be 6) |
| -=       | Subtraction assignment | `let h = 7; h -= 3;` (h will be 4) |
| *=       | Multiplication assignment | `let i = 2; i *= 4;` (i will be 8) |
| /=       | Division assignment | `let j = 20; j /= 5;` (j will be 4) |
| %=       | Modulus assignment | `let k = 17; k %= 5;` (k will be 2) |

### 3. Comparison Operators

| Operator | Description | Code Example |
|----------|-------------|--------------|
| ==       | Equality comparison | `let l = 5; let m = '5'; if (l == m) { ... }` |
| !=       | Inequality comparison | `let n = 6; let o = '5'; if (n != o) { ... }` |
| ===      | Strict equality comparison | `let p = 5; let q = '5'; if (p === q) { ... }` |
| !==      | Strict inequality comparison | `let r = 6; let s = '5'; if (r !== s) { ... }` |
| >        | Greater than comparison | `if (a > b) { ... }` |
| <        | Less than comparison | `if (c < d) { ... }` |
| >=       | Greater than or equal to comparison | `if (e >= f) { ... }` |
| <=       | Less than or equal to comparison | `if (g <= h) { ... }` |

### 4. Logical Operators

| Operator | Description | Code Example |
|----------|-------------|--------------|
| &&       | Logical AND | `if (a > 0 && b < 10) { ... }` |
| \|\|      | Logical OR | `if (a > 0 || b < 10) { ... }` |
| !        | Logical NOT | `if (!a) { ... }` |

> Note that this is not an exhaustive list of all operators in JavaScript, but rather a selection of some common ones grouped by type.

## Expression
In JavaScript, an expression is any valid unit of code that can be evaluated to a value. It can be a single value, a variable, or a combination of values and operators. Expressions are used in many different contexts in JavaScript, such as:

### 1. Assigning values to variables
```javascript
let a = 5;
let b = a + 3;
```

### 2. As function arguments
```javascript
function greet(name) {
  console.log('Hello, ' + name + '!');
}
greet('Alice');
```

### 3. In conditional statements
```javascript
if (a > 0 && b < 10) {
  // do something
}
```

### 4. In loops
```javascript
for (let i = 0; i < 10; i++) {
  console.log(i);
}
```

### 5. As a return value from a function
```javascript
function multiply(a, b) {
  return a * b;
}
let c = multiply(2, 4);
```

An expression can be made up of variables, values, operators, function calls, and any combination of these. 
```javascript
let a = 5;
let b = 10;
let c = (a + b) * 2;
```
In this example, `c` is assigned the value of the expression `(a + b) * 2`, which evaluates to 30.

Overall, expressions are an essential part of JavaScript programming, as they enable us to perform calculations, make decisions, and create dynamic and interactive code.

## HTML code
An example HTML code that demonstrates the use of operators and expressions in JavaScript:

```html
<!DOCTYPE html>
<html>
<head>
  <title>Operators and Expressions in JavaScript</title>
</head>
<body>

  <h1>Operators and Expressions Example</h1>

  <p>Let's perform some calculations:</p>

  <script>
    // Define some variables
    let a = 5;
    let b = 3;

    // Perform some calculations and display the results
    document.write("<p>a + b = " + (a + b) + "</p>");
    document.write("<p>a - b = " + (a - b) + "</p>");
    document.write("<p>a * b = " + (a * b) + "</p>");
    document.write("<p>a / b = " + (a / b) + "</p>");
    document.write("<p>a % b = " + (a % b) + "</p>");

    // Use logical operators to check some conditions
    let c = 10;
    let d = 20;
    if (c > a && d < b) {
      document.write("<p>c is greater than a and d is less than b</p>");
    } else {
      document.write("<p>The condition is not true</p>");
    }

    // Use expressions as function arguments
    function greet(name) {
      document.write("<p>Hello, " + name + "!</p>");
    }
    greet("Alice");

    // Use expressions in loops
    for (let i = 0; i < 5; i++) {
      document.write("<p>" + i + "</p>");
    }
  </script>

</body>
</html>
```

This code defines some variables `a` and `b`, performs some arithmetic operations on them using the arithmetic operators (`+`, `-`, `*`, `/`, `%`), and displays the results using the `document.write` method.

The code also uses logical operators (`>`, `<`, `&&`) to check some conditions, and expressions as function arguments and in loops.

When you open this HTML file in a web browser, you should see the results of these calculations and operations displayed on the page.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

