<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Collapse

Bootstrap is a popular front-end framework that provides a collection of tools and resources for building responsive and user-friendly websites. One of its many JavaScript plugins is the Collapse plugin, which enables you to create collapsible content sections on your web pages.

The Collapse plugin works by toggling the visibility of content based on user interaction with a clickable control element, such as a button or link. When the control element is clicked, the content section expands or collapses, depending on its previous state.

To use the Collapse plugin, you first need to include the necessary JavaScript and CSS files in your HTML document. You can either download the files from the official Bootstrap website or use a CDN (Content Delivery Network) to reference them remotely.

Next, you need to create the HTML markup for the collapsible content section and the control element. Here's an example:

```html
<div class="accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
        Section 1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent=".accordion">
      <div class="accordion-body">
        Content for section 1 goes here.
      </div>
    </div>
  </div>
</div>
```

In this example, the `accordion` class is used to group multiple collapsible sections together. The `accordion-item` class is used to wrap each section, and the `accordion-header` class is used for the clickable control element. The `accordion-button` class is used to style the button, and the `data-bs-toggle` and `data-bs-target` attributes are used to specify the target content section.

The `collapse` class is used to indicate that the content section should be initially collapsed, and the `show` class is used to indicate that it should be initially visible. The `data-bs-parent` attribute is used to specify the parent element of the collapsible sections, which is the `accordion` element in this case.

Once you have created the HTML markup, you can activate the Collapse plugin by initializing it with JavaScript code. Here's an example:

```javascript
var accordion = new bootstrap.Accordion(document.querySelector('.accordion'), {
  toggle: false
});
```

In this example, the `Accordion` class is used to initialize the plugin on the `accordion` element. The `toggle` option is set to `false` to disable the automatic toggling of other collapsible sections when one is opened.

With the Collapse plugin, you can create interactive and space-saving content sections that enhance the user experience on your website.

## Code
An example HTML code for the Bootstrap Collapse component:

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Collapse Example</title>
  <!-- Bootstrap CSS file -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container my-5">
    <h1 class="text-center mb-4">Bootstrap Collapse Example</h1>

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Section 1
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            Content for section 1 goes here.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Section 2
            </button>
          </h2>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            Content for section 2 goes here.
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingThree">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Section 3
            </button>
          </h2>
        </div>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            Content for section 3 goes here.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript files (jQuery and Popper.js are required) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
```

In this example, the HTML code creates an accordion-style Collapse component with three collapsible sections. The `container` class is used to add a responsive padding to the content. The `accordion` and `card` classes are used to structure the component, while the `card-header` and `card-body` classes are used to define the header and body of each collapsible section. 

The `btn`, `btn-link`, and `collapsed` classes are used to style the clickable control elements of the collapsible sections. The `collapse` class is used to indicate that the content sections should be initially collapsed. The `show` class is used to indicate which section should be initially expanded.

The `data-toggle="collapse"` and `data-target="#..."` attributes are used to specify that the control element should toggle the collapse state of the section with the corresponding `id` attribute.

Finally, the JavaScript files for jQuery, Popper.js, and Bootstrap are included at the end of the HTML file to enable the Collapse functionality.

## Case study
An example HTML code for a course registration system in a university that uses the Bootstrap Collapse component:

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>University Course Registration System</title>
  <!-- Bootstrap CSS file -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <div class="container my-5">
    <h1 class="text-center mb-4">University Course Registration System</h1>

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Available Courses
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Course 1
                <button class="btn btn-primary" type="button">Register</button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Course 2
                <button class="btn btn-primary" type="button">Register</button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Course 3
                <button class="btn btn-primary" type="button">Register</button>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Registered Courses
            </button>
          </h2>
        </div>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Course 2
                <button class="btn btn-danger" type="button">Drop</button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Course 3
                <button class="btn btn-danger" type="button">Drop</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript files (jQuery and Popper.js are required) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
```

In this example, the HTML code creates a registration system for university courses using the Bootstrap Collapse component. The `container` class is used to add a responsive container that centers the page content, and the `my-5` class is used to add margin to the top and bottom of the container.

The `accordion` class is used to create a container for the two course sections, and each course section is a `card` element. The `card-header` class is used to create the header for each course section, which contains a `button` element with the `data-toggle="collapse"` and `data-target="#..."` attributes to enable the Collapse functionality.

The first course section (`Available Courses`) is set to be initially expanded by adding the `show` class to the `collapseOne` section. The second course section (`Registered Courses`) is initially collapsed.

Each course is displayed as a `list-group-item` element, with the course name on the left and a `Register` or `Drop` button on the right. The `d-flex`, `justify-content-between`, and `align-items-center` classes are used to align the course name and button within the list item.

Finally, the Bootstrap JavaScript files are included at the end of the HTML code to enable the Collapse functionality. The `jQuery` and `Popper.js` libraries are also required for Bootstrap to work properly, so they are included as well.

I hope this example helps illustrate how to use the Bootstrap Collapse component in a university course registration system!

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
