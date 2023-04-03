<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# How to create a simple HTML page with all the important tagging

## Example 1

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First HTML Page</title>
    <style>
      /* CSS styles go here */
    </style>
  </head>
  <body>
    <header>
      <h1>Welcome to My Website</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <h2>About Me</h2>
        <p>Hi, my name is Shah and I am a web developer.</p>
      </section>
      <section>
        <h2>My Projects</h2>
        <ul>
          <li><a href="#">Project 1</a></li>
          <li><a href="#">Project 2</a></li>
          <li><a href="#">Project 3</a></li>
        </ul>
      </section>
    </main>
    <footer>
      <p>&copy; MSO 2023 My Website</p>
    </footer>
  </body>
</html>
```

Here is an explanation of the important tagging used in this HTML page:

- `<!DOCTYPE html>`: This tag specifies the document type and version of HTML being used.

- `<html lang="en">`: This tag indicates the start and end of an HTML document, and specifies the language of the content.

- `<head>`: This tag contains metadata about the HTML document, such as the title, character set, viewport, and styles.

- `<meta charset="UTF-8">`: This tag specifies the character encoding of the HTML document.

- `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: This tag specifies the width and initial scale of the viewport, which affects how the web page is displayed on different devices.

- `<title>My First HTML Page</title>`: This tag specifies the title of the HTML document, which appears in the browser's title bar.

- `<style>`: This tag contains CSS styles that are applied to the HTML document.

- `<header>`: This tag represents the header section of the HTML document, which typically contains a logo, navigation menu, and/or heading.

- `<nav>`: This tag represents a navigation menu, which usually contains a list of links.

- `<ul>`: This tag represents an unordered list of items.

- `<li>`: This tag represents a list item, which is typically used within a `<ul>` or `<ol>` tag.

- `<a href="#">Home</a>`: This tag represents a hyperlink, which is used to link to other web pages or resources. The href attribute specifies the URL of the resource being linked to.

- `<main>`: This tag represents the main content of the HTML document.

- `<section>`: This tag represents a section of content within the HTML document.

- `<footer>`: This tag represents the footer section of the HTML document, which typically contains copyright information and/or links to social media profiles.

- `<p>`: This tag represents a paragraph of text.

- `<h1>` to `<h6>`: These tags represent headings of different levels, with `<h1>` being the largest and most important heading.

## Example 2

```html
<!DOCTYPE html>
<html>
  <head>
    <title>My First HTML Page</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <h1>Welcome to my website!</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section>
        <h2>About Me</h2>
        <p>My name is Shah and I am a web developer.</p>
        <p>I enjoy learning new things and creating beautiful websites.</p>
      </section>
      <section>
        <h2>Contact Me</h2>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required /><br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required /><br><br>
          <label for="message">Message:</label>
          <textarea id="message" name="message" required></textarea><br><br>
          <input type="submit" value="Submit" />
        </form>
      </section>
    </main>
    <footer>
      <p>Copyright &copy; MSO 2023 My Website</p>
    </footer>
  </body>
</html>
```

Explanation of the important tagging:

-`<!DOCTYPE html>`: This tag declares the document type as HTML5.

-`<html>`: This tag indicates the start and end of an HTML document.

-`<head>`: This tag contains metadata about the HTML document, such as the title, character encoding, and viewport settings.

-`<title>`: This tag specifies the title of the HTML document, which appears in the browser tab.

-`<meta>`: This tag provides additional metadata about the HTML document, such as the character encoding and viewport settings.

-`<link>`: This tag is used to link to an external CSS stylesheet, which contains styles for the HTML elements.

-`<body>`: This tag contains the visible content of the web page.

-`<header>`: This tag contains the header section of the web page, which typically includes a logo, navigation menu, and page title.

-`<nav>`: This tag defines a navigation menu, which typically contains links to other pages on the website.

-`<ul>`: This tag defines an unordered list of items.

-`<li>`: This tag defines a list item, which is nested inside a <ul> tag.

-`<a>`: This tag defines a hyperlink, which is used to link to other web pages or resources.

-`<main>`: This tag contains the main content of the web page, such as articles, blog posts, and other types of content.

-`<section>`: This tag defines a section of the web page, which typically contains related content.

-`<h2>`: This tag defines a second-level heading, which is used to introduce the content of the section.

-`<p>`: This tag defines a paragraph of text.

-`<form>`: This tag defines a form, which is used to collect data from the user.

                                                                                                                                 
## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
