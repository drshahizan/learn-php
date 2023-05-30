<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Project Title: Student Portfolio Showcase

## Description:
Create a personal portfolio website that showcases your skills and experiences. The website should include an introduction section, a skills section, an experience section, and a contact section.

## Requirements:
1. The introduction section should include a brief introduction about yourself, your picture, and a call-to-action button that links to the contact section.
2. The skills section should list out your skills using a table or a list.
3. The experience section should include your work or education experience using a timeline or a list.
4. The contact section should include a contact form that collects user input for name, email, and message. 

## HTML Code 1
HTML code for the Personal Portfolio Website without the CSS styling:

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Personal Portfolio Website</title>
  </head>
  <body>
    <header>
      <h1>My Name</h1>
      <img src="my_picture.jpg" alt="My Picture" />
      <p>Brief introduction about myself.</p>
      <button><a href="#contact">Contact Me</a></button>
    </header>

    <section>
      <h2>Skills</h2>
      <ul>
        <li>Skill 1</li>
        <li>Skill 2</li>
        <li>Skill 3</li>
        <li>Skill 4</li>
      </ul>
    </section>

    <section>
      <h2>Experience</h2>
      <ul>
        <li>
          <h3>Job/Position 1</h3>
          <p>Date</p>
          <p>Description</p>
        </li>
        <li>
          <h3>Job/Position 2</h3>
          <p>Date</p>
          <p>Description</p>
        </li>
      </ul>
    </section>

    <section id="contact">
      <h2>Contact Me</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </section>
  </body>
</html>

```

This code includes a header section for the introduction with a picture and a call-to-action button, two sections for the skills and experiences respectively, and a contact section that includes a form to collect user input. The code also uses semantic HTML tags to improve the website's accessibility and SEO.

## HTML Code 2

Here's an HTML code for a project with a light blue background color, an image, links, red font, and three sections (Introduction, Skills, and Experience):

```html
<!DOCTYPE html>
<html>
  <head>
    <title>My Personal Portfolio</title>
    <style>
      body {
        background-color: lightblue;
      }
      h1,
      h2 {
        color: red;
      }
    </style>
  </head>
  <body>
    <!-- Introduction Section -->
    <section>
      <h1>Introduction</h1>
      <img
        src="profile-pic.jpg"
        alt="My Profile Picture"
        width="200"
        height="200"
      />
      <p>Hi, my name is Dr Shah and I'm a web developer.</p>
      <p>
        Check out my <a href="#skills">skills</a> and
        <a href="#experience">experience</a> below, or
        <a href="#contact">contact me</a> directly.
      </p>
    </section>

    <!-- Skills Section -->
    <section id="skills">
      <h2>Skills</h2>
      <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>Python</li>
        <li>React</li>
      </ul>
    </section>

    <!-- Experience Section -->
    <section id="experience">
      <h2>Experience</h2>
      <ul>
        <li>Web Developer at XYZ Company (2018 - Present)</li>
        <li>Freelance Web Designer (2016 - 2018)</li>
        <li>Web Developer Intern at ABC Company (2015)</li>
      </ul>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <h2>Contact</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" /><br />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" /><br />

        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea><br />

        <input type="submit" value="Submit" />
      </form>
    </section>
  </body>
</html>

```

In the example above, the body element is styled with a light blue background color using CSS. The `h1` and `h2` elements are styled with red font color. The img element is used to display a profile picture, and the a elements are used to link to other sections of the page.

The page is divided into three sections: Introduction, Skills, and Experience. The section element is used to create each section, and the id attribute is used to create a unique identifier for each section, which can be linked to using the a element's href attribute.

The Contact section includes a form with fields for name, email, and message, and a submit button. Note that this form does not have any server-side processing, so it will not actually send an email or store any data.


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
