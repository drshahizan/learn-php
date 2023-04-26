<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap Grid System

Bootstrap Grid System is a responsive grid system developed by Twitter. It is a powerful front-end framework that allows developers to create responsive and mobile-first websites quickly and easily. The grid system consists of a series of rows and columns that can be used to layout content in a flexible and customizable way.

The Bootstrap Grid System is based on a 12-column layout. Each row is divided into 12 equal-width columns. Developers can use any combination of columns to create a layout that suits their needs. For example, a developer could use two 6-column columns, three 4-column columns, or four 3-column columns.

The grid system is designed to be responsive, meaning that it can adapt to different screen sizes and devices. This is achieved through the use of CSS media queries that adjust the layout of the grid system based on the width of the screen. The grid system includes four classes for different screen sizes: `xs` (extra small), `sm` (small), `md` (medium), and `lg` (large).

In addition to the basic grid system, Bootstrap also includes a range of pre-built classes and components that can be used to create a wide variety of layouts and designs. These include navigation menus, forms, buttons, and much more. Developers can also customize the framework by modifying the CSS and JavaScript files.

Overall, the Bootstrap Grid System is a powerful tool for front-end developers that allows them to create responsive and flexible layouts quickly and easily. Its popularity and widespread adoption make it a valuable skill for anyone looking to work in web development.

## Key aspects of the Bootstrap Grid System

| Aspect | Description |
|--------|-------------|
| Rows   | The horizontal containers that hold columns |
| Columns | The vertical containers that hold content |
| Widths  | The columns are divided into 12 equal parts, allowing for flexible layouts |
| Offset  | Columns can be offset from the left by a certain number of columns |
| Nesting | Columns can be nested inside other columns |
| Responsive | The grid system is responsive, allowing for different layouts on different screen sizes |
| Breakpoints | The grid system includes four breakpoints (`xs`, `sm`, `md`, `lg`) that define different screen sizes |
| Classes | Bootstrap includes classes for different column widths (`col-`, `col-sm-`, `col-md-`, etc.) as well as other layout-related classes (`row`, `container`, `container-fluid`, etc.) |
| Customization | The grid system can be customized using CSS and JavaScript |
| Pre-built components | Bootstrap includes a range of pre-built components (e.g. navigation menus, forms, buttons, etc.) that can be used in conjunction with the grid system |

## How it works: Bootstrap’s grid system 
Bootstrap's grid system works by dividing the screen into a series of rows and columns. The grid system is based on a 12-column layout, where each row is divided into 12 equal-width columns. This allows developers to create layouts that are flexible and customizable.

To use the grid system, developers can add rows and columns to their HTML code using Bootstrap's pre-built classes. For example, a row can be created using the `row` class:

```javascript
<div class="row">
  ...
</div>
```

Inside the row, columns can be added using classes such as `col-`, `col-sm-`, `col-md-`, and so on, depending on the desired width of the column. For example, a column that takes up 6 out of 12 columns (i.e. half the width of the row) could be created using the `col-6` class:

```javascript
<div class="row">
  <div class="col-6">
    ...
  </div>
  <div class="col-6">
    ...
  </div>
</div>
```

Columns can also be offset from the left by a certain number of columns using classes such as `offset-`, `offset-sm-`, `offset-md-`, and so on. For example, a column that is offset by 2 columns could be created using the `offset-2` class:

```javascript
<div class="row">
  <div class="col-6 offset-2">
    ...
  </div>
</div>
```

The grid system is also responsive, meaning that it can adapt to different screen sizes and devices. This is achieved through the use of CSS media queries that adjust the layout of the grid system based on the width of the screen. Bootstrap includes four breakpoints (`xs`, `sm`, `md`, and `lg`) that define different screen sizes, and classes can be used to target specific screen sizes. For example, a column that takes up 12 columns on small screens but 6 columns on medium screens could be created using the `col-12 col-md-6` classes:

```javascript
<div class="row">
  <div class="col-12 col-md-6">
    ...
  </div>
</div>
```

## Grid options for the different screen sizes
A table that summarizes the grid options for the different screen sizes in the Bootstrap Grid System:

| Screen Size | CSS Class Prefix | Maximum Container Width | Number of Columns | Gutter Width |
|-------------|--------------|:-----------:|:-----------:|:-----------:|
| Extra small | `col-`          | None                    | 12                | 15px         |
| Small       | `col-sm-`       | 540px                   | 12                | 15px         |
| Medium      | `col-md-`       | 720px                   | 12                | 30px         |
| Large       | `col-lg-`       | 960px                   | 12                | 30px         |
| Extra large | `col-xl-`       | 1140px                  | 12                | 30px         |

