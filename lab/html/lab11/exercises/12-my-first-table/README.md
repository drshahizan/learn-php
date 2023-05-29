---
tutorial: "https://www.youtube.com/watch?v=ZHsw63Xdbw4"
---

# `12` My First Table

We are going to create a data table with only HTML code, which will carry the following information:

![demo](../../.learn/assets/12-my-first-table-0.png?raw=true)

Without using `CSS`, with plain `HTML` you can add some basic styling to elements.

We are going to practice doing the following tasks to play with the table format. Are you ready? 😉

## 📝 Instructions:

1. Add a `width` attribute of 100% to the `<table>` and a `border` of `1` (Use only basic HTML attributes in tags).

```html
<table width="X" border="X"></table>
```

2. Inside the `<table>` tag, add the `<thead>` tag.

```html
<table width="X" border="X">
		<thead></thead>
</table>
```

3. Now that we have the `<thead>` tag, we are going to create another `<tr>` tag inside, to which we are going to assign a `height` of `40px` and a red `background-color` .

```html
<table width="X" border="X">
		<thead>
            <tr height="X" style="background-color:X"></tr>
        </thead>
</table>
```

4. Inside that `<tr>`, we are going to make 3 `<th>` to form the cells of our table with the information that we are going to request.

```html
<table width="X" border="X">
		<thead>
            <tr height="X" style="background-color:X">
                <th>Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
            </tr>
        </thead>
</table>
```

5. Add the `<tbody>` on the bottom of the `<table>` tag, right after the `<thead>` tag.

```html
<table width="X" border="X">
		<thead>
            <tr height="X" style="background-color:X">
                <th>Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
            </tr>
        </thead>
		<tbody></tbody>
</table>
```

6. Finally, create 3 `<tr>` in the `<tbody>` to complete the 3 missing columns and rows of our table. (Remember to fill them with the information from the first box)

```html
<table width="X" border="X">
		<thead>
            <tr height="X" style="background-color:X">
                <th>Name</th>
				<th>Last Name</th>
				<th>Phone Number</th>
            </tr>
        </thead>
		<tbody>
			<tr>
				<td>Name</td>
				<td>Last Name</td>
				<td>Phone Number</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>Last Name</td>
				<td>Phone Number</td>
			</tr>
			<tr>
				<td>Name</td>
				<td>Last Name</td>
				<td>Phone Number</td>
			</tr>
		</tbody>
</table>
```

## Expected Result:

![demo](../../.learn/assets/12-my-first-table.png?raw=true)

## 💡 Hints:

+ After each step click `build`, to make sure everything is going well.

+ You can copy the code blocks so you don't have to type them 3 more times, just remember to change the information in the cells.

+ Don't use CSS! use basic HTML attributes in tags.
