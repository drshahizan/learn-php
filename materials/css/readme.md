<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Cascading Style Sheets (CSS)
Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language, such as HTML. CSS allows web designers to separate the presentation of a web page from its content, making it easier to maintain and update the design of the site.

CSS works by selecting HTML elements and applying style rules to them, such as colors, fonts, spacing, and layout. CSS rules are written in a separate file or embedded directly into an HTML document using the `<style>` tag.

CSS is highly flexible and can be used to create a wide variety of design styles, from simple and minimalist to complex and highly visual. CSS has also evolved to include more advanced features, such as responsive design for creating websites that adapt to different screen sizes, and animations and transitions for adding interactivity to web pages.

In summary, CSS is an essential component of modern web design that allows designers to control the visual appearance and layout of web pages, separate the design from the content, and create responsive and interactive websites.

The standard syntax for writing CSS code is as follows:

```css
selector {
  property: value;
  property: value;
  property: value;
}
```
In this syntax, the selector is the HTML element or group of elements that the CSS rule applies to, and the `{}` curly brackets enclose the CSS properties and values. Each property: value pair sets a specific style for the selected element(s), and multiple pairs can be separated by semicolons.

For example, to set the font size of all `<h1>` tags to 24 pixels and the font color to red, you would use the following syntax:

```css
h1 {
  font-size: 24px;
  color: red;
}
```

CSS also supports different types of selectors, such as class selectors, ID selectors, attribute selectors, and pseudo-selectors, which allow you to target specific elements based on their properties or position in the HTML document.

Note that CSS is a case-insensitive language, meaning that color: red; and COLOR: RED; are equivalent. However, it is a best practice to use lowercase letters for consistency and readability.

## How to call a CSS file in an HTML document
Here are three ways to call a CSS file in an HTML document:

1. Using the `<link`> tag in the <head> section:

```css
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
  ```

2. Using the `@import` rule in the `<style>` tag:
```css
<style>
  @import url("style.css");
</style>
```
  
  3. Using the style attribute in the HTML element:
```css
<h1 style="color: red;">Hello World!</h1>
```
  
Note that the first two methods are preferred over the third method, as they allow you to separate the HTML and CSS code and apply styles consistently across multiple pages. The first method is the most commonly used and recommended approach, as it loads the CSS file externally from the HTML document and can improve page loading speed and SEO. The second method is less commonly used and can affect page loading speed if the CSS file is large or there are multiple `@import` rules.

## Sample Code:

### 1. Internal CSS
	
Here is an example of how to include CSS code in an HTML document using the `<style>` tag:

```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <style>
      /* CSS code starts here */
      body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
      }
      
      h1 {
        color: #333;
        font-size: 28px;
        margin-bottom: 20px;
      }
      
      p {
        color: #666;
        font-size: 18px;
        margin-bottom: 10px;
      }
      
      a {
        color: #007bff;
        text-decoration: none;
      }
      
      /* CSS code ends here */
    </style>
  </head>
  <body>
    <h1>Welcome to My Website</h1>
    <p>This is a paragraph of text. <a href="#">This is a link.</a></p>
  </body>
</html>
```

In this example, the CSS code is written directly inside the `<style>` tag in the `<head>` section of the HTML document. The CSS code targets different HTML elements, such as the `<body>`, `<h1>`, `<p>`, and `<a>` tags, and applies different styles to them, such as font size, color, margin, and text decoration.

Note that the CSS code is enclosed in a comment to distinguish it from the HTML code, and each CSS rule ends with a semicolon. The use of indentation and whitespace is optional, but it helps to make the code more readable and easier to edit.

This is just a basic example, and there are many more advanced techniques and best practices for writing CSS code in HTML documents, such as using external CSS files, using CSS preprocessors, and using CSS frameworks like Bootstrap.

### 2. External CSS

Here's an example of how external CSS can be used to style a simple webpage:

**HTML: external.html**

