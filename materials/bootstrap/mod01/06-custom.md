<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Customizing Bootstrap
Bootstrap provides a range of customization options to help developers match their design needs. Here are some of the ways to customize Bootstrap:

### 1. Customize variables
Bootstrap provides a set of default Sass variables that you can override to modify the appearance of your site. You can modify variables such as colors, fonts, spacing, and breakpoints to create a unique design. To customize variables, you will need to set up a Sass compiler and create a custom variables file that imports the Bootstrap Sass files.

### 2. Use Bootstrap themes
Bootstrap also provides a range of pre-built themes that you can use to quickly change the appearance of your site. Themes provide a set of predefined variables that you can use to create a consistent look and feel across your site. You can download and install themes from the Bootstrap website, or create your own custom themes.

### 3. Create custom styles
If you need more control over the appearance of your site, you can create custom styles that override the default Bootstrap styles. You can add custom CSS classes to your HTML markup, or create a separate CSS file that is loaded after the Bootstrap CSS file. This allows you to modify specific elements on your site, such as buttons, forms, or navigation menus.

### 4. Use Bootstrap plugins
Bootstrap also provides a range of plugins that can be used to add additional functionality to your site. Plugins include things like carousels, modals, and tooltips, and can be customized to match the appearance of your site.

Overall, Bootstrap provides a range of customization options to help developers create a unique design that matches their needs. Whether you want to modify the default color scheme, create custom styles, or use pre-built themes, Bootstrap provides the flexibility to customize the appearance of your site.

## Example 1
Customizing the appearance of Bootstrap using Sass variables:

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customized Bootstrap</title>
  <!-- Import the Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <!-- Import our custom styles -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">ホーム</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container my-5">
    <h1 class="text-center">Customized Bootstrap Example</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum, tellus vel finibus fermentum, eros massa varius ante, nec vulputate augue odio eget quam. Sed euismod enim a ipsum interdum, sit amet vestibulum leo lobortis. In hac habitasse platea dictumst.</p>
    <button class="btn btn-primary">Learn More</button>
  </div>

  <!-- Import the Bootstrap and jQuery JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
```
## Example 2
A complete HTML code example that demonstrates how to customize the appearance of Bootstrap to match your design needs:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customized Bootstrap Example</title>
    <!-- Add Bootstrap CSS file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Override default Bootstrap styles here */
        
        /* Change primary color to green */
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
        
        /* Change link color to orange */
        a {
            color: #ff7f50;
        }
        
        /* Change background color of jumbotron to light blue */
        .jumbotron {
            background-color: #d6eaf8;
        }
        
        /* Change font family to Georgia */
        body {
            font-family: Georgia, serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is an example of customized Bootstrap.</p>
        <button class="btn btn-primary">Click me</button>
        <br>
        <a href="#">Link</a>
        <br>
        <div class="jumbotron">
            <h1 class="display-4">Jumbotron heading</h1>
            <p class="lead">Jumbotron text</p>
        </div>
    </div>
    <!-- Add Bootstrap JS file -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
```

In this example, we have overridden some of the default Bootstrap styles using CSS. We have changed the primary color to green, link color to orange, background color of jumbotron to light blue, and font family to Georgia. You can modify these styles or add your own to customize the appearance of Bootstrap to match your design needs.

## Example 3
Sure, here's an example of customizing the appearance of Bootstrap by overriding the default styles with custom CSS:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customized Bootstrap Example</title>
    <!-- Add Bootstrap CSS file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Override default Bootstrap styles here */
        
        /* Change navbar background color to blue */
        .navbar {
            background-color: #007bff;
        }
        
        /* Change navbar text color to white */
        .navbar-nav .nav-link {
            color: #fff;
        }
        
        /* Change primary color to green */
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
        
        /* Change link color to red */
        a {
            color: #dc3545;
        }
        
        /* Change background color of jumbotron to light blue */
        .jumbotron {
            background-color: #d6eaf8;
        }
        
        /* Change font family to 'Helvetica Neue', sans-serif */
        body {
            font-family: 'Helvetica Neue', sans-serif;
        }
        
        /* Change font size of lead text to 18px */
        .lead {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <!-- Add a navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <h1>Hello, world!</h1>
        <p class="lead">This is an example of customized Bootstrap.</p>
        <button class="btn btn-primary">Click me</button>
        <br>
        <a href="#">Link</a>
        <br>
        <div class="jumbotron">
            <h1 class="display-4">Jumbotron heading</h1>
            <p class="lead">Jumbotron text</p>
        </div>
    </div>
    
    <!-- Add Bootstrap JS file -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
```

In this example, we have overridden some of the default Bootstrap styles using custom CSS. We have changed the navbar background color to blue, navbar text color to white, primary color to green, link color to red, background color of jumbotron to light blue, font family to 'Helvetica Neue', sans-serif, and font size of lead text to 18px. You can modify these styles or add your own to customize the appearance of Bootstrap to match your design needs.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
