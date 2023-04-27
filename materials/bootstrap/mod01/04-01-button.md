<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

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

Sure, here is an example of complete HTML code using Bootstrap CSS classes for button:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap Button Example</title>
    <!-- Include Bootstrap CSS file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Bootstrap Button Example</h1>
        <button class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-secondary mr-2">Cancel</button>
        <button class="btn btn-success mr-2">Save</button>
        <button class="btn btn-danger mr-2">Delete</button>
        <button class="btn btn-warning mr-2">Are you sure?</button>
        <button class="btn btn-info mr-2">Learn More</button>
    </div>
    <!-- Include Bootstrap JavaScript file -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
```

In this example, we have included the Bootstrap CSS and JavaScript files in the head and body sections, respectively. We have also created six buttons with different Bootstrap CSS classes to demonstrate the different styles and effects available. Finally, we have included the necessary jQuery, Popper.js, and Bootstrap JavaScript files at the end of the body section to ensure that all components work correctly.

## Case study

An example of complete HTML code using Bootstrap CSS classes for button

```html
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bootstrap Button Example</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
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
		<button class="btn btn-outline-primary mr-2">Outline Primary Button</button>
		<button class="btn btn-outline-secondary mr-2">Outline Secondary Button</button>
		<button class="btn btn-outline-success mr-2">Outline Success Button</button>
		<button class="btn btn-outline-danger mr-2">Outline Danger Button</button>
		<button class="btn btn-outline-warning mr-2">Outline Warning Button</button>
		<button class="btn btn-outline-info mr-2">Outline Info Button</button>
		<button class="btn btn-outline-light mr-2">Outline Light Button</button>
		<button class="btn btn-outline-dark mr-2">Outline Dark Button</button>
		<button class="btn btn-primary btn-lg mr-2">Large Primary Button</button>
		<button class="btn btn-secondary btn-sm mr-2">Small Secondary Button</button>
		<button class="btn btn-success btn-block">Block Success Button</button>
	</div>

	<!-- Bootstrap JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
```

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
