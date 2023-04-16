<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.
# Learning CSS for a beginner
Learning CSS as a beginner can be a fun and rewarding experience. As a beginner, it's important to start with the basics of CSS, including its syntax, selectors, properties, and values. This will help you understand how CSS works and how it's used to style web pages.

It's also important to practice CSS with real-world examples, such as creating a layout or styling a specific element on a web page. This will help you gain practical experience and see how CSS is used in real-world scenarios.

As you learn CSS, it's important to stay organized and use good coding habits, such as commenting your code and using proper indentation. This will make it easier to read and understand your code, and make it easier to make changes and update your CSS in the future.

It's also important to stay up-to-date with new features and updates to CSS. This can be done by reading blogs and articles, attending conferences and workshops, and participating in online communities.

Overall, learning CSS takes practice, patience, and dedication. By starting with the basics, practicing with real-world examples, staying organized, and staying up-to-date with new features, beginners can become proficient in CSS and create beautiful and responsive web pages.

## 1. Introduction to CSS and its syntax
The syntax of CSS consists of a series of rules, each of which includes a selector and one or more declarations. The selector identifies the HTML element(s) to which the styles should be applied, while the declarations specify the style properties and values to be applied to those elements.

For example, the following CSS rule sets the font color of all h1 elements to red:

```css
h1 {
  color: red;
}
```

In this example, `h1` is the selector, and `color: red;` is the declaration. The color property specifies the font color, and red is the value.

CSS properties can be assigned different values, such as `font-size`, `background-color`, `margin`, and `padding`, among others. CSS values can be expressed in a variety of units, such as pixels, ems, or percentages.

CSS can be included in an HTML document either by embedding it directly in the HTML code or by linking to an external CSS file. External CSS files are often preferred, as they allow for better organization and easier maintenance of the styles.

Overall, CSS is a powerful tool for creating visually appealing and responsive web pages, and its syntax is relatively easy to understand once you get the hang of it.

## 2. CSS selectors and specificity
CSS selectors are patterns used to select HTML elements on a web page that you want to apply styles to. CSS selectors can target elements based on their type, class, ID, attributes, and even their relationship to other elements.

Some common CSS selectors include:

- Type selectors: Select elements based on their HTML tag name. For example, h1 selects all `<h1>` elements.
- Class selectors: Select elements based on their class attribute. For example, `.my-class` selects all elements with `class="my-class"`.
- ID selectors: Select elements based on their ID attribute. For example, `#my-id` selects the element with `id="my-id"`.
- Attribute selectors: Select elements based on their attribute values. For example, `[href="https://example.com"]` selects all elements with `href="https://example.com"`.

CSS specificity is a way of determining which styles apply to an element when multiple selectors target the same element with conflicting styles. The more specific a selector, the higher its specificity, and the more weight it carries in determining which styles apply.

CSS specificity is calculated based on a point system, where each selector has a specific weight:

- Type selectors have a specificity of 0-0-1.
- Class selectors have a specificity of 0-1-0.
- ID selectors have a specificity of 1-0-0.
- Inline styles have a specificity of 1-0-0-0.

To calculate the specificity of a selector, count the number of type, class, and ID selectors it contains and add them up, with IDs counting for the highest weight. For example, the selector `h1.my-class#my-id` has a specificity of 1-1-1, because it has one type selector, one class selector, and one ID selector.

When multiple selectors have the same specificity, the selector that appears last in the CSS code takes precedence. If there are conflicting styles within the same selector, the last style declared takes precedence.

Understanding CSS selectors and specificity is important for creating well-organized and maintainable CSS code that applies styles consistently across a web page.

Sure, here's an example of using CSS selectors and specificity:

### Code:

**css_selector.html**:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>CSS Selectors and Specificity</title>
    <link rel="stylesheet" type="text/css" href="style-selector.css" />
  </head>
  <body>
    <h1 class="heading">Hello World</h1>
    <p class="text">This is a paragraph of text.</p>
    <p class="text" id="special-text">This is a special paragraph of text.</p>
  </body>
</html>
```

**style-selector.css**:

```css
/* Type selector styles */
h1 {
  color: red;
}

