<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Popover

In Bootstrap JavaScript, a Popover is a small overlay that appears on top of a webpage element, usually triggered by a mouse click or hover. It can contain any type of content, such as text, images, or forms, and is often used to display additional information or options.

A Popover is similar to a Tooltip, but it is larger and can contain more content. When a Popover is activated, it appears in a small box on top of the element, and can be dismissed by clicking outside of the box or pressing the escape key.

To create a Popover in Bootstrap, you can use the `data-toggle` and `data-content` attributes on an element, along with the `popover` JavaScript plugin. For example, to add a Popover to a button, you can use the following HTML code:

```html
<button type="button" class="btn btn-primary" data-toggle="popover" data-content="Hello, this is a Popover!">Click me</button>
```

This code will create a button with the text "Click me" and a Popover that displays the message "Hello, this is a Popover!" when clicked. You can also customize the appearance and behavior of the Popover using various options, such as placement, animation, and triggers.

In addition to the `data-toggle` and `data-content` attributes, you can also use other attributes like `data-placement`, `data-trigger`, and `data-animation` to customize the Popover. For example:

```html
<button type="button" class="btn btn-primary" data-toggle="popover" data-content="Hello, this is a Popover!" data-placement="bottom" data-trigger="hover" data-animation="fade">Click me</button>
```

This code will create a button with a Popover that appears below the button (`data-placement="bottom"`), is triggered by hovering over the button (`data-trigger="hover"`), and uses a fading animation (`data-animation="fade"`).

Overall, Popovers are a useful and versatile component in Bootstrap JavaScript, allowing you to add additional content and interactivity to your webpages in a clean and unobtrusive way.

## Code

```html
<!DOCTYPE html>
<html>
<head>
	<title>Course Registration</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h1>Course Registration</h1>

		<!-- Example of a button with a popover -->
		<button type="button" class="btn btn-primary" data-toggle="popover" data-content="This course is full!" data-placement="right">
			Course Name
		</button>

	</div>

	<!-- JavaScript code to initialize the Popover plugin -->
	<script>
		$(document).ready(function(){
			$('[data-toggle="popover"]').popover();
		});
	</script>

</body>
</html>
```

In this example, we have a simple HTML page with a button that represents a course that a student might want to register for. We've added the `data-toggle="popover"` and `data-content="This course is full!"` attributes to the button to specify that we want a Popover to appear with the message "This course is full!" when the button is clicked. We've also added the `data-placement="right"` attribute to specify that the Popover should appear to the right of the button.

Finally, we've included some JavaScript code at the bottom of the page to initialize the Popover plugin and make it work. When the document is ready, the code selects all elements with the `data-toggle="popover"` attribute and calls the `popover()` function on them to activate the plugin.

Of course, in a real academic course registration system, you would likely have more complex logic and data to display in your Popovers, but this example should give you an idea of how to get started.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
