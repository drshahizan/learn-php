<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Float
Floats are a CSS property that allow you to position elements to the left or right of their container, which allows content to wrap around them. Here are some key things to know about floats:

- Floats are removed from the normal flow of the document, which means that content that follows a floated element will flow around it. This can be useful for creating multi-column layouts, for example.

- You can float elements to the left or right using the `float` property in CSS. For example, `float: left` will float the element to the left, while `float: right` will float it to the right.

- When you float an element, it becomes a block-level element by default, even if it was originally an inline or inline-block element.

- You can use the `clear` property to ensure that content does not flow around a floated element. For example, `clear: left` will ensure that content appears below any left-floated elements.

- It's important to be aware that floated elements can cause layout issues if not used carefully. For example, if you float too many elements or float them without clearing them properly, you may end up with content overlapping or wrapping in unexpected ways.

It's also worth noting that floats were originally designed for use with images and text, and may not be the best choice for complex layout needs. Alternative layout techniques like CSS Grid and Flexbox are often better suited to modern layout requirements.

Finally, it's important to note that while floats are still used in some cases, they are becoming less common in modern web development as newer layout techniques become more widely supported. However, understanding how floats work is still an important part of CSS knowledge.

## Code: The use of floats to create a multi-column layout

**HTML: floats.html**

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Floats Example</title>
    <style>
      .container {
        width: 80%;
        margin: 0 auto;
      }

      .col {
        float: left;
        width: 50%;
        padding: 20px;
        box-sizing: border-box;
      }

      .col img {
        max-width: 100%;
        height: auto;
      }

      .clearfix::after {
        content: "";
        display: table;
        clear: both;
      }
    </style>
  </head>
  <body>
    <div class="container clearfix">
      <div class="col">
        <h2>Column One</h2>
        <img
          src="https://via.placeholder.com/300x200.png?text=Column+One"
          alt="Column One Image"
        />
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae
          purus faucibus, consectetur sapien nec, aliquam urna. Nulla nec
          pretium leo. Nullam vel diam in tellus dictum fringilla ac sit amet
          elit.
        </p>
      </div>
      <div class="col">
        <h2>Column Two</h2>
        <img
          src="https://via.placeholder.com/300x200.png?text=Column+Two"
          alt="Column Two Image"
        />
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae
          purus faucibus, consectetur sapien nec, aliquam urna. Nulla nec
          pretium leo. Nullam vel diam in tellus dictum fringilla ac sit amet
          elit.
        </p>
      </div>
    </div>
  </body>
</html>

```

In this example, we have a `div` element with a class of "container" that wraps two `div` elements with a class of "col". The "col" class applies the `float: left` property to create two columns that are side-by-side. The `width: 50%` property ensures that each column takes up half of the available width.

Each column contains an `img` element with a maximum width of 100% and a height that adjusts proportionally. This ensures that the images scale appropriately to fit the available space.

To prevent any layout issues caused by the floated elements, we use a clearfix technique on the "container" class. The `::after` pseudo-element is used to add a clear-fix to the container div, which ensures that any content below the floated elements appears below them and does not wrap around them.

Overall, the use of floats in this example allows us to create a multi-column layout that displays content side by side, making better use of the available space on the page. However, it's worth noting that floats have some limitations and alternative layout techniques like CSS Grid and Flexbox may be more suitable for complex layouts.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)