p {
  font-size: 16px;
}

/* Class selector styles */
.text {
  color: blue;
}

.heading {
  font-weight: bold;
}

/* ID selector styles */
#special-text {
  font-style: italic;
}

/* Specificity demonstration styles */
.text#special-text {
  color: green;
  font-size: 24px;
}
```

In this example, we have an HTML document with three elements: an `h1` heading and two `p` paragraphs. The `h1` has a class of "heading", while the paragraphs both have a class of "text". The second paragraph also has an ID of "special-text".

The CSS file includes a set of styles for each type of selector, demonstrating how each type of selector can target elements on the page. In addition, we have a set of styles that demonstrate CSS specificity: the `.text#special-text` selector targets the second paragraph specifically, with a larger font size and a different color than the other paragraphs.

When you view this page in a browser, you should see the `h1` heading in red, the paragraphs in blue, and the second paragraph with an italic font style and green color, as well as a larger font size. This demonstrates how CSS selectors and specificity can be used to apply different styles to different elements on a web page.

## 3. CSS box model and layout
The CSS box model is a fundamental concept in CSS that describes how elements are laid out on a web page. Every HTML element on a page is treated as a rectangular box, with content, padding, borders, and margins.

The CSS box model consists of four parts:

1. **Content**: This is the actual content of the element, such as text or images. The size of the content is determined by the width and height properties.

2. **Padding**: Padding is the space between the content and the element's border. It can be set using the padding property.

3. **Border**: The border surrounds the element's padding and content. It can be styled and colored using the border property.

4. **Margin**: The margin is the space between the element's border and the surrounding elements. It can be set using the margin property.

Understanding the box model is important for creating layouts on a web page. By adjusting the padding, border, and margin of an element, you can control its spacing and layout relative to other elements on the page.

Layout refers to the way that elements are arranged on a web page. There are several techniques for creating layouts in CSS, including:

1. **[Floats](float.md)**: Floats allow elements to be placed side by side, with text flowing around them. Floats are commonly used for creating multi-column layouts.

2. **[Flexbox](flexbox.md)**: Flexbox is a layout mode that allows you to align and distribute elements within a container. It's ideal for creating responsive layouts that adapt to different screen sizes.

3. **[Grid](grid.md)**: CSS grid is a powerful layout system that allows you to create complex, multi-dimensional layouts. It's particularly useful for creating page layouts with multiple columns and rows.

4. **[Positioning](positioning.md)**: Absolute and relative positioning can be used to place elements precisely on a page, regardless of their normal flow.

By combining these layout techniques with the CSS box model, you can create sophisticated and responsive layouts that work well on all devices.

### Code:

**box-model.html**:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>CSS Box Model Example</title>
    <link rel="stylesheet" type="text/css" href="style-box.css" />
  </head>
  <body>
    <div class="box">
      <p class="content">This is the content of the box.</p>
    </div>
  </body>
</html>
```
**style-box.css**:

```css
.box {
  width: 400px;
  height: 200px;
  padding: 20px;
  border: 2px solid black;
  margin: 50px;
}

