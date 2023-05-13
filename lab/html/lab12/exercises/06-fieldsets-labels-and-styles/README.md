# `06` Fieldsets, labels and styles

Styling a form is boring and tedious, but if you use certain tags you life can bbe easier. 

`<label>`  

One of the tipical things you need to do is add a "label" to your input, label's tell the end-user what the input stands for.

`<fieldset>`  

Are ideal to add several inputs into the same logical group (for example grouping radios -male and female- into a gender fieldset).

`<legend>`  

Is the name of the fieldset group that is going to be shown to the end-user.

## 📝 Instructions

1. Give a style to this font by aplying to the body:

```css
font-family: "Lato", sans-serif;
```

2. Remove `borders` and `margins` from all the fieldsets. 

3. Apply a `padding` of `10px` to the top and bottom and a `padding` of `0px` to the left and right to all the fieldsets. 

4. Apply a `font-weight` of `800` to all the fieldsets.

5. Decrease the `font-weight` off all the lable's to `400`.

6. Apply these rules to all the text inputs:

```css
input[type=text] {
	border: none;
	border-bottom: 1px solid black;
	font-size: 16px;
}
```

7. Apply this style to the submit button

```css
input[type=submit] {
  cursor: pointer;
  border: none;
  padding: 10px;
  background-color: #f65252;
  color: white;
  width: 100%;
}
```

## The result should look like this:

![06-fieldsets-labels-and-styles](../../.learn/assets/NGmLdal.png?raw=true)
