<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Lab 13: Sidebar Menu Templates

> File 📁 : [13 Sidebar](./download)
> 
> Activity 🏆 :
> 1. What is a sidebar menu template, and how is it used in web design?
> 2. What are the key features of a responsive sidebar menu template, and how do they work?
> 3. How can you customize a sidebar menu template to match the design of your website?
> 4. What are some popular CSS frameworks and libraries that offer pre-built sidebar menu templates, and how do they work?
> 5. What are some best practices for designing and implementing a sidebar menu template, and how can you ensure it is user-friendly and accessible?
> 

A responsive navigation bar is an important component of modern web design that provides users with easy access to different pages and sections of a website. A responsive navigation bar adjusts its layout and design to fit different screen sizes, from desktops to mobile devices, and ensures that users can navigate the site regardless of the device they are using.

Creating a responsive navigation bar involves using HTML, CSS, and JavaScript to build and style the navigation bar and add interactivity.

Here are the steps to create a basic responsive navigation bar:

1. HTML Markup: The HTML structure of the navigation bar typically consists of a container element that holds the logo and navigation links. Each navigation link is represented by an anchor tag (a) with a hyperlink to the relevant page.

```html
<header class="header">
  <a href="#" class="logo">Logo</a>
  <nav class="nav">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Contact</a>
  </nav>
  <div class="hamburger-menu">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
</header>
```

2. CSS Styling: CSS is used to style the navigation bar and make it responsive. This includes setting the font, color, background, and positioning of the navigation links. CSS is also used to create media queries that adjust the layout and design of the navigation bar for different screen sizes.

```css
/* Header styles */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background-color: #333;
  color: #fff;
}

.logo {
  font-size: 24px;
  font-weight: bold;
  text-decoration: none;
  color: #fff;
}

.nav {
  display: flex;
}

.nav a {
  margin-left: 20px;
  text-decoration: none;
  color: #fff;
}

/* Hamburger menu styles */
.hamburger-menu {
  display: none;
}

.hamburger-menu .bar {
  width: 25px;
  height: 3px;
  margin: 5px 0;
  background-color: #fff;
  transition: all 0.3s ease-in-out;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
  .nav {
    display: none;
    flex-direction: column;
    align-items: center;
  }

  .nav a {
    margin: 10px 0;
  }

  .hamburger-menu {
    display: block;
    cursor: pointer;
  }

  .hamburger-menu.active .bar:nth-child(1) {
    transform: rotate(-45deg) translate(-6px, 6px);
  }

  .hamburger-menu.active .bar:nth-child(2) {
    opacity: 0;
  }

  .hamburger-menu.active .bar:nth-child(3) {
    transform: rotate(45deg) translate(-6px, -6px);
  }
}
```

3. JavaScript Interactivity: JavaScript is used to add interactivity to the navigation bar, such as adding a hamburger menu button that opens and closes the navigation menu on smaller devices.

```javascript
// Add event listener to hamburger menu button
document.querySelector('.hamburger-menu').addEventListener('click', function() {
  // Toggle active class on hamburger menu button
  this.classList.toggle('active');
  // Toggle display property on navigation menu
  document.querySelector('.nav').classList.toggle('active');
});
```

This example includes a basic responsive

## Code

### 1. Simple Sidebar Template in HTML & CSS

This is the most simple Sidebar Menu in this list which is created in basic HTML and CSS code. 

This Sidebar can be your best choice if you’re a complete beginner and want to make a stunning sidebar using only HTML and CSS. For the source code for this Sidebar Menu, click on the given link.

<img src="./download/code.png" width="24" /> [Source Code](./download/Sidebar1)

<img src="./download/sidebar1.png" width="400" />

**Figure 12.1**

### 2. Simple Sidebar in HTML CSS & JavaScript

This is the another simple Sidebar Menu that in created in HTML CSS and JavaScript. To open and close this Sidebar I used some JavaScript code. In this Sidebar Menu I have tried to add various type of navigaion link and their icon. You can also use checkbox to open and close it as like as I did above sidebar.

If you are a complete beginner and want to create this Sidebar Bar then this Sidebar can be you best option.  Even with you basic HTML CSS and JavaScript skills you can create this Sidebar. For the source code for the Sidebar Menu, you can visit the given links.

<img src="./download/code.png" width="24" /> [Source Code](./download/Sidebar2)

<img src="./download/sidebar2.png" width="400" />

**Figure 12.2**

### 3. Sidebar Menu with Tooltip in HTML CSS & JavaScript
This is the best Sidebar in this list which is created in HTML CSS and JavaScript. The fascination part of this sidebar is that when you close the Sidebar Menu then the naivgation icons will visible. Take a look on the image of this Sidebar Menu the left section is the open and right is the close view of the sidebar.

This can be the finest choice for you if you’re seeking for a sidebar menu with contemporary features like a tooltip and a search bar. Also, you can create this Sidebar Menu in simple HTML CSS and JavaScript code. For the source code and the video tutorial for this Sidebar Menu, do visit the given links.

<img src="./download/code.png" width="24" /> [Source Code](./download/Sidebar3)

<img src="./download/sidebar3.png" width="400" />

**Figure 12.3**

### 4. Dropdown Sidebar Menu in HTML CSS & JavaScript
This is the improve version of the above Sidebar Menu. In this Sidebar Menu I have added dropdown facility. When you click on the dropdown arrow icon then it’s dropdown section appear and this sidebar menu is scrollable.

You should definitely try to make this Sidebar Menu because I have included all the features that a trendy Sidebar needs to have. For the source code and a video tutorial for this drop-down sidebar menu, click on the provided links.

<img src="./download/code.png" width="24" /> [Source Code](./download/Sidebar4)

<img src="./download/sidebar4.png" width="400" />

**Figure 12.4**

### 5. Sidebar Menu with Dark Light Mode in HTML CSS & JS
This is the unique Sidebar Menu in this list. The main feature of this Sidebar Menu is its dark and light mode. Also, I have added search box and toggle button on this trendy Sidebar Menu. There is a dark and light mode toggle section at the bottom, by clicking on that toggle button you can turn on or off the dark light mode.

If you are seeking for a trendy Sidebar Menu with the dark and light mode feature then this Sidebar Menu can fulfill your demand. Additionally, you can create this trendy Sidebar with basci HTML CSS & JavaScript code. For the source code and video tutorial for this Sidebar Menu, you can visit the given links.

<img src="./download/code.png" width="24" /> [Source Code](./download/Sidebar5)

<img src="./download/sidebar5.png" width="400" />

**Figure 12.5**


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
