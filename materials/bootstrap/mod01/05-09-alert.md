<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Alert

In Bootstrap JavaScript, an alert is a JavaScript plugin that provides contextual feedback messages for user actions. Alerts are used to notify users of important information, such as errors, warnings, or success messages. Alerts can be styled with different colors to indicate their severity and can also include additional elements such as a close button or a heading.

To use an alert in Bootstrap, you first need to create an HTML element with the `.alert` class. You can also add additional classes to the alert element to change its appearance. For example, you can use the `.alert-danger` class to create a red-colored alert to indicate an error.

Here's an example of an alert with a close button:

```html
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Warning!</strong> You are about to delete this item.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
```

In this example, the `div` element has the classes `alert`, `alert-warning`, and `alert-dismissible`. The `alert-dismissible` class adds a close button to the alert, which is implemented using a button element with the `close` class. The `data-dismiss="alert"` attribute is used to close the alert when the button is clicked. 

Additionally, the `fade` and `show` classes are used to create a fade-in and fade-out animation when the alert is closed. The `aria-label` attribute is used to provide an accessible label for the close button.

Bootstrap also provides different contextual classes that can be used to change the color of the alert depending on its purpose. Here are some examples:

```html
<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>

<div class="alert alert-secondary" role="alert">
  This is a secondary alert—check it out!
</div>

<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>

<div class="alert alert-danger" role="alert">
  This is a danger alert—check it out!
</div>

<div class="alert alert-warning" role="alert">
  This is a warning alert—check it out!
</div>

<div class="alert alert-info" role="alert">
  This is an info alert—check it out!
</div>

<div class="alert alert-light" role="alert">
  This is a light alert—check it out!
</div>

<div class="alert alert-dark" role="alert">
  This is a dark alert—check it out!
</div>
```
## Code

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>University Course Registration System</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container mt-5">
      <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Welcome!</strong> Please select your courses for the upcoming
        semester.
        <button
          type="button"
          class="close"
          data-dismiss="alert"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong> You have not yet completed the prerequisites for
        COMP 300.
        <button
          type="button"
          class="close"
          data-dismiss="alert"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success:</strong> Your registration for MATH 201 has been
        confirmed.
        <button
          type="button"
          class="close"
          data-dismiss="alert"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>

```

In this example, we've used three different types of alerts: `alert-info`, `alert-danger`, and `alert-success`. The alerts contain messages that might be relevant to a university academic course registration system, such as a welcome message, an error message about missing prerequisites, and a success message confirming registration.

We've also included a button with the `close` class in each alert to allow users to dismiss the alerts if they want to. The `fade` and `show` classes are used to create a fade-in and fade-out effect when the alerts are closed.

Note that you may need to modify the classes and content of the alerts to fit the specific requirements of your system.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
