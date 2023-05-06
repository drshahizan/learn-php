<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Grid
CSS Grid is a powerful layout system that allows you to create two-dimensional layouts on the web. With CSS Grid, you can create complex, responsive layouts that adjust to different screen sizes and devices with ease. Here are some key features and benefits of CSS Grid:

- CSS Grid is a two-dimensional layout system, which means that you can specify both rows and columns. This makes it much more flexible than other layout systems like floats or flexbox.

- With CSS Grid, you can create grid containers that define the overall layout of your page, as well as grid items that are placed within those containers. You can use a variety of properties to define the size and position of grid items, including `grid-template-columns`, `grid-template-rows`, `grid-column-start`, `grid-column-end`, `grid-row-start`, and `grid-row-end`.

- CSS Grid allows you to create responsive layouts that adapt to different screen sizes and devices. You can use media queries to adjust your grid layout based on the size of the screen, and you can also use `auto-fit` and `auto-fill` to automatically adjust the number of columns in your grid based on available space.

- CSS Grid offers a high degree of control over your layout, which means that you can create complex designs with ease. For example, you can create overlapping grid items, create asymmetrical layouts, and even create layouts with irregular shapes.

- CSS Grid is supported in all major browsers, including Chrome, Firefox, Safari, and Edge. However, it's worth noting that some older browsers do not support CSS Grid, so you may need to provide fallbacks or alternative layouts for those users.

-CSS Grid is a relatively new technology, and it can take some time to learn and master. However, it's a powerful tool for creating flexible, responsive layouts on the web, and it's becoming an increasingly important part of modern web development.


## Code : CSS Grid

**HTML Code: grid.html**

```html
<!DOCTYPE html>
<html>
  <head>
    <title>CSS Grid Example</title>
    <link rel="stylesheet" href="css/style-grid.css" />
  </head>
  <body>
    <div class="grid-container">
      <div class="grid-item">1</div>
      <div class="grid-item">2</div>
      <div class="grid-item">3</div>
      <div class="grid-item">4</div>
      <div class="grid-item">5</div>
      <div class="grid-item">6</div>
      <div class="grid-item">7</div>
      <div class="grid-item">8</div>
      <div class="grid-item">9</div>
    </div>
  </body>
</html>

```

**CSS Code: style-grid.css**:

```css
.grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.grid-item {
  background-color: #ccc;
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
```
This code will create a grid container with 3 columns and 3 rows, with a 10px gap between each grid item. The grid items themselves will have a gray background, white text, and a 20px padding on all sides.

In this example, we're using the `grid-template-columns` property to specify the size of each column in the grid. The `repeat` function allows us to repeat a pattern multiple times, so `repeat(3, 1fr)` will create 3 columns, each with a width of 1 fraction of the available space. We're also using the `grid-gap` property to add a 10px gap between each grid item.

Overall, CSS Grid provides a powerful and flexible way to create layouts on the web, and it can be used to create everything from simple grids to complex, multi-dimensional layouts.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)