.content {
  font-size: 24px;
}
```

In this example, we have a single div element with a class of "box". The div has a width of 400 pixels, a height of 200 pixels, and a padding of 20 pixels. It also has a border of 2 pixels with a solid black color, and a margin of 50 pixels.

Inside the div, we have a single paragraph element with a class of "content". The paragraph has a font size of 24 pixels.

When you view this page in a browser, you should see a box with a black border, 20 pixels of padding, and 50 pixels of margin on all sides. The box should contain a paragraph of text with a font size of 24 pixels.

This demonstrates the basic concepts of the CSS box model. By adjusting the width, height, padding, border, and margin of an element, you can control its size, spacing, and appearance on a web page.

## 4. Styling text with CSS
Styling text with CSS allows you to change the appearance of text on your web page. Here are some common CSS properties used for styling text:

1. `font-family`: specifies the font family of the text.

2. `font-size`: specifies the size of the text.

3. `font-weight`: specifies the boldness of the text.

4. `font-style`: specifies the style of the text (e.g. italic, oblique).

5. `text-align`: specifies the alignment of the text (e.g. left, center, right).

6. `text-decoration`: specifies the decoration of the text (e.g. underline, line-through).

7. `text-transform`: specifies the capitalization of the text (e.g. uppercase, lowercase, capitalize).

8. `color`: specifies the color of the text.

To style text with CSS, you can use the following syntax:

```css
selector {
  property: value;
}
```
For example, to set the font family and font size for all paragraph elements on your web page, you can use:

```css
p {
  font-family: Arial, sans-serif;
  font-size: 16px;
}
```

By using CSS to style your text, you can create a visually appealing and readable design for your web page.

### Code:

**styling-text.html**:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Styling Text with CSS</title>
    <link rel="stylesheet" type="text/css" href="style-text.css" />
  </head>
  <body>
    <h1>Styling Text with CSS</h1>
    <p class="large">This paragraph has larger font size.</p>
    <p class="italic">This paragraph is italicized.</p>
    <p class="underline">This paragraph has underlined text.</p>
    <p class="uppercase">This paragraph is in uppercase.</p>
    <p class="blue">This paragraph has blue text color.</p>
  </body>
</html>
```
**style-text.css**:

```css
h1 {
  font-family: Arial, sans-serif;
  font-size: 36px;
  color: #333;
}

p {
  font-family: Georgia, serif;
  font-size: 18px;
  line-height: 1.5;
  margin-bottom: 20px;
}

.large {
  font-size: 24px;
}

.italic {
  font-style: italic;
}

.underline {
  text-decoration: underline;
}

.uppercase {
  text-transform: uppercase;
}

.blue {
  color: blue;
}

```
In this example, we've used CSS to style the heading and paragraph elements on our web page. We've set different font families, font sizes, line heights, and text colors for the elements. We've also used CSS classes to apply specific styles to certain paragraphs, such as larger font size, italicized text, underlined text, uppercase text, and blue text color.

## 5. CSS positioning and layout techniques
CSS positioning and layout techniques are used to control the positioning and layout of elements on a web page. Here are some common CSS properties and techniques used for positioning and layout:

1. `position`: specifies the position type of the element (e.g. static, relative, absolute, fixed).

2. `top`, `bottom`, `left`, `right`: specifies the offset position of the element from its parent container or from the browser window, depending on the position type.

3. `display`: specifies the display type of the element (e.g. block, inline, inline-block, flex).

4. `float`: specifies whether the element should be floated to the left or right of its parent container.

5. `clear`: specifies whether the element should clear any floated elements above it.

6. `margin`: specifies the margin space around the element.

7. `padding`: specifies the padding space within the element.

8. `box-sizing`: specifies how the element's width and height should be calculated (e.g. content-box, border-box).

9. `grid`: a layout system that allows you to create complex layouts with rows and columns.

10. `flexbox`: a layout system that allows you to align and distribute elements within a container along a single axis.

To position and layout elements with CSS, you can use the following syntax:

```css
selector {
  property: value;
}
```
For example, to position an element with absolute position, you can use:

```css
.element {
  position: absolute;
  top: 20px;
  left: 50%;
  transform: translateX(-50%);
}
```

This will position the element 20 pixels from the top of its parent container and horizontally centered within the container.

By using CSS positioning and layout techniques, you can create a wide range of designs and layouts for your web page.

### Code:

**position.html**:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>CSS Positioning and Layout Techniques</title>
    <link rel="stylesheet" type="text/css" href="style-position.css" />
  </head>
  <body>
    <header>
      <h1>CSS Positioning and Layout Techniques</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <div class="left-column">
        <h2>Left Column</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac
          velit sed ante faucibus sodales. Pellentesque blandit fringilla eros,
          nec commodo dolor facilisis vel.
        </p>
      </div>
      <div class="right-column">
        <h2>Right Column</h2>
        <p>
          Integer vitae eros fermentum, vehicula quam nec, malesuada enim.
          Quisque euismod, ipsum eu aliquet finibus, quam dolor lobortis sapien,
          et lobortis enim magna sit amet odio.
        </p>
      </div>
    </section>
    <footer>
      <p>&copy; 2023 DR MSO CSS Positioning and Layout Techniques</p>
    </footer>
  </body>
