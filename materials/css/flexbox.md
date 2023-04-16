<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Flexbox
CSS Flexbox is a layout system that allows you to create flexible and responsive layouts on the web. With Flexbox, you can easily arrange elements in a row or a column, and you can control their size, order, and alignment with just a few lines of CSS. Here are some key features and benefits of CSS Flexbox:

Flexbox is a one-dimensional layout system, which means that it allows you to control either the horizontal or the vertical dimension of your layout. You can use the flex-direction property to specify whether your flex items should be arranged in a row or a column, and you can use the flex-wrap property to control whether your items should wrap onto a new line when there's not enough space.

With Flexbox, you can control the size of your flex items using the flex-basis, flex-grow, and flex-shrink properties. The flex-basis property specifies the initial size of the item, the flex-grow property specifies how much the item should grow to fill available space, and the flex-shrink property specifies how much the item should shrink to fit into available space.

Flexbox allows you to control the alignment of your flex items along both the main axis (the axis that your items are arranged on) and the cross axis (the axis perpendicular to the main axis). You can use the justify-content property to control the alignment of your items along the main axis, and the align-items property to control the alignment of your items along the cross axis. You can also use the align-self property to control the alignment of individual items within the flex container.

CSS Flexbox is supported in all major browsers, including Chrome, Firefox, Safari, and Edge. However, it's worth noting that some older browsers do not support Flexbox, so you may need to provide fallbacks or alternative layouts for those users.

CSS Flexbox is a relatively simple and easy-to-learn technology, making it a great choice for creating simple and responsive layouts on the web. However, it may not be suitable for more complex or multi-dimensional layouts, where CSS Grid may be a better choice.

Overall, CSS Flexbox is a powerful and flexible tool for creating layouts on the web, and it's an important part of modern web development.

## Code : CSS Flexbox

**HTML Code: flexbox.html**

```html
<!DOCTYPE html>
<html>
  <head>
    <title>CSS Flexbox Example</title>
    <link rel="stylesheet" href="css/style-flexbox.css" />
  </head>
  <body>
    <div class="flex-container">
      <div class="flex-item">1</div>
      <div class="flex-item">2</div>
      <div class="flex-item">3</div>
      <div class="flex-item">4</div>
      <div class="flex-item">5</div>
      <div class="flex-item">6</div>
    </div>
  </body>
</html>

```

**CSS Code: style-flexbox.css**

```css

.flex-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}

.flex-item {
  background-color: #ccc;
  padding: 20px;
  font-size: 30px;
  text-align: center;
  margin: 10px;
  flex-basis: calc(33.33% - 20px);
}
```

This code will create a flex container with 6 flex items, arranged in a row that wraps onto multiple lines when there's not enough space. The flex items themselves will have a gray background, white text, and a 20px padding on all sides.

In this example, we're using the `display: flex` property to create a flex container, and the `flex-wrap: wrap` property to allow the items to wrap onto multiple lines when there's not enough space. We're also using the `justify-content: center` and `align-items: center` properties to center the items both horizontally and vertically within the container.

To control the size of the flex items, we're using the `flex-basis` property to specify the initial size of each item, and the `calc()` function to subtract the margin from the width of each item. This ensures that there's enough space between the items, while still allowing them to fill the available space in the container.

Overall, CSS Flexbox is a powerful and flexible tool for creating layouts on the web, and it can be used to create everything from simple rows or columns to complex, multi-dimensional layouts.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)

