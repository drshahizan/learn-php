<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap CSS classes

Bootstrap is a popular front-end development framework that provides a set of pre-designed CSS classes to style and layout HTML elements. Bootstrap classes can be used to create responsive, mobile-first websites quickly and easily. Here are some of the most commonly used Bootstrap CSS classes:

| CSS Class Category | Description |
| --- | --- |
| Grid | A responsive grid system that allows you to create layouts for different screen sizes. Grid classes include container, row, and col classes. |
| Typography | Typography classes to style headings, paragraphs, and other text elements. Typography classes include h1-h6, lead, and text-muted. |
| Button | A variety of button styles, including primary, secondary, success, danger, warning, info, and light. Button classes include btn, btn-primary, btn-secondary, and so on. |
| Form | Form classes to style form elements such as inputs, labels, and buttons. Form classes include form-control, form-label, and form-check. |
| Navbar | A responsive navbar component that can be easily customized using navbar classes. Navbar classes include navbar, navbar-brand, navbar-nav, and navbar-toggler. |
| Card | Classes to create flexible and attractive content containers. Card classes include card, card-header, card-body, and card-footer. |
| Utility | A variety of utility classes that can be used to quickly add margin, padding, text alignment, and other styles to HTML elements. Utility classes include mx-auto, text-center, and text-muted. |

> Note: This is not an exhaustive list and there are many more Bootstrap CSS classes available.

These are just a few examples of the many Bootstrap CSS classes available. By using these classes, developers can quickly and easily create responsive, mobile-first websites without having to write a lot of custom CSS code.

## Grid system
Bootstrap's Grid system is a powerful and flexible way to create responsive layouts for websites. The Grid system is based on a 12-column layout, with columns that can be combined and customized to create different layouts for different screen sizes. Here are some key concepts and classes related to the Bootstrap Grid system:

1. **Containers**: Containers are used to create a fixed-width container for content. Containers are defined using the `container` class.

2. **Rows**: Rows are used to group columns together horizontally. Rows are defined using the `row` class.

3. **Columns**: Columns are used to define the width of a section of content. Columns are defined using the `col` class, followed by a number indicating the number of columns the section should occupy. For example, `col-6` would create a section that occupies 6 out of the 12 columns in the row.

4. **Column sizes**: In addition to `col-`, Bootstrap provides a variety of classes to customize column sizes for different screen sizes. These include `col-sm-`, `col-md-`, and `col-lg-`, among others.

5. **Column offsets**: Column offsets can be used to create space between columns. Column offsets are defined using the `offset-` class, followed by a number indicating the number of columns to offset.

By using these classes, developers can create complex and responsive layouts that work across a variety of screen sizes and devices. For example, a developer might create a layout with two columns on a desktop screen (`col-md-6`), but change to a single column layout on a mobile screen (`col-sm-12`).

### Code

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Grid Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <h1>Bootstrap Grid Example</h1>
      <p>Resize the browser window to see the effect.</p>
      <div class="row">
        <div class="col-sm-4" style="background-color: lavender">Column 1</div>
        <div class="col-sm-4" style="background-color: lavenderblush">
          Column 2
        </div>
        <div class="col-sm-4" style="background-color: lavender">Column 3</div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>
```

In this example, we have included the Bootstrap CSS and JavaScript files from a CDN, but you can also download and host them locally if you prefer. The `container` class is used to create a fixed-width container that centers the content on the page. Within the container, we have a `row` class that contains three `col-sm-4` classes. This creates a row with three equal-width columns on small and larger screens. We have also added some inline styles to give each column a different background color for demonstration purposes.

When you open this HTML file in a web browser and resize the window, you will see that the columns adjust their widths to maintain the same layout, even on different screen sizes. This is the power of Bootstrap's grid system, which allows developers to create responsive web designs that work well on any device. 

### Case study
An example of a complete HTML code using Bootstrap's grid classes for a university academic course registration system:

```
<!DOCTYPE html>
<html>
  <head>
    <title>Course Registration System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <h1>Course Registration System</h1>
      <div class="row">
        <div class="col-lg-4">
          <h2>Student Information</h2>
          <form>
            <div class="form-group">
              <label for="student-name">Name:</label>
              <input
                type="text"
                class="form-control"
                id="student-name"
                placeholder="Enter name"
              />
            </div>
            <div class="form-group">
              <label for="student-id">ID:</label>
              <input
                type="text"
                class="form-control"
                id="student-id"
                placeholder="Enter ID"
              />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-8">
          <h2>Course Information</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Credit Hours</th>
                <th>Select</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CSCI101</td>
                <td>Introduction to Computer Science</td>
                <td>3</td>
                <td>
                  <input
                    type="checkbox"
                    id="csci101"
                    name="csci101"
                    value="csci101"
                  />
                </td>
              </tr>
              <tr>
                <td>MATH201</td>
                <td>Calculus I</td>
                <td>4</td>
                <td>
                  <input
                    type="checkbox"
                    id="math201"
                    name="math201"
                    value="math201"
                  />
                </td>
              </tr>
              <tr>
                <td>PHYS101</td>
                <td>Introductory Physics</td>
                <td>4</td>
                <td>
                  <input
                    type="checkbox"
                    id="phys101"
                    name="phys101"
                    value="phys101"
                  />
                </td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-primary">
            Register Courses
          </button>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>

