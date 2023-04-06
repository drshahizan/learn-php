<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Lab 12: Layout (Mock & Style)

Layout design in CSS refers to the process of positioning and arranging HTML elements on a web page. CSS provides various layout techniques and properties that can be used to create different types of layouts, such as grid, flexbox, and float-based layouts. Here are some common CSS properties that can be used to create layout designs:

## Box Model Properties

- width: specifies the width of an element.
- height: specifies the height of an element.
- padding: specifies the space between the content of an element and its border.
- border: specifies the border around an element.
- margin: specifies the space between the border of an element and the adjacent elements.

## Positioning Properties

- position: specifies the type of positioning for an element, such as static, relative, absolute, or fixed.
- top, right, bottom, left: specify the offset of an element from its normal position, depending on the value of the position property.
- z-index: specifies the stacking order of elements.

## Layout Techniques

- CSS Grid: a two-dimensional layout system that allows for precise placement and sizing of elements within a grid container.
- Flexbox: a one-dimensional layout system that allows for flexible and responsive layouts.
- Floats: a layout technique that allows elements to float to the left or right of the container, enabling text to flow around them.
- Here's an example of how these properties can be used to create a basic layout using CSS Grid:

1. HTML
```html
<div class="grid-container">
  <header class="header">Header</header>
  <nav class="nav">Navigation</nav>
  <main class="main">Main Content</main>
  <aside class="sidebar">Sidebar</aside>
  <footer class="footer">Footer</footer>
</div>
```

2. CSS
```
.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: auto 1fr auto;
  grid-gap: 20px;
  height: 100vh;
}

.header {
  grid-column: 1 / 4;
  background-color: #333333;
  color: #ffffff;
  padding: 20px;
}

.nav {
  background-color: #f1f1f1;
  padding: 20px;
}

.main {
  grid-column: 1 / 3;
  background-color: #ffffff;
  padding: 20px;
}

.sidebar {
  grid-column: 3 / 4;
  background-color: #f1f1f1;
  padding: 20px;
}

.footer {
  grid-column: 1 / 4;
  background-color: #333333;
  color: #ffffff;
  padding: 20px;
}
```

In the above example, we have used CSS Grid to create a basic layout with a header, navigation, main content, sidebar, and footer. We have defined a grid container with display: grid, and specified the number of columns and rows using grid-template-columns and grid-template-rows. We have also added grid-gap to specify the gap between grid items. We have used grid positioning properties such as grid-column to position the header, main content, and sidebar elements in the desired grid areas. Finally, we have applied styles to each element, such as background color, padding, and font color.

## Task

You must complete two lab exercises relating to layout design. Lab 1 consists of three design layouts that must be completed. Lab 2 includes four different design layouts. Further explanation is provided in the following subtopic.

Lab 1: Mock 1 - Mock 3

You must create three mock design layouts titled Mock 1, Mock 2, and Mock 3.
You have the option of using the grid or flexbox concept.
Each layout design must be created entirely with HTML files. In the HTML file, please use CSS styles.
The layout design interface is shown in Figure 1.1 to Figure 1.3.
The resulting files must be saved as mock1.html, mock2.html, and mock3.html. After that, please zip and send the file as lab12_1.zip.
abc
Figure 1.1: Mock 1. Save the file as mock1.html.


abc
Figure 1.2: Mock 2. Save the file as mock2.html.


abc
Figure 1.3: Mock 3. Save the file as mock3.html.

Lab 2: Style 1 - Style 4

To generate interface design layouts for Style 1 through 4, you will need to create a style*.css file. Please follow the instructions below:
Unzip the following file into some folder: lab12_2.zip.
Inside the zip you will find an index.html file and a base.css file. These have the structure of the website and some base design. You should not change these files.
Try to make each of the designs listed below. You only need to use a style*.css file.
You must create a style1.css file through style4.css. Please send only this file. Make sure to zip the file and send it as lab12_2ans.zip.
abc
Figure 2.1: Style 1. Save the css file as style1.css.


abc
Figure 2.2: Style 2. Save the css file as style2.css.


abc
Figure 2.3: Style 3. Save the css file as style3.css.


abc
Figure 2.4: Style 4. Save the css file as style4.css.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
