<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Tooltip

In Bootstrap JavaScript, a tooltip is a small pop-up box that appears when a user hovers over an element (such as a button or link) with their mouse cursor. The tooltip usually contains additional information about the element or an action that will be taken if the user clicks the element.

To use tooltips in Bootstrap JavaScript, you first need to include the Bootstrap JavaScript and CSS files in your HTML document. Then, you can add the `data-toggle="tooltip"` attribute to the element you want to add the tooltip to, and set the `title` attribute to the text you want to display in the tooltip.

## How to use tooltips in Bootstrap JavaScript

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Tooltip Example</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>Bootstrap Tooltip Example</h1>
    <button type="button" class="btn btn-primary" data-toggle="tooltip" title="Click me!">Hover over me</button>
  </div>
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
  </script>
</body>
</html>
```

In this example, we use a button element and add the `data-toggle="tooltip"` and `title="Click me!"` attributes to it. We also add a JavaScript function that initializes the tooltips on all elements with the `data-toggle="tooltip"` attribute when the document is ready.

When you hover over the button in this example, a tooltip will appear with the text "Click me!". You can customize the appearance of tooltips by using Bootstrap's CSS classes or by adding your own CSS rules.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
