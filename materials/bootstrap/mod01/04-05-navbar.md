<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Navbar
Bootstrap is a popular front-end development framework that provides a set of pre-defined CSS classes and JavaScript plugins for creating responsive and mobile-first web designs. One of the most commonly used components of Bootstrap is the navbar, which is a horizontal navigation bar that contains links to different sections of a website.

The Bootstrap CSS classes for the navbar allow developers to quickly and easily create a customizable and responsive navigation bar. Some of the key classes for creating a navbar include:

| Item | Description | Example |
| --- | --- | --- |
| `navbar` | The main class used to create a navbar. It sets the basic styles and layout for the navbar, such as the background color and padding. | `<nav class="navbar"></nav>` |
| `navbar-expand-*` | This class controls how the navbar expands and collapses on different screen sizes. The `*` can be replaced with a screen size, such as `sm` for small screens or `lg` for large screens. | `<nav class="navbar navbar-expand-lg"></nav>` |
| `navbar-brand` | This class is used to create a logo or brand name for the navbar. It provides styles for the text and image that are used as the brand. | `<a class="navbar-brand" href="#">My Brand</a>` |
| `navbar-nav` | This class is used to create a list of links that appear in the navbar. It provides styles for the list items and the links. | `<ul class="navbar-nav"></ul>` |
| `nav-item` | This class is used to create individual items in the navbar list. It provides styles for the list item and the link. | `<li class="nav-item"></li>` |
| `nav-link` | This class is used to create links within the navbar list. It provides styles for the link, such as setting the color and hover effects. | `<a class="nav-link" href="#">Link</a>` |

## Code
An example HTML code for a navbar using Bootstrap CSS classes:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Navbar Example</title>
    <!-- Add Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">My Website</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >ホーム <span class="sr-only">(current)</span></a
            >
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

    <!-- Add Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8ew"
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

This code creates a dark-themed navbar with a logo and three links. The `navbar-expand-lg` class makes the navbar expand on large screens, while the `navbar-dark` class sets the text color to light. The `navbar-toggler` class adds a button to collapse the navbar on smaller screens, and the `sr-only` class provides screen-reader-only text to indicate the current page on the active link.

The `navbar-nav` class creates a list of links inside the navbar, while the `nav-item` and `nav-link` classes style each link item. Finally, the `active` class indicates the currently active page.

Note that we also include the necessary Bootstrap CSS and JS files in the head and body of the HTML code, respectively. This ensures that the navbar and other Bootstrap components are styled correctly and that any interactive features (such as the navbar toggler) work as intended.

Overall, using Bootstrap CSS classes for the navbar makes it easy to create a professional-looking navigation menu with minimal effort.

## Case study
An example HTML code for a navbar using Bootstrap CSS classes for a university academic course registration system:

```
<!DOCTYPE html>
<html>
  <head>
    <title>Course Registration System - University</title>
    <!-- Add Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">University</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >ホーム <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Courses
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Computer Science</a>
              <a class="dropdown-item" href="#">Mathematics</a>
              <a class="dropdown-item" href="#">Biology</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">All Courses</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Add Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8ew"
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

In this example, we have added a navbar with links to the ホームpage, course listings, registration page and login page using Bootstrap CSS classes. We used the `navbar` class to create the basic structure of the navbar and `navbar-expand-lg` to make it responsive on large screens.

We included a brand name "University" on the left side of the navbar using the `navbar-brand` class, and a toggler icon on the right side using the `navbar-toggler` class. The toggler icon collapses the navbar menu on smaller screens.

We then created a list of links using the `navbar-nav` class and added each link as an item using the `nav-item` class. We also added a dropdown menu for the "Courses" link using the `dropdown` class, and included additional courses and a divider using the `dropdown-item` and `dropdown-divider` classes, respectively.

Finally, we added the necessary Bootstrap CSS and JS files to the head and body of the HTML code, respectively, to ensure that the navbar and other Bootstrap components are styled correctly and that any interactive features (such as the navbar toggler) work as intended.

Overall, using Bootstrap CSS classes for the navbar makes it easy to create a professional-looking navigation menu with minimal effort, as we have demonstrated in this example for a university academic course registration system.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