> Note that the maximum container width refers to the maximum width of a container element (`<div class="container">` or `<div class="container-fluid">`) before it switches to the next size breakpoint.

An explanation of each option:

- **Extra small**: This size applies to screens with a width less than 576 pixels. It uses the `col-` class prefix and has no maximum container width, meaning that columns take up the full width of their parent element. The gutter width (i.e. the space between columns) is 15 pixels.
- **Small**: This size applies to screens with a width of 576 pixels or more. It uses the `col-sm-` class prefix and has a maximum container width of 540 pixels. The gutter width is 15 pixels.
- **Medium**: This size applies to screens with a width of 768 pixels or more. It uses the `col-md-` class prefix and has a maximum container width of 720 pixels. The gutter width is 30 pixels.
- **Large**: This size applies to screens with a width of 992 pixels or more. It uses the `col-lg-` class prefix and has a maximum container width of 960 pixels. The gutter width is 30 pixels.
- **Extra large**: This size applies to screens with a width of 1200 pixels or more. It uses the `col-xl-` class prefix and has a maximum container width of 1140 pixels. The gutter width is 30 pixels.

By using the appropriate class prefixes, developers can create responsive layouts that adapt to different screen sizes and devices.

## Code

### 1. Three equal-width columns centered in the page
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Three Equal-Width Columns</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <h2>Column 1</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <h2>Column 2</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <h2>Column 3</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
```

In this code, we first include the Bootstrap CSS file and the necessary meta tags in the head section. The `container` class centers the columns in the page, while the `row` class creates a row to contain the columns. Each column is given the `col-sm-4`, `col-md-4`, `col-lg-4`, and `col-xl-4` classes to make them equal-width on small, medium, large, and extra large devices respectively. 

I also added some sample content to the columns to show how they can be used. Finally, we include the necessary jQuery and Bootstrap JS files at the end of the body section for additional functionality.

### 2. Auto-layout columns using breakpoint-specific column classes

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Auto-Layout Columns</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Column 1</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
        <div class="col-md">
          <h2>Column 2</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
        <div class="col">
          <h2>Column 3</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>

```

In this code, we first include the Bootstrap CSS file and the necessary meta tags in the head section. The `container` class centers the columns in the page, while the `row` class creates a row to contain the columns. 

Instead of using explicit numbered classes like `col-sm-6`, we can use breakpoint-specific classes like `col-md` to allow the columns to automatically adjust their width based on the device screen size. In this example, the first and third columns are given the `col` class, which means they will occupy an equal amount of space in all screen sizes. The second column is given the `col-md` class, which means it will occupy the remaining space in medium and larger screen sizes, but an equal amount of space in small and extra small screen sizes.

As before, I added some sample content to the columns to show how they can be used. Finally, we include the necessary jQuery and Bootstrap JS files at the end of the body section for additional functionality.

### 3. Flexbox alignment utilities 

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Flexbox Alignment</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-4 text-center">
          <h2>Column 1</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <h2>Column 2</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <h2>Column 3</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
            odio. Praesent libero. Sed cursus ante dapibus diam.
          </p>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
```

In this code, we first include the Bootstrap CSS file and the necessary meta tags in the head section. The `container` class centers the columns in the page, while the `row` class creates a row to contain the columns.

We use the `align-items-center` and `justify-content-center` classes on the `row` element to vertically and horizontally center the columns respectively.

Each column has the `col-md-4` class, which means it will occupy 4 out of 12 columns in medium and larger screen sizes, but will automatically adjust its width in smaller screen sizes. The `text-center` class centers the content of each column.

## Key points of Bootstrap Grid System

| Key Points | Description |
| --- | --- |
| Container | Used to contain rows and columns with a fixed or fluid width |
| Row | Used to create a horizontal group of columns |
| Column | Used to specify the layout of a column, and contains content |
| Grid Classes | Used to define the width of columns based on screen size (xs, sm, md, lg, xl) |
| Auto-layout Columns | Column classes that allow columns to be sized without specifying a specific number of columns (e.g. `col-md`) |
| Responsive Breakpoints | Specific screen widths where columns will change layout (e.g. `sm` for small screens) |
| Nesting Columns | Allows columns to be placed within other columns to create more complex layouts |
| Offset Classes | Used to offset columns by a certain number of columns |
| Alignment Classes | Used to align columns vertically and horizontally |
| Reordering Classes | Used to reorder columns for specific screen sizes |
| Flexbox | The underlying technology used by Bootstrap Grid System for layout and alignment |

These are some of the key features and concepts of Bootstrap Grid System that are important to understand when working with it.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
