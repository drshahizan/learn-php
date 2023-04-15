<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# CSS: Exercise
CSS exercises are designed to help web developers and designers practice and enhance their CSS skills. These exercises usually involve creating and styling web page elements, such as text, images, and layout, using CSS. They may also involve using CSS properties and selectors to manipulate various aspects of the page design, such as font size, color, background, borders, and positioning.

CSS exercises can vary in difficulty level, from beginner to advanced, and often include challenges that require critical thinking and problem-solving skills. Completing CSS exercises can help web developers and designers to improve their proficiency with CSS, and develop the ability to create complex and visually appealing website designs. There are various online platforms and resources that offer CSS exercises and challenges:

1. [**Codecademy**](https://www.codecademy.com/learn/learn-css)
Codecademy is a popular online learning platform that offers interactive tutorials and exercises on web development skills, including CSS. Their CSS course covers a range of topics, from basic styling to advanced layout techniques.

2. [**W3Schools**](https://www.w3schools.com/css/exercise.asp)
W3Schools is a well-known online learning platform that provides tutorials and exercises on various web development skills, including CSS. Their CSS exercises include challenges on selecting and styling HTML elements, working with text and fonts, and creating responsive layouts.

3. [**FreeCodeCamp**](https://www.freecodecamp.org/learn/responsive-web-design/basic-css/)
FreeCodeCamp is a nonprofit organization that offers a full web development curriculum, including a course on responsive web design that covers CSS. Their CSS exercises include challenges on styling HTML elements, creating responsive layouts, and implementing CSS animations.

4. [**CSS Diner**](https://flukeout.github.io/)
CSS Diner is a fun and interactive website that teaches CSS selectors through a series of restaurant-themed challenges. Users can select different menu items and apply different selectors to style them.

5. [**Flexbox Froggy**](https://flexboxfroggy.com/)
Flexbox Froggy is another interactive game that teaches CSS layout techniques using the Flexbox model. Users can move a frog through a series of challenges, applying different Flexbox properties to solve them.

6. [**CSS Zen Garden**](http://www.csszengarden.com/)
CSS Zen Garden is a popular website that showcases the power of CSS by displaying the same HTML code styled in a variety of different ways. Users can study the CSS used to create each design and try to recreate them on their own.

7. [**CSS-Tricks**](https://css-tricks.com/challenges/)
CSS-Tricks is a website that provides tutorials, articles, and challenges on web development skills, including CSS. Their CSS challenges cover a range of topics, from basic layout techniques to more advanced topics like CSS animations and transitions.

8. [**Mozilla Developer Network**](https://developer.mozilla.org/en-US/docs/Learn/CSS/First_steps)
Mozilla Developer Network is a resource that provides documentation and tutorials on various web development skills, including CSS. Their CSS exercises include challenges on basic styling techniques, positioning elements, and using Flexbox and Grid layout models.

9. [**SoloLearn**](https://www.sololearn.com/Course/CSS/)
SoloLearn is a mobile app that offers courses on various programming languages and web development skills, including CSS. Their CSS course includes interactive lessons and quizzes, as well as coding challenges to practice different CSS concepts.

10. [**TutsPlus**](https://code.tutsplus.com/articles/30-css-best-practices-for-beginners--net-6741)
TutsPlus is a website that offers tutorials and articles on various web development skills, including CSS. Their article on CSS best practices for beginners provides tips and exercises on using CSS effectively, from organizing CSS files to using CSS frameworks.

## CSS Layout Design
A CSS layout design refers to the arrangement of HTML elements on a web page using CSS (Cascading Style Sheets). CSS is a styling language used to control the visual appearance of HTML elements on a web page, including the layout.

CSS layout design is important because it affects the overall user experience of a website. The layout determines the structure and flow of content on a page, making it easier for users to navigate and find the information they need.

There are several different types of CSS layout designs, including fixed, fluid, responsive, and adaptive. A fixed layout design uses a set width for the web page and doesn't adjust to the size of the user's screen. A fluid layout design adjusts to the size of the user's screen but can result in elements becoming distorted or difficult to read.

A responsive layout design uses a combination of flexible grids and media queries to adjust the layout of a web page based on the screen size of the user's device. This results in a more user-friendly experience for users on different devices.

An adaptive layout design is similar to a responsive layout design, but it uses predetermined breakpoints to adjust the layout of a web page based on the screen size of the user's device. This can result in a more precise and consistent layout design for different screen sizes.

Overall, CSS layout design is an essential aspect of web design, and it's important to choose the right type of layout design based on the needs of the website and the user experience goals.

## Various types of layout designs
There are various types of layout designs that web developers can use for their websites. Here are some of the most common types of layout designs and the multiple ways to achieve them:

### 1. Fixed Layout

A fixed layout design uses a set width for the web page and does not adjust to the size of the user's screen. This layout can be achieved using the CSS "width" property to specify a fixed pixel width for the webpage container.

#### Code: fixed layout design using HTML and CSS

**HTML Code: fixed.html**:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Fixed Layout Design</title>
    <link rel="stylesheet" type="text/css" href="style-fixed.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Fixed Layout Design</h1>
      </header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <main>
        <p>
          Welcome to our website! This is an example of a fixed layout design
          using HTML and CSS.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lacus
          libero. Integer varius ipsum purus, eu sodales nulla molestie vel.
          Donec tincidunt quam in turpis euismod mollis.
        </p>
        <p>
          Praesent consectetur mauris sit amet massa accumsan, ac tincidunt nunc
          euismod. Ut et justo id purus hendrerit bibendum ac sed tellus. Nam
          tincidunt eros velit, eget bibendum magna maximus nec.
        </p>
      </main>
      <footer>
        <p>&copy; 2023 DR MSO - Fixed Layout Design. All rights reserved.</p>
      </footer>
    </div>
  </body>
</html>

```
**CSS Code: style-fixed.css**:

```css
body {
  margin: 0;
  padding: 0;
}

.container {
  width: 960px; /* fixed width for the webpage container */
  margin: 0 auto; /* center the webpage container */
  background-color: #fff;
  font-family: Arial, sans-serif;
}

header {
  background-color: #0072c6;
  color: #fff;
  padding: 20px;
}

nav {
  background-color: #eee;
  padding: 10px;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-right: 10px;
}

nav a {
  color: #000;
  text-decoration: none;
  padding: 5px;
}

nav a:hover {
  background-color: #0072c6;
  color: #fff;
}

main {
  padding: 20px;
}

footer {
  background-color: #ccc;
  padding: 10px;
  text-align: center;
}

```

In this example code, the webpage container has a fixed width of 960 pixels, which will not adjust to the size of the user's screen. The CSS code also includes styles for the header, navigation, main content, and footer sections of the webpage. Note that this is just an example code and can be customized further based on the needs and design goals of the website.


### 2. Fluid Layout
A fluid layout design adjusts to the size of the user's screen but can result in elements becoming distorted or difficult to read. This layout can be achieved using the CSS "width" property to specify a percentage width for the webpage container.

#### Code

**HTML Code: fluid.html**:
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Fluid Layout Design</title>
    <link rel="stylesheet" type="text/css" href="style-fluid.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Fluid Layout Design</h1>
      </header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <main>
        <p>
          Welcome to our website! This is an example of a fluid layout design
          using HTML and CSS.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lacus
          libero. Integer varius ipsum purus, eu sodales nulla molestie vel.
          Donec tincidunt quam in turpis euismod mollis.
        </p>
        <p>
          Praesent consectetur mauris sit amet massa accumsan, ac tincidunt nunc
          euismod. Ut et justo id purus hendrerit bibendum ac sed tellus. Nam
          tincidunt eros velit, eget bibendum magna maximus nec.
        </p>
      </main>
      <footer>
        <p>&copy; 2023 DR MSO Fluid Layout Design. All rights reserved.</p>
      </footer>
    </div>
  </body>
</html>
</html>
```

**CSS Code: style-fluid.css**:
```css
body {
  margin: 0;
  padding: 0;
}

.container {
  width: 100%; /* fluid width for the webpage container */
  background-color: #fff;
  font-family: Arial, sans-serif;
}

header {
  background-color: #0072c6;
  color: #fff;
  padding: 20px;
}

nav {
  background-color: #eee;
  padding: 10px;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-right: 10px;
}

nav a {
  color: #000;
  text-decoration: none;
  padding: 5px;
}

nav a:hover {
  background-color: #0072c6;
  color: #fff;
}

main {
  padding: 20px;
}

footer {
  background-color: #ccc;
  padding: 10px;
  text-align: center;
}

```
In this example code, the webpage container has a fluid width of 100%, which means it will adjust to the size of the user's screen. The CSS code also includes styles for the header, navigation, main content, and footer sections of the webpage. Note that this is just an example code and can be customized further based on the needs and design goals of the website.

### 3. Responsive Layout
A responsive layout design uses a combination of flexible grids and media queries to adjust the layout of a web page based on the screen size of the user's device. This layout can be achieved using CSS media queries to adjust the layout based on the screen size.

#### Code

**HTML Code: responsive.html**:
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Responsive Layout Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style-responsive.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Responsive Layout Design</h1>
      </header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
      <main>
        <section>
          <h2>Welcome to our website!</h2>
          <p>
            This is an example of a responsive layout design using HTML and CSS.
          </p>
        </section>
        <section>
          <h2>Our Services</h2>
          <ul>
            <li>Web Design</li>
            <li>Web Development</li>
            <li>SEO</li>
          </ul>
        </section>
        <section>
          <h2>Our Clients</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel
            lacus libero. Integer varius ipsum purus, eu sodales nulla molestie
            vel. Donec tincidunt quam in turpis euismod mollis.
          </p>
        </section>
      </main>
      <footer>
        <p>&copy; 2023 DR MSO Responsive Layout Design. All rights reserved.</p>
      </footer>
    </div>
  </body>
</html>

```

**CSS Code: style-responsive.css**:
```css
body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
}

.container {
	max-width: 100%; /* set a maximum width for the webpage container */
	margin: 0 auto; /* center the container on the page */
	background-color: #fff;
}

header {
	background-color: #0072c6;
	color: #fff;
	padding: 20px;
}

nav {
	background-color: #eee;
	padding: 10px;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

nav li {
	display: inline-block;
	margin-right: 10px;
}

nav a {
	color: #000;
	text-decoration: none;
	padding: 5px;
}

nav a:hover {
	background-color: #0072c6;
	color: #fff;
}

main {
	padding: 20px;
}

section {
	margin-bottom: 20px;
}

section h2 {
	font-size: 24px;
	margin-bottom: 10px;
}

section ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

footer {
	background-color: #ccc;
	padding: 10px;
	text-align: center;
}

@media only screen and (min-width: 768px) {
	.container {
		display: flex; /* use flexbox for layout */
		flex-wrap: wrap; /* allow items to wrap to new lines if needed */
	}
	
	main {
		flex: 3; /* main content takes up 3/4 of the available space */
	}
	
	nav {
		flex: 1; /* navigation takes up 1/4 of the available space */
		margin-left: 20px; /* add some margin between the main content and navigation */
	}
}

```

### 4. Adaptive Layout
An adaptive layout design is similar to a responsive layout design, but it uses predetermined breakpoints to adjust the layout of a web page based on the screen size of the user's device. This layout can be achieved using CSS media queries to adjust the layout based on specific breakpoints.

#### Code

**HTML Code: adaptive.html**:
```html
<!DOCTYPE html>
<html>
<head>
	<title>Adaptive Layout Design</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style-adaptive.css">
</head>
<body>
	<header>
		<h1>Adaptive Layout Design</h1>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h2>Welcome to our website!</h2>
			<p>This is an example of an adaptive layout design using HTML and CSS.</p>
		</section>
		<section>
			<h2>Our Services</h2>
			<ul>
				<li>Web Design</li>
				<li>Web Development</li>
				<li>SEO</li>
			</ul>
		</section>
		<section>
			<h2>Our Clients</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lacus libero. Integer varius ipsum purus, eu sodales nulla molestie vel. Donec tincidunt quam in turpis euismod mollis.</p>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 DR MSO Adaptive Layout Design. All rights reserved.</p>
	</footer>
</body>
</html>

```
**CSS Code: style-adaptive.css**:
```css
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

header {
  background-color: #0072c6;
  color: #fff;
  padding: 20px;
}

nav {
  background-color: #eee;
  padding: 10px;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-right: 10px;
}

nav a {
  color: #000;
  text-decoration: none;
  padding: 5px;
}

nav a:hover {
  background-color: #0072c6;
  color: #fff;
}

main {
  padding: 20px;
}

section {
  margin-bottom: 20px;
}

section h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

section ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

footer {
  background-color: #ccc;
  padding: 10px;
  text-align: center;
}

@media only screen and (min-width: 768px) {
  header {
    display: flex;
    flex-wrap: wrap;
  }

  nav {
    flex: 1;
    margin-left: 20px;
  }

  main {
    margin-left: 20px;
  }
}

@media only screen and (min-width: 1024px) {
  header {
    display: flex;
  }

  nav {
    order: 2;
  }

  main {
    order: 1;
    flex: 3;
  }

  section {
    flex: 1;
    margin-left: 20px;
  }
}

```

### 5. Grid Layout
A grid layout design uses a grid system to arrange elements on a web page. This layout can be achieved using CSS Grid, a layout module that provides a flexible way to create grid layouts.

#### Code

**HTML Code: grid.html**:
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Grid Layout Design</title>
    <link rel="stylesheet" href="style-grid.css" />
  </head>
  <body>
    <header class="header">
      <h1>Grid Layout Design</h1>
    </header>

    <nav class="nav">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </nav>

    <main class="main">
      <div class="card">
        <h2>Card 1</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 2</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 3</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 4</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 5</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 6</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 7</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 8</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 9</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 10</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 11</h2>
        <p>This is a sample card.</p>
      </div>

      <div class="card">
        <h2>Card 12</h2>
        <p>This is a sample card.</p>
      </div>
    </main>

    <footer class="footer">
      <p>&copy; 2023 DR MSO Grid Layout Design</p>
    </footer>
  </body>
</html>
```

**CSS Code: style-grid.css**:
```css
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

.header {
  background-color: #0072c6;
  color: #fff;
  padding: 20px;
  text-align: center;
  grid-column: 1 / -1;
}

.nav {
  background-color: #eee;
  padding: 10px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 10px;
  justify-items: center;
  align-items: center;
}

.nav a {
  color: #000;
  text-decoration: none;
  padding: 5px;
}

.nav a:hover {
  background-color: #0072c6;
  color: #fff;
}

.main {
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px;
}

.card {
  border: 1px solid #ccc;
  padding: 20px;
}

.footer {
  background-color: #0072c6;
  color: #fff;
  padding: 10px;
  text-align: center;
  grid-column: 1 / -1;
}

```

### 6. Flexbox Layout
A flexbox layout design uses the CSS flexbox module to create a flexible and responsive layout. This layout can be achieved using the CSS "display: flex" property to create a flex container and "flex" properties to arrange the items inside the container.

#### Code

**HTML Code: flexbox.html**:
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Flexbox Layout</title>
    <link rel="stylesheet" href="style-flexbox.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Flexbox Layout</h1>
      </header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <main>
        <article>
          <h2>Article Title</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eget
            tellus sed nibh tristique dictum. Integer in elementum turpis. Proin
            ultrices, dolor sed feugiat suscipit, purus velit convallis enim, in
            eleifend arcu mi vitae augue. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia curae; Aenean nec
            ligula quis ipsum gravida fermentum. Donec ultrices tincidunt nunc,
            eu lobortis nulla imperdiet eget. Vestibulum ante ipsum primis in
            faucibus orci luctus et ultrices posuere cubilia curae; Sed et
            mauris turpis, sit amet convallis sem. Proin feugiat hendrerit velit
            ac suscipit.
          </p>
        </article>
        <aside>
          <h3>Aside Title</h3>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </aside>
      </main>
      <footer>
        <p>&copy; 2023 DR MSO Flexbox Layout</p>
      </footer>
    </div>
  </body>
</html>

```
**CSS Code: style-flexbox.css**:
```css
.container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

header {
  background-color: #0072c6;
  color: #fff;
  padding: 20px;
  text-align: center;
}

nav {
  background-color: #eee;
  padding: 10px;
  display: flex;
  justify-content: center;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  margin: 0 10px;
}

nav a {
  text-decoration: none;
  color: #000;
  padding: 5px;
}

nav a:hover {
  background-color: #0072c6;
  color: #fff;
}

main {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
}

article {
  flex: 1;
  margin-right: 20px;
}

aside {
  flex: 0 0 25%;
  background-color: #eee;
  padding: 20px;
}

aside ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

aside li {
  margin: 10px 0;
}

footer {
  background-color: #0072c6;
  color: #fff;
  padding: 10px;
  text-align: center;
}

```
Overall, there are multiple ways to achieve each type of layout design using CSS. The choice of layout design and the approach used to achieve it will depend on the needs of the website and the design goals.

##  Most commonly used CSS properties and values for layout design

1. Display Property: This property specifies the display behavior of an element on a web page. The most commonly used display values are "block," "inline," "inline-block," "flex," and "grid."

2. Position Property: This property specifies the positioning of an element on a web page. The most commonly used position values are "static," "relative," "absolute," and "fixed."

3. Box Model Properties: These properties define the box model for an element on a web page, including its content, padding, border, and margin. The most commonly used box model properties are "width," "height," "padding," "border," and "margin."

4. Flexbox Properties: Flexbox is a CSS layout module that provides a flexible and responsive way to create complex layouts. The most commonly used flexbox properties are "flex-direction," "justify-content," "align-items," and "flex."

5. Grid Properties: CSS Grid is a layout module that allows you to create two-dimensional grid layouts. The most commonly used grid properties are "grid-template-columns," "grid-template-rows," "grid-column-gap," and "grid-row-gap."

6. Media Queries: Media queries are used to apply different CSS styles based on the screen size of the user's device. They allow you to create responsive designs that adapt to different devices.

These are just a few examples of the CSS properties and values that are commonly used in layout design. The specific code needed for layout design will depend on the type of layout you want to create and the design goals of your website.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
