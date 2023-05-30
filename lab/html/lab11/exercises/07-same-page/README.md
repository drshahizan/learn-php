---
tutorial: "https://www.youtube.com/watch?v=HkJtj2618YU"
---

# `07` Same Page

Anchor `<a>` tags are also capable of sending the user to different sections inside our webpage.

To do that, we have to identify the sections by assigning an `id` (an attribute of all HTML elements).

Then we have to add a `#` followed by the `id` of the section in the `href` attribute, like this: `href="#id-name"`.

And all together will look something like this:

```html
<a href="#element_id">This anchor will take you to the div</a>

<div id="element_id">Hello I'm the div</div>
```

In this exercise, there are two `<h2>` (The `upperSide` and the `lowerSide`). And there is an anchor `<a>` that takes you to the lowerSide `<h2>`.

We need you to create another anchor `<a>` at the bottom of the file that takes you to the `<h2>` with the `"upperSide"` id.

## 📝 Instructions:

1. Look at the first anchor structure and how it works.

2. Create another anchor at the bottom of the file that should take the user to the `<h2>` with the `"#upperSide"` id

## 💡 Hint:

+ The only way to use anchors like this is with the `id` of the elements, there is no other way.

+ You have to add an `id` to the `<h2>` tags, in order to redirect the user to them with the anchor (In this case, it's already done).