```

In this example, we have created a course registration system for a university. The `container` class is used to create a fixed-width container that centers the content on the page. Within the container, we have a `row` class that contains two `col-lg-4` and `col-lg-8` classes. This creates a row with two columns, one for student information and the other for course information. The `lg` size modifier specifies that the column layout should be applied for large screens and above.

In the left column, we have a form for entering student information, including name and ID. In the right column, we have a table that displays course information, including the course code, title, credit hours, and a checkbox to select the course. We have used the `table` class to create a responsive table that adjusts to the screen size. Finally, we have a `button` to register the selected courses.

By using the grid system, we have created a responsive layout that adjusts to the screen size. The `container` class ensures that the content is centered on the page and the `row` and `col` classes create a flexible layout that adjusts based on the screen size.

Bootstrap's grid system is a powerful tool for creating responsive layouts that work on different screen sizes. By using the `container`, `row`, and `col` classes, we can create a flexible and responsive layout that adjusts to the screen size. This is especially important for web applications like the university academic course registration system, which need to work well on different devices and screen sizes.

## Typography
Bootstrap CSS classes for typography are designed to help create a consistent and readable text across your web pages. Bootstrap provides a range of classes to style your text, including headings, paragraphs, lists, and more.

| Bootstrap CSS Classes | Description | Example |
|-----------------------|-------------|---------|
| `h1` to `h6`           | Define the six levels of headings in HTML | `<h1>Heading 1</h1>` |
| `lead`                 | Style a paragraph to be larger and more prominent | `<p class="lead">This paragraph is larger and more prominent</p>` |
| `text-muted`           | Style less important or secondary text | `<p class="text-muted">This text is less important</p>` |
| `text-primary`        | Apply a primary color to text | `<p class="text-primary">This text is in a primary color</p>` |
| `text-secondary`      | Apply a secondary color to text | `<p class="text-secondary">This text is in a secondary color</p>` |
| `text-success`        | Apply a success color to text | `<p class="text-success">This text is in a success color</p>` |
| `text-danger`         | Apply a danger color to text | `<p class="text-danger">This text is in a danger color</p>` |
| `text-warning`        | Apply a warning color to text | `<p class="text-warning">This text is in a warning color</p>` |
| `text-info`           | Apply an info color to text | `<p class="text-info">This text is in an info color</p>` |
| `text-dark`           | Apply a dark color to text | `<p class="text-dark">This text is in a dark color</p>` |
| `font-weight-bold`    | Make the text bold | `<p class="font-weight-bold">This text is bold</p>` |
| `font-weight-normal`  | Restore the default weight of the text | `<p class="font-weight-normal">This text has a normal weight</p>` |
| `text-center`         | Center align the text | `<p class="text-center">This text is centered</p>` |
| `text-right`          | Right align the text | `<p class="text-right">This text is aligned to the right</p>` |
| `text-left`           | Left align the text | `<p class="text-left">This text is aligned to the left</p>` |
| `list-unstyled`       | Remove default styling from lists | `<ul class="list-unstyled"><li>List item 1</li><li>List item 2</li></ul>` |

These are just some examples of how to use Bootstrap CSS classes for typography in your HTML code. By using these classes, you can style your text consistently and effectively, creating a professional and engaging website.

### Code

Sure, here's an example HTML code that includes Bootstrap CSS classes for typography:

```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Typography Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

  <div class="container">
    <h1>Bootstrap Typography Example</h1>
    <p class="lead">This paragraph is larger and more prominent.</p>
    <p>This is some regular text.</p>
    <p class="text-muted">This text is less important.</p>
    <p class="text-primary">This text is in a primary color.</p>
    <p class="text-secondary">This text is in a secondary color.</p>
    <p class="text-success">This text is in a success color.</p>
    <p class="text-danger">This text is in a danger color.</p>
    <p class="text-warning">This text is in a warning color.</p>
    <p class="text-info">This text is in an info color.</p>
    <p class="text-dark">This text is in a dark color.</p>
    <p class="font-weight-bold">This text is bold.</p>
    <p class="font-weight-normal">This text has a normal weight.</p>
    <p class="text-center">This text is centered.</p>
    <p class="text-right">This text is aligned to the right.</p>
    <p class="text-left">This text is aligned to the left.</p>
    <ul class="list-unstyled">
      <li>List item 1</li>
      <li>List item 2</li>
    </ul>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
```

In this code, we have included the Bootstrap CSS file in the `<head>` section and added various Bootstrap CSS classes for typography to different elements on the page. The result is a page that is visually appealing and easy to read.

The `<h1>` element uses the default Bootstrap typography style for headings, which is bold and has a larger font size than regular text. 

The `<p>` elements use various Bootstrap typography classes, such as `lead` for the first paragraph, `text-muted` for the third paragraph, and color classes such as `text-primary`, `text-secondary`, and `text-success` for the fourth, fifth, and sixth paragraphs respectively. 

We have also used `text-danger` and `text-warning` classes for the seventh and eighth paragraphs, which are used to display text in red and yellow colors respectively. 

The ninth paragraph uses `text-info` class, which displays text in a light blue color.

The tenth paragraph uses `text-dark` class, which displays text in a dark gray color. 

The eleventh and twelfth paragraphs use `font-weight-bold` and `font-weight-normal` classes, which are used to make the text bold and normal respectively.

The thirteenth, fourteenth, and fifteenth paragraphs use `text-center`, `text-right`, and `text-left` classes respectively, which are used to align the text to the center, right, and left respectively.

Lastly, we have used `list-unstyled` class for the unordered list to remove the default bullets and make the list items appear as plain text.

Overall, the use of Bootstrap typography classes helps to create a visually consistent and aesthetically pleasing design for the webpage.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
