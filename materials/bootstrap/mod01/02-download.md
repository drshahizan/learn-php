<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Downloading Bootstrap

Bootstrap is a popular open-source framework used for developing responsive and mobile-first web applications. To start using Bootstrap, you need to download it first. Here's how you can download Bootstrap:

1. Go to the official Bootstrap website at https://getbootstrap.com/.
2. Click on the "Download" button in the top right corner of the page.
3. Choose the version of Bootstrap that you want to download. You can choose from the compiled and minified CSS and JavaScript files or the source code.
4. Once you've selected the version you want, click on the "Download" button next to it.
5. Extract the downloaded file to your computer.
6. Inside the extracted folder, you'll find the necessary files for using Bootstrap in your web projects, such as CSS and JavaScript files, fonts, and documentation.

Alternatively, you can also use a package manager like npm or yarn to install Bootstrap in your project. This can simplify the process of managing dependencies and updating Bootstrap in the future. To install Bootstrap using npm, you can run the following command in your terminal:

```html
npm install bootstrap
```

This will install the latest version of Bootstrap and its dependencies in your project's node_modules directory. You can then include the necessary Bootstrap files in your HTML and CSS files to start using it in your project.

## Installation Bootstrap

To install Bootstrap and its CSS, JavaScript, and fonts, you can follow these steps:

1. Download Bootstrap: Go to https://getbootstrap.com and download the latest version of Bootstrap. You can choose to download the compiled CSS and JavaScript files, or the Sass source files if you want to customize Bootstrap.

2. Extract the files: Once you have downloaded the Bootstrap files, extract them to a folder on your computer.

3. Link to the CSS file: In the `<head>` section of your HTML file, link to the Bootstrap CSS file. You can use a CDN (Content Delivery Network) to link to the file, or you can link to the file on your local server.

```css
<!-- Link to the Bootstrap CSS file -->
<link rel="stylesheet" href="path/to/bootstrap.min.css">
```

4. Link to the JavaScript file: In the <body> section of your HTML file, link to the Bootstrap JavaScript file. You can use a CDN to link to the file, or you can link to the file on your local server.

```javascript
<!-- Link to the Bootstrap JavaScript file -->
<script src="path/to/bootstrap.min.js"></script>
```

5. Link to the fonts: Bootstrap uses a set of icons called Glyphicons, which are included in the fonts folder of the Bootstrap files. To use the Glyphicons, link to the fonts folder in your CSS file.

```html
/* Link to the Bootstrap fonts */
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/glyphicons-halflings-regular.eot');
  /* Other font formats for cross-browser compatibility */
}
```

6. Test your installation: Once you have linked to the Bootstrap CSS, JavaScript, and fonts files, you can test your installation by creating a web page and using Bootstrap's CSS classes and JavaScript plugins.

These are the basic steps to install Bootstrap and its CSS, JavaScript, and fonts. You can also customize Bootstrap by modifying its Sass source files, or by using a CSS preprocessor such as Less or Stylus.

## Official website of Bootstrap 
[https://getbootstrap.com](https://getbootstrap.com) is the official website of Bootstrap, a popular open-source front-end framework used for developing responsive and mobile-first web applications. The website provides documentation, tutorials, examples, and resources to help developers learn how to use Bootstrap and build modern and professional-looking web applications.

On the Bootstrap website, you can download the latest version of the framework, access the documentation, and browse through examples and templates to get started with Bootstrap quickly. You can also find information about the framework's features and components, such as the grid system, forms, buttons, modals, and carousels, and learn how to customize and extend Bootstrap using Sass and JavaScript.

In addition to the documentation and resources, the Bootstrap website also provides information about the community, including contributors, supporters, and events. You can also follow Bootstrap on social media platforms and join the official Slack channel to connect with other developers and stay up-to-date with the latest news and updates.

| Bootstrap Features | Description |
| --- | --- |
| Responsive Design | Bootstrap's grid system allows web pages to adjust their layout and size to different screen sizes and devices, ensuring a consistent user experience across different devices. |
| CSS Preprocessing | Bootstrap is built using Sass, a popular CSS preprocessor that allows developers to write CSS more efficiently and maintainably. |
| UI Components | Bootstrap provides a set of predefined UI components, such as forms, buttons, modals, and carousels, that can be easily added to web pages without the need for custom CSS or JavaScript code. |
| JavaScript Plugins | Bootstrap includes a range of JavaScript plugins, such as dropdowns, tooltips, and popovers, that enhance the functionality of web pages and make them more interactive. |
| Customizable | Bootstrap can be customized using its built-in Sass variables and mixins or by creating custom CSS styles. This allows developers to create unique and personalized designs while still benefiting from the framework's features and components. |
| Browser Compatibility | Bootstrap is designed to work on all modern web browsers, including Chrome, Firefox, Safari, and Edge. |
| Community Support | Bootstrap has a large and active community of developers who contribute to the framework's development, provide support, and create extensions and plugins. |
| Accessibility | Bootstrap is designed with accessibility in mind and includes features such as keyboard navigation, ARIA labels, and high contrast modes. |

Overall, the Bootstrap website is a valuable resource for developers who want to learn how to use the framework and build modern and responsive web applications quickly and easily.

## Code
A complete HTML code using Bootstrap

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bootstrap Example</title>
    <!-- Link to Bootstrap CSS file -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <h1>Bootstrap Example</h1>
      <p>This is a simple Bootstrap example.</p>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">Card Header</div>
            <div class="card-body">
              <p class="card-text">This is a card with some text.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">Card Header</div>
            <div class="card-body">
              <p class="card-text">This is another card with some text.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Link to Bootstrap JavaScript file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

```

This code creates a simple web page with a Bootstrap container, heading, paragraph, and two Bootstrap cards. It also links to the Bootstrap CSS and JavaScript files using a CDN.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
