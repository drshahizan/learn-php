<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Scrollspy

Scrollspy is a JavaScript plugin in Bootstrap that automatically updates the navigation links based on the scroll position of the page. This means that as a user scrolls down the page, the corresponding navigation link for the current section becomes highlighted in the navigation menu.

Scrollspy is useful for long pages that have multiple sections or a fixed navigation menu, allowing users to easily navigate through the content without having to scroll all the way back up to the top of the page.

To use Scrollspy in Bootstrap, you need to add the `data-spy="scroll"` and `data-target="#navbar"` attributes to the `body` tag and the `nav` tag respectively. The `data-spy` attribute tells Bootstrap that we want to use Scrollspy, and the `data-target` attribute tells Bootstrap which navigation menu to use for the highlighting.

## Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Academic Course Registration System</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="50">
    <nav
      id="navbar"
      class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
    >
      <a class="navbar-brand" href="#">Academic Course Registration System</a>
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
          <li class="nav-item">
            <a class="nav-link" href="#courses">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#schedule">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#register">Registration</a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="courses" class="container-fluid">
      <h1>Courses</h1>
      <p>Here's a list of the available courses for the upcoming semester:</p>
      <ul>
        <li>Introduction to Computer Science</li>
        <li>Database Management Systems</li>
        <li>Web Development</li>
        <li>Algorithms and Data Structures</li>
      </ul>
    </div>

    <div id="schedule" class="container-fluid">
      <h1>Schedule</h1>
      <p>Here's the schedule for the upcoming semester:</p>
      <table class="table">
        <thead>
          <tr>
            <th>Course</th>
            <th>Day</th>
            <th>Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Introduction to Computer Science</td>
            <td>Monday</td>
            <td>9:00 AM - 11:00 AM</td>
          </tr>
          <tr>
            <td>Database Management Systems</td>
            <td>Tuesday</td>
            <td>2:00 PM - 4:00 PM</td>
          </tr>
          <tr>
            <td>Web Development</td>
            <td>Wednesday</td>
            <td>11:00 AM - 1:00 PM</td>
          </tr>
          <tr>
            <td>Algorithms and Data Structures</td>
            <td>Thursday</td>
            <td>3:00 PM - 5:00 PM</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="register" class="container-fluid">
      <h1>Registration</h1>
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
  </body>
</html>
```
In this example, we have used the data-spy="scroll" attribute on the <body> element to enable Scrollspy on the page. We have also specified the data-target and data-offset attributes to indicate which element to use as the target for Scrollspy and the offset value to adjust the scroll position.

We have then added a navbar at the top of the page with links to the different sections of the page. Each link has a href attribute that points to the corresponding section on the page.

We have also given each section a unique id attribute that matches the href value of the corresponding link in the navbar.

Finally, we have used standard Bootstrap classes to style the different elements on the page.


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