</html>

```

**style-position.css**:

```css
/* Reset the default browser styles */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Set a standard font and background color */
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

/* Style the header */
header {
  background-color: #333;
  color: white;
  padding: 20px;
}

header h1 {
  font-size: 36px;
  margin-bottom: 10px;
}

nav ul {
  list-style: none;
  display: flex;
}

nav ul li {
  margin-right: 20px;
}

nav ul li a {
  color: white;
  text-decoration: none;
}

/* Style the section */
section {
  display: flex;
  flex-wrap: wrap;
  padding: 20px;
}

.left-column {
  flex: 1;
  background-color: #eee;
  padding: 20px;
  margin-right: 20px;
}

.right-column {
  flex: 1;
  background-color: #eee;
  padding: 20px;
}

/* Style the footer */
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
  margin-top: 20px;
}
```

This code creates a simple layout with a header, navigation bar, two columns of content, and a footer. The `header` and `footer` elements are positioned using block-level layout, while the columns of content in the `section` element are positioned using flexbox layout.

The `left-column` and `right-column` elements are given a flex value of 1, causing them to share the available space equally. They are also given a margin-right value of 20px to create some space between them.

Overall, this code demonstrates some of the basic techniques used in CSS positioning and layout, including block-level layout, flexbox layout, and margin and padding.

## 6. Understanding responsive web design with CSS
Responsive web design (RWD) is an approach to designing websites that aims to provide an optimal viewing and user experience across a wide range of devices, from desktop computers to mobile phones. CSS plays a key role in RWD by providing the ability to adjust the layout and styling of a website based on the screen size of the device being used.

Here are some key concepts to understand when designing a responsive website with CSS:

1. **Media queries**: A media query is a CSS technique that allows you to apply different styles based on the device's screen size. Media queries use the `@media` rule in CSS to define the conditions under which certain styles will be applied.

2. **Fluid layouts**: A fluid layout is a layout that adjusts its width based on the size of the screen. This allows elements on the page to resize and reposition themselves as needed to fit the available space.

3. **Flexible images and media**: Images and other media on a website should be flexible and adjust their size based on the screen size. This can be achieved using CSS properties such as `max-width`.

4. **Mobile-first design**: A mobile-first design approach involves designing the website for mobile devices first, and then scaling up for larger screens. This can result in a more streamlined and efficient design.

5. **Responsive typography**: Typography is an important aspect of web design, and it should be designed to be responsive as well. This can be achieved using CSS properties such as `em` and `rem` to specify font sizes relative to the device's screen size.

To create a responsive website with CSS, you can use media queries to adjust the layout and styling based on the screen size. For example, you can use the following CSS code to adjust the font size based on the screen size:

```css
@media (max-width: 768px) {
  body {
    font-size: 14px;
  }
}

