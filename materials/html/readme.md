<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.
# HyperText Markup Language (HTML)
## Introduction
HTML (Hypertext Markup Language) is a markup language used to create the structure and content of web pages. It consists of a series of tags and attributes that define the elements of a web page, such as headings, paragraphs, images, links, forms, and tables.

HTML documents are created using a text editor and saved with a .html file extension. The basic structure of an HTML document includes an HTML tag that encloses the entire document, a head tag that contains meta data and links to external resources, and a body tag that contains the content of the web page.

HTML tags are used to define the structure of a web page, and can be nested to create more complex layouts. For example, the `<header>` tag can be used to define a page header, and can contain other tags such as `<h1>` for the page title and `<nav>` for a navigation menu.

HTML attributes are used to provide additional information about an element, such as the source file of an image or the action to be taken when a form is submitted. Attributes are added to the opening tag of an element and are specified as name-value pairs, separated by an equals sign.

In addition to the standard HTML elements and attributes, there are also many other elements and attributes provided by HTML5, such as `<video>`, `<audio>`, `<canvas>`, and `<svg>`, that allow for more advanced multimedia and graphical capabilities.

Overall, HTML is a fundamental language for web development and is used in conjunction with other web technologies such as CSS and JavaScript to create visually appealing and interactive web pages.

## Standard HTML tags
Here are some standard tags that can be used in HTML:

1. `<html>` - indicates the start of an HTML document
2. `<head>` - contains meta data and links to external resources
3. `<title>` - specifies the title of the web page
4. `<body>` - contains the content of the web page
5. `<h1>` to `<h6>` - creates headings of varying sizes
6. `<p>` - creates a paragraph of text
7. `<a>` - creates a hyperlink to another web page or resource
8. `<img>` - embeds an image into the web page
9. `<ul>` and `<li>` - creates an unordered list
10. `<ol>` and `<li>` - creates an ordered list
11. `<table>`, `<tr>`, `<th>`, and `<td>` - creates a table with rows and columns
12. `<form>` - creates a form for user input
13. `<input>` - creates various form controls, such as text boxes, radio buttons, and checkboxes
14. `<select>` and `<option>` - creates a drop-down list
25. `<button>` - creates a button that can be clicked to perform an action

These are just a few of the many HTML tags available. It's important to use them appropriately and according to the standards set forth by the W3C (World Wide Web Consortium) to ensure that web pages are properly structured and can be viewed consistently across different browsers and devices.

## HTML Code Structure
Here is an example of the basic code structure for an HTML document:


```php
<!DOCTYPE html> <!-- specifies the HTML version -->

<html> <!-- indicates the start of an HTML document -->
  <head> <!-- contains meta data and links to external resources -->
    <meta charset="UTF-8"> <!-- specifies the character encoding for the document -->
    <title>Page Title</title> <!-- specifies the title of the web page -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- links to an external stylesheet for CSS -->
  </head>

  <body> <!-- contains the content of the web page -->
    <header> <!-- defines a header section for the page -->
      <h1>Page Heading</h1> <!-- creates a top-level heading -->
      <nav> <!-- defines a navigation menu -->
        <ul>
          <li><a href="#">Menu Item 1</a></li> <!-- creates a hyperlink for a menu item -->
          <li><a href="#">Menu Item 2</a></li>
          <li><a href="#">Menu Item 3</a></li>
        </ul>
      </nav>
    </header>

    <main> <!-- defines the main content section of the page -->
      <h2>Section Heading</h2>
      <p>Paragraph of text.</p>
      <img src="image.jpg" alt="Image description"> <!-- embeds an image into the web page -->
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <button type="submit">Submit</button> <!-- creates a button to submit the form -->
      </form>
    </main>

    <footer> <!-- defines a footer section for the page -->
      <p>Copyright © 2023 Dr MSO</p>
    </footer>
  </body>
</html>
```

This code includes the basic structure of an HTML document, with tags for the HTML version, document head, document body, and several elements such as headings, paragraphs, images, navigation menu, form, and footer. This is just a basic example, and there are many more HTML tags and attributes that can be used to create more complex web pages.

## Notes
- [HyperText Markup Language (HTML)](html.md)
- [How to create a simple HTML page with all the important tagging](html-example.md)
- [HTML Projects](html-project.md)
- [Sample: Personal Portfolio Website](html-portfolio.md)
- [Sample: Online Recipe Book](html-recipe.md)
- [HTML, CSS and JS](html-css-js.md)

## Useful Links
- [What tools do the professionals use? 🔥](https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/Installing_basic_software#what_tools_do_the_professionals_use)
- [Are HTML and JavaScript both the same?](https://www.quora.com/Are-HTML-and-JavaScript-both-the-same)
- [W3C validator: Markup Validation Service 🔥](https://validator.w3.org/)
- [W3Schools: HTML 🔥](https://www.w3schools.com/html/default.asp)
- [Emmet.io — the essential toolkit for web-developers](https://emmet.io/)
- [Learn to Code HTML & CSS Develop & Style Websites](https://learn.shayhowe.com/html-css/)
- [Free Web Development Tutorials for those who are broke and cannot afford paid courses.](https://www.reddit.com/r/learnjavascript/comments/8sulvf/free_web_development_tutorials_for_those_who_are/)
- [Document and website structure](https://developer.mozilla.org/en-US/docs/Learn/HTML/Introduction_to_HTML/Document_and_website_structure)
- [HTML5 Periodical Table](https://websitesetup.org/html5-periodical-table/)
- [HTML Cheat Sheet](https://htmlcheatsheet.com/)
- [HTML Cheat Sheet - Stanford](https://web.stanford.edu/group/csp/cs21/htmlcheatsheet.pdf)
- [Top 3 Biggest 'Misteaks' In Web Design](./materials/top3misteaks.ppt)

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