```html
<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    <header>
      <h1>Welcome to my website</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis euismod
        velit non urna posuere bibendum. Donec vitae metus in est faucibus
        vestibulum. Nunc vulputate turpis non metus ultricies, et maximus metus
        ultricies. Integer quis facilisis est, sit amet congue felis. Sed id
        velit eget quam aliquam laoreet nec vel eros. Praesent at nibh ut nisi
        lobortis eleifend.
      </p>
    </main>
    <footer>
      <p>&copy; 2023 DR MSO My Website. All rights reserved.</p>
    </footer>
  </body>
</html>
```  

**CSS (style.css)**:

```css
/* Global Styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin-right: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

main {
  padding: 20px;
}

footer {
  background-color: #333;
  color: #fff;
  padding: 10px;
  text-align: center;
}

```
  
In this example, the CSS styles are used to customize the font, colors, and layout of the website. The body element has a specific font family and background color applied to it, while the header, nav, and footer elements have their own unique styles for background color, text color, and padding. The nav element is customized with a list-style of none, making it easier to style and position the navigation links. Overall, the CSS styles create a cohesive and visually appealing design for the website.

## Additional Notes ❤️
- [Learning CSS for a beginner](topic-css.md) 
- [Learn CSS](learn-css.md) 
- [CSS Text](css-text.md)
- [Layout Design](layout-design.md) 
- [Free CSS layouts design](free-layout.md) 

## E-book

- [Essential HTML & CSS books (free e- books)](https://cssauthor.com/free-html-and-css-books/https://freefrontend.com/html-css-books/#css-books)
- [CSS Books](https://freefrontend.com/html-css-books/#css-books)

## Useful Links
- [Introduction to CSS](https://cs.wellesley.edu/~cs115/readings/CSS1.html)
- [Fonts and Web Fonts](https://cs.wellesley.edu/~cs110/reading/fonts.html)
- [Responsive Web Design](https://www.w3schools.com/html/html_responsive.asp)
- [Navigational Structures](https://cs.wellesley.edu/~cs110/lectures/WebNavigation/)
- [CSS Generators](https://www.cssportal.com/css-generators.php)
- [CSS Tools](https://www.cssportal.com/css-tools.php)
- [CSS Resources](https://www.cssportal.com/css-resources.php)
- [Stop using so many divs! An intro to semantic HTML](https://dev.to/kenbellows/stop-using-so-many-divs-an-intro-to-semantic-html-3i9i)
- [CSS Cheat Sheet](https://web.stanford.edu/group/csp/cs21/csscheatsheet.pdf)
- [CSS Code Examples](https://freefrontend.com/css-code-examples/)
- [Learn CSS Grid by building a simple Calculator Layout](https://freshman.tech/css-grid-calculator/)
- [Video: Build a Calculator with CSS Grid](https://www.youtube.com/watch?v=9PzkWxleT5E)
- [Best HTML and CSS Cheat Sheets](https://cssauthor.com/html-and-css-cheat-sheets/)
- [CSS2 Cheat Sheet](https://cheatography.com/davechild/cheat-sheets/css2/)
- [Devopedia: Cascading Style Sheets](https://devopedia.org/cascading-style-sheets)
- [Khan Academy: CSS box model](https://www.khanacademy.org/computing/computer-programming/html-css/css-layout-properties/pt/css-box-model)
- [Devopedia: CSS Box Model](https://devopedia.org/css-box-model)
- [Devopedia: CSS Flexbox](https://devopedia.org/css-flexbox)
- [Devopedia: CSS Grid Layout](https://devopedia.org/css-grid-layout)
- [CSS layout](https://developer.mozilla.org/en-US/docs/Learn/CSS/CSS_layout)
- [Box Model: CSS Website Layout](https://www.w3schools.com/css/css_website_layout.asp)
- [W3.CSS Layout](https://www.w3schools.com/w3css/w3css_layout.asp)
- [Getting Started With CSS Layout](https://www.smashingmagazine.com/2018/05/guide-css-layout/)
- [Grid by Example](https://gridbyexample.com/)

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
