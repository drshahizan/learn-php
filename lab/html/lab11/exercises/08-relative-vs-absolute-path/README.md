# `08` Relative vs Absolute Path

This is the typical code you need to use an image tag:

```html
<img src="where/to/get/the/image" />
```

When you add an `<img />` (image) tag into a website, you have to set the `src` property to the URL where you want to take that image from. That URL path can be: **absolute or relative**.

## Relative Paths:

Relative paths are only used to indicate directory order. They do not contain the first part of the URL (the domain name) and can only redirect the user to different parts of the same website.

```html
<img src="../../.learn/assets/rigo-baby.jpg" />
<a href="index.html">Take me to index.html from the current directory</a>
<a href="/graphics/image.png">Take me to image.png that is inside the /graphics/ directory</a>
<a href="/help/articles/how-do-i-set-up-a-webpage.html">Take me to how-do-i-set-up-a-webpage.html</a>
```

> Note: If you use **relative paths**, you have to assume that the initial part of the path is hidden and equals to the current path in the URL bar.

## Absolute Paths:

Absolute paths include the domain name. They contain the full URL because they are typically used to take the user to a different website.

```html
<img src="https://github.com/learnpack/html-tutorial-exercises-course/raw/master/HTML-badge.png" />
<a href="http://www.mysite.com">Click Me</a>
<a href="http://www.mysite.com/graphics/image.png">Click Me</a>
<a href="http://www.mysite.com/help/articles/how-do-i-set-up-a-webpage.html">Click Me</a>
```

## 📝 Instructions:

1. Start by **building** (click the `build` button) the current website, when it opens you will see an image displaying.

2. Please modify the `src` property of the image and convert it to an absolute URL.

> Note: Make sure the image is still displaying correctly after you make your changes.

## 💡 Hints:

+ Your absolute path should start with this: {{publicUrl}}

+ If you build the exercise, open the website, and right click on the image, the context menu will show an option with the text 'Copy Image Address' that will copy its absolute URL into your clipboard.

+ Here is a video explaining the difference between relative and absolute paths [https://www.youtube.com/watch?v=ephId3mYu9o](https://www.youtube.com/watch?v=ephId3mYu9o)
