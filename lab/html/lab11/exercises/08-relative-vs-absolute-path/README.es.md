# `08` Relative vs Absolute Path

Este es el código típico que necesitas para usar la etiqueta de imagen: 

```html
<img src="where/to/get/the/image" />
```

Cuando agregas un tag de `<img />` (imagen) en un sitio web, tienes que establecer la propiedad `src` en la URL de donde deseas tomar esa imagen. Esa ruta del URL puede ser: **absoluta o relativa**.

## Rutas Relativas:

Las rutas relativas se utilizan únicamente para indicar el orden de directorios. No contienen la primera parte de la URL (el nombre de dominio) y solo pueden redirigir al usuario a diferentes partes del mismo sitio web.

```html
<img src="../../.learn/assets/rigo-baby.jpg" />
<a href="index.html">Llévame a index.html desde el directorio actual</a>
<a href="/graphics/image.png">Llévame a image.png que está dentro del directorio /graphics/</a>
<a href="/help/articles/how-do-i-set-up-a-webpage.html">Llévame a how-do-i-set-up-a-webpage.html</a>
```

> Nota: Si usas **rutas relativas**, tienes que asumir que la parte inicial de la ruta está oculta y es igual a la ruta actual en la barra de URL.

## Rutas Absolutas:

Las rutas absolutas incluyen también el nombre del dominio. Contienen la URL completa porque normalmente se utilizan para llevar al usuario a un sitio web diferente.

```html
<img src="https://github.com/learnpack/html-tutorial-exercises-course/raw/master/HTML-badge.png" />
<a href="http://www.mysite.com">Click Me</a>
<a href="http://www.mysite.com/graphics/image.png">Click Me</a>
<a href="http://www.mysite.com/help/articles/how-do-i-set-up-a-webpage.html">Click Me</a>
```

## 📝 Instrucciones:

1. Comienza por **construir** (haz clic en el botón de `build`) el sitio web actual, cuando abra verás una imagen.

2. Modifica la propiedad `src` de la imagen y conviértela en una URL absoluta.

> Nota: Asegúrate de que la imagen aún se muestre correctamente después de realizar los cambios.

## 💡 Pistas:

+ Tu ruta absoluta debe comenzar con esto: {{publicUrl}}

+ Si construyes (`build`) el ejercicio, abre el sitio web y haz un clic derecho en la imagen, el menú contextual mostrará una opción 'Copiar dirección de imagen' que copiará la URL absoluta en tu portapapeles.

+ Aquí hay un video que explica la diferencia entre rutas relativas y absolutas [https://www.youtube.com/watch?v=ephId3mYu9o](https://www.youtube.com/watch?v=ephId3mYu9o)
