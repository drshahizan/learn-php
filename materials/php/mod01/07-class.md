<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Creating and using classes and objects

In PHP, classes and objects are fundamental concepts of object-oriented programming (OOP). A class is a blueprint or template that defines the structure and behavior of objects. An object, on the other hand, is an instance of a class that represents a specific entity or concept.

Here's a step-by-step description of creating and using classes and objects in PHP:

1. **Class Definition:** To create a class in PHP, use the `class` keyword followed by the class name. Inside the class, you define properties (variables) and methods (functions) that describe the characteristics and behavior of objects created from the class.

```php
class MyClass {
    // Properties
    public $property1;
    private $property2;

    // Methods
    public function method1() {
        // Code
    }

    private function method2() {
        // Code
    }
}
```

In the example above, we define a class named `MyClass` with two properties (`$property1` and `$property2`) and two methods (`method1()` and `method2()`).

2. **Creating Objects:** To create an object (an instance) of a class, use the `new` keyword followed by the class name, along with parentheses.

```php
$object1 = new MyClass();
```

In the example above, we create an object named `$object1` of the `MyClass` class.

3. **Accessing Properties and Methods:** Once an object is created, you can access its properties and methods using the object's name followed by the arrow (`->`) operator.

```php
$object1->property1 = "Value"; // Set property value
$value = $object1->property1; // Get property value

$object1->method1(); // Call a method
```

In the example above, we set and retrieve the value of `property1` using the object `$object1`. We also call the `method1()` of `$object1`.

4. **Visibility:** Properties and methods in PHP can have different visibility, indicated by keywords `public`, `private`, or `protected`.

- `public` properties/methods are accessible from anywhere.
- `private` properties/methods are only accessible within the class itself.
- `protected` properties/methods are accessible within the class and its subclasses.

```php
class MyClass {
    public $publicProperty; // Public property
    private $privateProperty; // Private property
    protected $protectedProperty; // Protected property

    public function publicMethod() {
        // Code
    }

    private function privateMethod() {
        // Code
    }

    protected function protectedMethod() {
        // Code
    }
}
```

5. **Constructor and Destructor:** Classes can have special methods called the constructor and destructor.

- The constructor method is automatically called when an object is created and allows you to initialize properties or perform setup tasks.

```php
class MyClass {
    public function __construct() {
        // Constructor code
    }
}
```

- The destructor method is automatically called when an object is destroyed (no longer in use) and can be used to perform cleanup tasks.

```php
class MyClass {
    public function __destruct() {
        // Destructor code
    }
}
```

6. **Inheritance:** In PHP, classes can inherit properties and methods from other classes using the inheritance concept. This promotes code reusability and allows you to create hierarchical relationships between classes.

```php
class ParentClass {
    // Properties and methods
}

class ChildClass extends ParentClass {
    // Additional properties and methods
}
```

In the example above, `ChildClass` extends `ParentClass`, meaning `ChildClass` inherits all the properties and methods of `Parent

Class`.

These are the basic concepts of creating and using classes and objects in PHP. Classes provide a way to encapsulate data and related functionality, allowing you to create reusable and organized code. Objects represent specific instances of a class and can have their own unique values for properties. By utilizing classes and objects, you can create complex systems and leverage the benefits of object-oriented programming in PHP.

## Code

An example of creating and using classes and objects in PHP, along with complete PHP and HTML code:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Class and Object Example</title>
</head>
<body>
    <?php
    // Class definition
    class Car {
        // Properties
        public $brand;
        public $model;
        public $color;

        // Constructor
        public function __construct($brand, $model, $color) {
            $this->brand = $brand;
            $this->model = $model;
            $this->color = $color;
        }

        // Method
        public function startEngine() {
            echo "The $this->brand $this->model's engine is started.<br>";
        }
    }

    // Creating objects
    $car1 = new Car("Toyota", "Corolla", "Red");
    $car2 = new Car("Honda", "Civic", "Blue");

    // Accessing object properties
    echo "Car 1: $car1->brand $car1->model (Color: $car1->color)<br>";
    echo "Car 2: $car2->brand $car2->model (Color: $car2->color)<br>";

    // Calling object methods
    $car1->startEngine();
    $car2->startEngine();
    ?>
</body>
</html>
```

In this example, we create a `Car` class that represents cars. Here's a breakdown of the code:

1. We define the `Car` class with three properties: `$brand`, `$model`, and `$color`. We also define a constructor method `__construct()` to initialize the properties when an object is created.

2. Inside the `Car` class, we define a method `startEngine()` that echoes a message indicating that the car's engine is started.

3. We create two car objects `$car1` and `$car2` using the `new` keyword and the `Car` class constructor. We pass the brand, model, and color as arguments to the constructor.

4. We access the properties of the car objects using the object name followed by the arrow (`->`) operator and display the car details on the webpage.

5. We call the `startEngine()` method on each car object, which outputs a message indicating that the engine is started.

When you run this code, it will display the car details and output messages indicating the engine start for each car object. The HTML section of the code simply provides a structure for displaying the output on the webpage.

## Case study
An example of creating and using classes and objects in PHP for a university academic course registration system, along with complete PHP and HTML code:

```php
<!DOCTYPE html>
<html>
<head>
    <title>Course Registration System</title>
</head>
<body>
    <?php
    // Class definition
    class Course {
        // Properties
        public $name;
        public $code;
        public $credits;

        // Constructor
        public function __construct($name, $code, $credits) {
            $this->name = $name;
            $this->code = $code;
            $this->credits = $credits;
        }

        // Method
        public function displayCourseInfo() {
            echo "Course: $this->name (Code: $this->code, Credits: $this->credits)<br>";
        }
    }

    // Creating objects
    $course1 = new Course("Introduction to Programming", "CS101", 3);
    $course2 = new Course("Database Management", "CS202", 4);

    // Accessing object properties
    echo "Course 1: ";
    $course1->displayCourseInfo();

    echo "Course 2: ";
    $course2->displayCourseInfo();
    ?>
</body>
</html>
```

In this example, we create a `Course` class that represents academic courses in a university. Here's a breakdown of the code:

1. We define the `Course` class with three properties: `$name`, `$code`, and `$credits`. We also define a constructor method `__construct()` to initialize the properties when a `Course` object is created.

2. Inside the `Course` class, we define a method `displayCourseInfo()` that echoes a message displaying the course's name, code, and credits.

3. We create two course objects `$course1` and `$course2` using the `new` keyword and the `Course` class constructor. We pass the course name, code, and credits as arguments to the constructor.

4. We access the properties of the course objects using the object name followed by the arrow (`->`) operator and call the `displayCourseInfo()` method on each course object. This method displays the course information on the webpage.

When you run this code, it will display the information of the two courses, including their names, codes, and credits. The HTML section of the code simply provides a structure for displaying the output on the webpage.


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
