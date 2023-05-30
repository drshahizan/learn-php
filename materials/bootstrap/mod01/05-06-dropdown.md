<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Dropdown

Dropdowns are a common UI element used in web applications to display a list of options or actions for the user to choose from. In Bootstrap, dropdowns can be easily implemented using the Dropdown component in the JavaScript library.

The Dropdown component consists of a button or a link, which when clicked, displays a list of options or actions. In Bootstrap, the Dropdown component is based on the Popover plugin, which requires the use of the Bootstrap JavaScript library.

To create a Dropdown in Bootstrap, we can use the following HTML structure:

```html
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action 1</a>
    <a class="dropdown-item" href="#">Action 2</a>
    <a class="dropdown-item" href="#">Action 3</a>
  </div>
</div>
```

In this example, we have created a Dropdown button using a `<button>` element with the `dropdown-toggle` and `btn` classes. We have also added the `data-toggle="dropdown"` attribute to enable the Dropdown functionality in Bootstrap.

The Dropdown menu is created using a `<div>` element with the `dropdown-menu` class. We have also specified the `aria-labelledby` attribute to indicate that the Dropdown menu is associated with the Dropdown button.

The menu options are created using `<a>` elements with the `dropdown-item` class. These are the individual actions or options that the user can choose from.

Bootstrap provides many options and styles to customize Dropdowns, such as sizing, placement, and alignment. We can also add headers, dividers, and icons to the Dropdown menu to enhance the user experience.

## Code
```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>University Academic Course Registration System</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">University Name</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#ホーム"
              >ホーム <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#courses">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#registration">Registration</a>
          </li>
        </ul>
        <div class="dropdown">
          <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            My Account
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container-fluid" id="ホーム">
      <h1>Welcome to the University Academic Course Registration System</h1>
      <p>
        This is a system designed to make course registration for students at
        the university more efficient and convenient. Please browse our courses
        and register for your desired courses.
      </p>
    </div>

    <div class="container-fluid" id="courses">
      <h2>Courses</h2>
      <p>Here is a list of our available courses:</p>
      <ul>
        <li>Introduction to Computer Science</li>
        <li>Database Management Systems</li>
        <li>Web Development</li>
        <li>Algorithms and Data Structures</li>
      </ul>
    </div>

    <div class="container-fluid" id="registration">
      <h2>Registration</h2>
      <p>To register for a course, please fill out the form below:</p>
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" />
        </div>
        <div class="form-group">
          <label for="course">Course:</label>
          <select class="form-control" id="course">
            <option>Introduction to Computer Science</option>
            <option>Database Management Systems</option>
            <option>Web Development</option>
            <option>Algorithms and Data Structures</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!-- Bootstrap JavaScript and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8bc"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
```


In this example, we have added a Bootstrap Dropdown component to the right side of the navbar. This dropdown has a button that says "My Account" and a menu that contains links for the user's profile, settings, and logout. This allows the user to easily access their account information without cluttering the main navigation.

Note that we have also included the necessary Bootstrap JavaScript and jQuery files at the bottom of the HTML code to ensure that the Dropdown component functions correctly.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
