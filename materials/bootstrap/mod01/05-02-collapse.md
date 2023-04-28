<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Collapse

Bootstrap is a popular front-end framework that provides a collection of tools and resources for building responsive and user-friendly websites. One of its many JavaScript plugins is the Collapse plugin, which enables you to create collapsible content sections on your web pages.

The Collapse plugin works by toggling the visibility of content based on user interaction with a clickable control element, such as a button or link. When the control element is clicked, the content section expands or collapses, depending on its previous state.

To use the Collapse plugin, you first need to include the necessary JavaScript and CSS files in your HTML document. You can either download the files from the official Bootstrap website or use a CDN (Content Delivery Network) to reference them remotely.

Next, you need to create the HTML markup for the collapsible content section and the control element. Here's an example:

```html
<div class="accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
        Section 1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent=".accordion">
      <div class="accordion-body">
        Content for section 1 goes here.
      </div>
    </div>
  </div>
</div>
```

In this example, the `accordion` class is used to group multiple collapsible sections together. The `accordion-item` class is used to wrap each section, and the `accordion-header` class is used for the clickable control element. The `accordion-button` class is used to style the button, and the `data-bs-toggle` and `data-bs-target` attributes are used to specify the target content section.

The `collapse` class is used to indicate that the content section should be initially collapsed, and the `show` class is used to indicate that it should be initially visible. The `data-bs-parent` attribute is used to specify the parent element of the collapsible sections, which is the `accordion` element in this case.

Once you have created the HTML markup, you can activate the Collapse plugin by initializing it with JavaScript code. Here's an example:

```javascript
var accordion = new bootstrap.Accordion(document.querySelector('.accordion'), {
  toggle: false
});
```

In this example, the `Accordion` class is used to initialize the plugin on the `accordion` element. The `toggle` option is set to `false` to disable the automatic toggling of other collapsible sections when one is opened.

With the Collapse plugin, you can create interactive and space-saving content sections that enhance the user experience on your website.

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