@media (min-width: 769px) {
  body {
    font-size: 16px;
  }
}
```

This code adjusts the font size to 14 pixels for screen sizes up to 768 pixels wide, and then adjusts it to 16 pixels for larger screen sizes. By using CSS to design a responsive website, you can create a user-friendly experience for visitors on any device.

### Code:

**responsive.html**:
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Responsive Web Design Example</title>
    <link rel="stylesheet" href="css/style-responsive.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <header>
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
        <h1>Welcome to My Website!</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit
          amet quam in diam fringilla commodo. Fusce commodo sagittis metus, ut
          fermentum orci bibendum ac. Nulla facilisi. Sed ullamcorper, quam ut
          pellentesque aliquam, enim leo pretium nisi, vitae varius nibh dolor
          et ipsum.
        </p>
      </section>
      <section>
        <h2>About Me</h2>
        <p>
          Nulla a metus sagittis, suscipit lorem in, suscipit augue. Nullam
          lacinia faucibus turpis non blandit. Morbi congue dapibus tristique.
          Praesent in diam eu libero accumsan vestibulum sed quis orci. Sed
          facilisis libero vel risus ullamcorper, eget elementum nisl iaculis.
          Sed vehicula est quis sapien ullamcorper aliquam.
        </p>
      </section>
      <section>
        <h2>Contact Me</h2>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" /><br />
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" /><br />
          <label for="message">Message:</label>
          <textarea id="message" name="message"></textarea><br />
          <input type="submit" value="Send" />
        </form>
      </section>
    </main>

    <footer>
      <p>&copy; 2023 My Website. All rights reserved.</p>
    </footer>
  </body>
</html>

```
**style-responsive.css**:
```css
/* Base Styles */
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
}

/* Header Styles */
header {
  background-color: #333;
  color: #fff;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

nav li {
  margin: 0 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

/* Main Styles */
main {
  max-width: 1000px;
  margin: 0 auto;
  padding: 40px;
}

section {
  margin: 40px 0;
}

h1,
h2 {
  font-weight: normal;
}

/* Form Styles */
form {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

label {
  width: 100%;
  max-width: 200px;
  margin-right: 20px;
}

input,
textarea {
  width: 100%;
  max-width: 400px;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  background-color: #f5f5f5;
}

input[type="submit"] {
  background-color: #333;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #666;
}

/* Responsive Styles */
@media only screen and (max-width: 600px) {
  nav li {
    margin: 10px 0;
  }

  form label {
    max-width: 100%;
    margin-right: 0;
    margin-bottom: 10px;
  }

  input,
  textarea {
    max-width: 100%;
  }
}

```

## 7. CSS frameworks like Bootstrap or Foundation
CSS frameworks like Bootstrap or Foundation are pre-written CSS code libraries that provide a collection of CSS and JavaScript files with pre-defined styles, components, and layouts. These frameworks are designed to simplify the process of building responsive and modern web applications by providing pre-designed templates, reusable UI components, and layout grids.

Some benefits of using CSS frameworks include:

1. **Faster development**: CSS frameworks can speed up the development process by providing pre-designed components and layouts. This can save developers time and effort when creating complex UI designs.

2. **Consistency**: CSS frameworks provide a consistent look and feel across different parts of the website or web application, making it easier to maintain and update the code.

3. **Responsiveness**: Most CSS frameworks are built with a responsive design in mind, which means that they are optimized for various screen sizes and devices.

4. **Cross-browser compatibility**: CSS frameworks are designed to work across different web browsers and platforms, ensuring that the web application will look and function consistently across different environments.

5. **Community support**: CSS frameworks have large communities of developers who contribute to the code and provide support through forums, documentation, and tutorials.

Bootstrap is one of the most popular CSS frameworks available today. It includes a variety of pre-designed UI components such as buttons, forms, tables, and navigation menus. Bootstrap also provides a responsive layout grid system that allows developers to easily create responsive designs. Foundation is another popular CSS framework that provides similar features and functionality to Bootstrap.

To use a CSS framework like Bootstrap, you can download the CSS and JavaScript files and link them to your HTML document. Then, you can use the pre-designed styles and components provided by the framework to build your website or web application. For example, you can use the following code to add a Bootstrap navigation menu to your website:

```html
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
```

This code adds a responsive navigation menu to your website that collapses into a hamburger menu on smaller screens. By using a CSS framework like Bootstrap or Foundation, you can easily add pre-designed components and layouts to your website, saving time and effort in the development process.

## 8. Animations and transitions with CSS
Animations and transitions with CSS allow developers to add dynamic effects and movement to their web pages. CSS animations involve changing the style of an element over a period of time, while transitions involve smoothly transitioning an element from one state to another.

CSS animations can be created using the `@keyframes` rule, which defines the animation's sequence of keyframes. Each keyframe specifies the style of the element at a specific point in time during the animation. The animation property is then used to apply the animation to an element, specifying the animation name, duration, timing function, delay, and other options.

Here is an example of a simple CSS animation that rotates a square element:

```css
.square {
  width: 100px;
  height: 100px;
  background-color: red;
  animation-name: rotate;
  animation-duration: 2s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
```

This code defines an animation called "rotate" that rotates the square element 360 degrees over a period of 2 seconds. The animation-iteration-count property is set to "infinite" to make the animation repeat indefinitely.

