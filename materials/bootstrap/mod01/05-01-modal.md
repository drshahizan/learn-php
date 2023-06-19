<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Modal
The Bootstrap JavaScript plugin for a modal window allows you to display a dialog box or pop-up window over your web page. This can be useful for displaying additional content, forms, or messages without navigating away from the current page.

To use the Bootstrap modal plugin, you'll need to include the Bootstrap JavaScript and CSS files in your HTML file. Once you've done that, you can create a button that will trigger the modal window.

An example of how to create a basic modal window using Bootstrap:

```html
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
```

In this example, the button has the `data-bs-toggle` and `data-bs-target` attributes that are required for the Bootstrap modal plugin to work. The `data-bs-target` value matches the `id` attribute of the `div` element that contains the modal window content.

The modal window itself is defined within a `div` element that has the `modal` class and an `id` attribute that matches the `data-bs-target` value from the button. The window is divided into three sections - a header, a body, and a footer - each of which can contain its own content. 

The header contains a title and a close button that will dismiss the modal window. The body can contain any content you'd like to display in the modal window, such as forms, text, or images. The footer can contain buttons or other content that you'd like to display at the bottom of the modal window.

Overall, the Bootstrap modal plugin provides a flexible and customizable way to display pop-up windows or dialog boxes on your web page.

# Code

Certainly, here's a complete HTML code example that uses the Bootstrap modal plugin:

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <title>Bootstrap Modal Example</title>
</head>
<body>
  
  <div class="container">
    <h1>Bootstrap Modal Example</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JavaScript Bundle with Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

In this example, we're using the Bootstrap CSS and JavaScript files by including them in the HTML file via the CDN links.

The `button` element has the `data-bs-toggle` and `data-bs-target` attributes, which are required for the Bootstrap modal plugin to work. The `data-bs-target` value matches the `id` attribute of the `div` element that contains the modal window content.

The modal window itself is defined within a `div` element that has the `modal` class and an `id` attribute that matches the `data-bs-target` value from the button. The window is divided into three sections - a header, a body, and a footer - each of which can contain its own content. 

The header contains a title and a close button that will dismiss the modal window. The body can contain any content you'd like to display in the modal window, such as forms, text, or images. The footer can contain buttons or other content that you'd like to display at the bottom of the modal window.

Overall, this HTML code example demonstrates how to use the Bootstrap modal plugin to create a simple pop-up window or dialog box on your web page.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

[![Visitors](https://api.visitorbadge.io/api/visitors?path=https%3A%2F%2Fgithub.com%2Fdrshahizan&labelColor=%23697689&countColor=%23555555&style=plastic)](https://visitorbadge.io/status?path=https%3A%2F%2Fgithub.com%2Fdrshahizan)
![](https://hit.yhype.me/github/profile?user_id=81284918)

