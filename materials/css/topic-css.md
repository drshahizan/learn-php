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
## 4. Styling text with CSS
## 5. CSS positioning and layout techniques
## 6. Understanding responsive web design with CSS
## 7. CSS frameworks like Bootstrap or Foundation
## 8. Animations and transitions with CSS
## 9. Debugging CSS with browser developer tools
## 10. Best practices and tips for efficient CSS coding

These topics cover the basics of CSS and provide a solid foundation for building responsive and visually appealing web pages. As a beginner, it's important to start with the fundamentals before moving on to more advanced topics.
## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
