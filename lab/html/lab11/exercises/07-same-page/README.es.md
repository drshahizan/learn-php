# `07` Same Page

Las etiquetas anchor `<a>`, también son capaces de redirigir al usuario a diferentes secciones de nuestra página web.

Para hacerlo, debemos identificar la otra sección asignándole un `id` (atributo de todos los elementos de HTML).

Luego, debemos agregar un `#` seguido del `id` de la sección, en el atributo `href`, de esta manera: `href="#id-name"`.

Todo junto debe verse algo así:

```html
<a href="#element_id">Este anchor te llevara para el div</a>

<div id="element_id">Hola yo soy el div</div>
```

En este ejercicio, hay dos `<h2>` (El `upperSide` y el `lowerSide`). Por otro lado, hay un `<a>` que te lleva al `<h2>` de abajo.

Necesitamos que crees otro `<a>` al final del archivo, que te lleve al `<h2>` que se encuentra al inicio.

## 📝 Instrucciones:

1. Observa la estructura y cómo funciona el `<a>` que te lleva hacia abajo.

2. Crea otro anchor `<a>` al final del archivo que te lleve al `<h2>` del inicio.

## 💡 Pistas:

+ La única forma de usar anchors como esta, es con el `id` de los elementos, no hay otra forma.

+ Debes agregarle un `id` a ambas etiquetas `<h2>` para poder redirigir al usuario con los anchors `<a>` (En este caso ya está hecho).