CSS transitions, on the other hand, involve smoothly transitioning an element from one state to another. Transitions can be applied to any CSS property, such as `color`, `background-color`, `opacity`, or `transform`. The transition property is used to apply a transition to an element, specifying the property to transition, duration, timing function, and other options.

Here is an example of a simple CSS transition that changes the background color of a button element when it is hovered over:

```css
button {
  background-color: blue;
  color: white;
  transition: background-color 0.5s ease;
}

button:hover {
  background-color: red;
}
```

This code applies a transition to the `background-color` property of the button element, making the color change smoothly over a period of 0.5 seconds when the button is hovered over.

Animations and transitions with CSS can be used to add visual interest and interactivity to web pages, enhancing the user experience and making web content more engaging.

### Code:

**animation.html**:
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Animations and Transitions with CSS</title>
    <style>
      .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f2f2f2;
      }
      .box {
        width: 200px;
        height: 200px;
        margin: 20px;
        background-color: #0077b6;
        border-radius: 5px;
        animation: box 2s ease-in-out infinite alternate;
        transition: transform 0.5s ease-out;
        cursor: pointer;
      }
      .box:hover {
        transform: scale(1.2);
      }
      @keyframes box {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(200px);
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
    </div>
  </body>
</html>
```

## 9. Debugging CSS with browser developer tools
Debugging CSS with browser developer tools refers to the process of using the built-in developer tools in your web browser to identify and fix issues with your CSS code. Here's how you can use browser developer tools to debug your CSS:

1. Open your web page in your web browser, and right-click on the element you want to inspect.

2. Select "Inspect" or "Inspect Element" from the context menu.

3. This will open the developer tools panel in your browser, with the selected element highlighted in the HTML code.

4. Navigate to the "Styles" or "Elements" tab in the developer tools panel, where you can view and edit the CSS styles applied to the selected element.

5. Use the "Computed" or "Computed Styles" panel to view the final computed styles for the element, taking into account any inheritance or specificity rules.

6. Edit the CSS styles in the developer tools panel to test out different styles or to fix any issues you've identified.

7. Once you've identified the issue and fixed it in the developer tools panel, apply the same fix to your CSS code in your code editor or CSS file.

Using browser developer tools to debug your CSS can save you time and effort, as you can see the changes you're making in real time and quickly identify and fix any issues.

## 10. Best practices and tips for efficient CSS coding

1. **Use a CSS preprocessor**: CSS preprocessors like Sass or Less can make your CSS code more efficient by allowing you to use variables, nesting, and mixins. This can make your code more modular and reusable, and can also help you avoid repetitive or error-prone code.

2. **Use descriptive class names**: Class names should describe the content or function of the element, rather than its appearance. This can make your code more readable and easier to maintain.

3. **Avoid using too many selectors**: Using too many selectors or descendant selectors can slow down your page load times and make your CSS code harder to maintain. Try to keep your selectors as simple and specific as possible.

4. **Use shorthand properties**: Shorthand properties can make your CSS code more efficient by allowing you to specify multiple properties in a single line of code. For example, you can use the padding property to specify all four padding values at once.

5. **Use CSS resets or normalize**: Different browsers have different default styles, which can cause inconsistencies in how your page looks. Using a CSS reset or normalize can help you establish a consistent baseline for your styles across all browsers.

6. **Comment your code**: Adding comments to your CSS code can make it easier for you and other developers to understand what the code is doing, which can be especially helpful for larger or more complex projects.

7. **Test your code in different browsers**: Testing your CSS code in different browsers can help you identify and fix compatibility issues before they become a problem for your users.

8. **Minimize your CSS file size**: Minimizing your CSS file size can help improve page load times and reduce bandwidth usage. You can do this by removing unnecessary whitespace, comments, and other unnecessary code.

By following these best practices and tips, you can write more efficient, maintainable, and scalable CSS code.

These topics cover the basics of CSS and provide a solid foundation for building responsive and visually appealing web pages. As a beginner, it's important to start with the fundamentals before moving on to more advanced topics.
## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
