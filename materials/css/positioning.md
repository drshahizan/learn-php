<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Positioning
CSS positioning is a layout technique that allows you to precisely control the position and placement of HTML elements on a web page. There are four different types of positioning in CSS: static, relative, absolute, and fixed. Here's an overview of each type:

1. **Static Positioning**: This is the default positioning for all HTML elements. Elements with static positioning are positioned according to the normal flow of the document, and cannot be moved using the `top`, `bottom`, `left`, or `right` properties.

2. **Relative Positioning**: With relative positioning, an element is positioned relative to its normal position in the document flow. You can use the `top`, `bottom`, `left`, or `right` properties to move the element relative to its normal position. Other elements on the page will still flow around the element, but the element will take up space in its new position.

3. **Absolute Positioning**: With absolute positioning, an element is positioned relative to its nearest positioned ancestor. If there is no positioned ancestor, the element is positioned relative to the initial containing block (usually the body element). You can use the `top`, `bottom`, `left`, or `right` properties to specify the exact position of the element, and other elements on the page will flow around the element. However, an absolutely positioned element does not take up space in the document flow, so it can overlap other elements.

4. **Fixed Positioning**: With fixed positioning, an element is positioned relative to the viewport (the browser window). The element will stay in the same position even if the page is scrolled, and will not move if the page is resized. You can use the top, bottom, left, or right properties to specify the exact position of the element, and other elements on the page will flow around the element.

CSS positioning is a powerful tool for creating precise and complex layouts on the web. However, it's important to use positioning sparingly, and to be mindful of how it affects the accessibility and usability of your website.

## Code : CSS positioning

**HTML Code: positioning.html**

```html
<!DOCTYPE html>
<html>
  <head>
    <title>CSS Positioning Example</title>
    <link rel="stylesheet" href="css/style-positioning.css" />
  </head>
  <body>
    <div class="container">
      <div class="box1">Box 1</div>
      <div class="box2">Box 2</div>
      <div class="box3">Box 3</div>
      <div class="box4">Box 4</div>
    </div>
  </body>
</html>

```
**CSS Code: style-positioning.css**

CSS Code:

```css
.container {
  position: relative;
  width: 600px;
  height: 400px;
  border: 1px solid black;
}

.box1 {
  position: absolute;
  top: 20px;
  left: 20px;
  width: 100px;
  height: 100px;
  background-color: red;
}

.box2 {
  position: absolute;
  bottom: 20px;
  right: 20px;
  width: 150px;
  height: 150px;
  background-color: blue;
}

.box3 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 200px;
  height: 100px;
  background-color: green;
}

.box4 {
  position: fixed;
  top: 20px;
  right: 20px;
  width: 100px;
  height: 100px;
  background-color: yellow;
}

```

In this example, we have a container element with a border, and four different boxes inside it. Each box has a different position and size, using one of the four different types of positioning in CSS.

- Box 1 is positioned using absolute positioning, with a position of 20px from the top and left edges of the container.

- Box 2 is positioned using absolute positioning, with a position of 20px from the bottom and right edges of the container.

- Box 3 is positioned using absolute positioning, with a position of 50% from the top and left edges of the container. We also use the `transform` property to center the box both horizontally and vertically, regardless of its size.

- Box 4 is positioned using fixed positioning, with a position of 20px from the top and right edges of the viewport.

Overall, this example demonstrates how CSS positioning can be used to create precise and complex layouts on the web, by allowing you to control the position and placement of HTML elements with a high degree of precision.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)


