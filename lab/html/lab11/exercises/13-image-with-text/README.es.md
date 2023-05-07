# `13` Image with Text

Antes de que existiera `CSS`, el uso de tablas era la única forma posible de hacer algunos diseños de sitios web. Es un proceso muy similar a la creación de diseños en MS Office.

Ahora, vamos a recrear un ejemplo similar a este:

![demo](../../.learn/assets/13-images-with-text-2.png?raw=true)

## 📝 Instrucciones:

1. Crea un `<table>` con el atributo `border = "0"`.

```html
<table border="X"></table>
```

2. Agrega la fila `<tr>` con 2 columnas `<td>` dentro.

```html
<table border="X">
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>
```

3. La primera columna (`<td>`) debe tener el atributo `width="25%"`, este elemento debe contener una imagen con el atributo `width="100%"`.

    Utiliza esta imagen: `"../../.learn/assets/13-images-with-text.jpg"`

```html
<td width="X"><img width="X" src="url"/></td>
```

4. La segunda columna (`<td>`), contiene el párrafo junto con el atributo `valign="top"` (este sirve para mover el texto a la parte superior de la celda).

```html
<td valign="X">aquí va el párrafo</td>
```

## 💡 Pista:

+ Puedes elegir tu texto falso en esta página: [http://www.lipsum.com/](http://www.lipsum.com/)
