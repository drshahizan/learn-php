# `03` Bootstrap Grid

Now let's talk about the grid - as you know, every row has **12 boxes** with **~8%** of the website's width, a column can take from **1 to 12 slots of width**, and all within the same row cannot add up to more than **12 slots**.


With Bootstrap 5, you simply have to add the `.col` class and it will automatically distribute the columns evenly throughout the 12 slots within the row.

If you want a column to take up a specific number of slots, you must specify it in the `class` property of the `div` that holds the column.

For example:

```html
<div class="col-2">.col-2</div>
<div class="col-4">.col-4</div>
<div class="col-6">.col-6</div>

```


In Bootstrap 5, the `justify-content` property is added to the classes to move the columns into the desired position.

###  More information on the grid:

https://getbootstrap.com/docs/5.0/layout/grid/


## 📝 Instructions:


1. Make the second row to have 3 columns of the same `width` (split the row in 3).

2. Add a third row with only one column of 12 slots.

3. Change the `background-color` of the `col-12` to `red`, and add your name inside of the `<div>`.

4. Change the main div `container` to `container-fluid`


### Expected result:

![Example Image](../../.learn/assets/1509892918783_38dc765ee66d5d7e4258e43e5f5dde8d.png?raw=true)

## 💡 Hint:

+ Set the class properties of each column and specify how many slots you want each column to take.

+ Check Bootstrap documentation to change the background color to red.