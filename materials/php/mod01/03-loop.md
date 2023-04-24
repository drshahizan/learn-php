<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Controlling program flow with loops and if-else statements

Controlling program flow is an essential part of any programming language, including PHP. Program flow refers to the order in which the statements of a program are executed. In PHP, there are several ways to control program flow, including conditionals, loops, and branching statements.

1. Conditionals: Conditionals are used to execute a block of code based on whether a certain condition is true or false. In PHP, there are two types of conditionals: if and switch statements.

- If statement: The if statement is used to execute a block of code if a certain condition is true. For example:

```php
if ($a > $b) {
   echo "a is greater than b";
}
```

- Switch statement: The switch statement is used to execute a block of code based on the value of a variable. For example:

```php
switch ($color) {
   case "red":
      echo "Your favorite color is red!";
      break;
   case "blue":
      echo "Your favorite color is blue!";
      break;
   default:
      echo "Your favorite color is neither red nor blue!";
      break;
}
```

2. Loops: Loops are used to execute a block of code repeatedly. In PHP, there are several types of loops, including for, while, do-while, and foreach loops.

- For loop: The for loop is used to execute a block of code a specific number of times. For example:

```php
for ($i = 0; $i < 10; $i++) {
   echo "The number is: $i <br>";
}
```

- While loop: The while loop is used to execute a block of code as long as a certain condition is true. For example:

```php
$i = 0;
while ($i < 10) {
   echo "The number is: $i <br>";
   $i++;
}
```

- Do-while loop: The do-while loop is similar to the while loop, except that it executes the block of code at least once, even if the condition is false. For example:

```php
$i = 0;
do {
   echo "The number is: $i <br>";
   $i++;
} while ($i < 10);
```

- Foreach loop: The foreach loop is used to iterate over arrays and objects. For example:

```php
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
   echo "$color <br>";
}
```

3. Branching statements: Branching statements are used to change the order of execution of a program. In PHP, there are three types of branching statements: break, continue, and goto.

- Break statement: The break statement is used to terminate the execution of a loop or switch statement. For example:

```php
for ($i = 0; $i < 10; $i++) {
   if ($i == 5) {
      break;
   }
   echo "The number is: $i <br>";
}
```

- Continue statement: The continue statement is used to skip to the next iteration of a loop. For example:

```php
for ($i = 0; $i < 10; $i++) {
   if ($i == 5) {
      continue;
   }
   echo "The number is: $i <br>";
}
```

- Goto statement: The goto statement is used to jump to a specific line of code in a program. However, the use of goto is generally discouraged, as it can make the code harder to read and understand. For example:

```php
<?php

$i = 0;

start:
echo "The number is: $i<br>";
$i++;

if ($i < 10) {
    goto start;
}

?>
```

In this example, the `goto` statement is used to jump back to the `start` label after incrementing the value of `$i`. The loop continues until `$i` reaches 10.

While `goto` can be a powerful tool, it can also make the code harder to read and understand. Therefore, it is generally discouraged to use `goto` statements unless absolutely necessary. It's usually better to use alternative control flow statements like `if`, `for`, `while`, and `foreach` loops, as well as `break` and `continue` statements, to achieve the same results in a more readable and maintainable way.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
