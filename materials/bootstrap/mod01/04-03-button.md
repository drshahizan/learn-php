<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan%2Flearn-php&labelColor=%23d9e3f0&countColor=%23697689&style=flat)

Don't forget to hit the :star: if you like this repo.

# Button

Bootstrap is a popular front-end web development framework that provides a collection of CSS and JavaScript components for building responsive and mobile-friendly websites. One of the most commonly used components in Bootstrap is the button.

Bootstrap CSS classes provide a set of pre-defined styles and effects for buttons that can be easily added to HTML elements with the "btn" class. Here are some of the most commonly used Bootstrap CSS classes for buttons:

Sure, I can provide the information in a table format as well. Here it is:

| Bootstrap CSS Classes | Description | Example |
| --- | --- | --- |
| `btn` | Adds basic styling to a button element | `<button class="btn">Click me</button>` |
| `btn-primary` | Adds blue background color to the button, indicating a primary action | `<button class="btn btn-primary">Submit</button>` |
| `btn-secondary` | Adds a light gray background color to the button, indicating a secondary action or option | `<button class="btn btn-secondary">Cancel</button>` |
| `btn-success` | Adds a green background color to the button, indicating a successful action | `<button class="btn btn-success">Save</button>` |
| `btn-danger` | Adds a red background color to the button, indicating a dangerous or potentially harmful action | `<button class="btn btn-danger">Delete</button>` |
| `btn-warning` | Adds a yellow background color to the button, indicating a warning or cautionary message | `<button class="btn btn-warning">Are you sure?</button>` |
| `btn-info` | Adds a light blue background color to the button, indicating informational content or a call-to-action | `<button class="btn btn-info">Learn More</button>` |
| `btn-outline-*` | Removes the background color and applies a border of the specified color | `<button class="btn btn-outline-primary">Learn More</button>` |
| `btn-link` | Removes background and border, leaving only the link text | `<button class="btn btn-link">Read More</button>` |
| `btn-sm` | Adds small size to the button | `<button class="btn btn-primary btn-sm">Submit</button>` |
| `btn-lg` | Adds large size to the button | `<button class="btn btn-primary btn-lg">Submit</button>` |

> In addition to these basic classes, Bootstrap also provides classes for different button sizes ("btn-sm", "btn-lg") and styles ("btn-outline-primary", "btn-link"), as well as utility classes for customizing button colors, borders, and other properties.

By using Bootstrap CSS classes for buttons, developers can quickly create consistent and visually appealing buttons that are optimized for different device sizes and screen resolutions.

## Code
An example of complete HTML code using Bootstrap CSS classes for button:

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Bootstrap Button Example</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container mt-5">
      <h1>Bootstrap Button Example</h1>
      <button class="btn btn-primary mr-2">Primary Button</button>
      <button class="btn btn-secondary mr-2">Secondary Button</button>
      <button class="btn btn-success mr-2">Success Button</button>
      <button class="btn btn-danger mr-2">Danger Button</button>
      <button class="btn btn-warning mr-2">Warning Button</button>
      <button class="btn btn-info mr-2">Info Button</button>
      <button class="btn btn-light mr-2">Light Button</button>
      <button class="btn btn-dark mr-2">Dark Button</button>
      <button class="btn btn-outline-primary mr-2">
        Outline Primary Button
      </button>
      <button class="btn btn-outline-secondary mr-2">
        Outline Secondary Button
      </button>
      <button class="btn btn-outline-success mr-2">
        Outline Success Button
      </button>
      <button class="btn btn-outline-danger mr-2">Outline Danger Button</button>
      <button class="btn btn-outline-warning mr-2">
        Outline Warning Button
      </button>
      <button class="btn btn-outline-info mr-2">Outline Info Button</button>
      <button class="btn btn-outline-light mr-2">Outline Light Button</button>
      <button class="btn btn-outline-dark mr-2">Outline Dark Button</button>
      <button class="btn btn-primary btn-lg mr-2">Large Primary Button</button>
      <button class="btn btn-secondary btn-sm mr-2">
        Small Secondary Button
      </button>
      <button class="btn btn-success btn-block">Block Success Button</button>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>
```

## Case study
An example of how you could use Bootstrap CSS classes for buttons in a university academic course registration system

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Course Registration System</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container mt-5">
      <h1>Course Registration System</h1>
      <form>
        <div class="form-group">
          <label for="course-name">Course Name:</label>
          <input
            type="text"
            class="form-control"
            id="course-name"
            placeholder="Enter course name"
          />
        </div>
        <div class="form-group">
          <label for="course-code">Course Code:</label>
          <input
            type="text"
            class="form-control"
            id="course-code"
            placeholder="Enter course code"
          />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>
```

In this example, the registration form for a university course is set up using Bootstrap CSS classes. The `form-group` class is used to group form elements together and provide a consistent look and feel. The `form-control` class is used to style the input fields.

The btn class is used to create buttons, and the `btn-primary` and `btn-secondary` classes are used to give the buttons different styles. The `type` attribute of the `button` tag is set to either `submit` or `reset` to define the functionality of the button.

This code uses the Bootstrap grid system to create a responsive layout, which is important for a modern web application like a course registration system. Overall, using Bootstrap CSS classes can help you create a consistent and professional-looking interface for your application.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

