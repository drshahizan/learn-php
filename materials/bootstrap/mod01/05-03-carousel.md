<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Bootstrap JavaScript plugins: Carousel

In Bootstrap JavaScript, a carousel is a component that allows you to display a set of images, videos, or any other content in a rotating fashion. It is a popular feature for showcasing multiple items in a limited space and is commonly used on websites and applications.

The carousel component in Bootstrap is built using JavaScript, jQuery, and CSS. It is a fully responsive and customizable component that can be used to create a variety of designs. The carousel component provides a set of options that allow you to control the behavior and appearance of the carousel.

To use a carousel in Bootstrap, you need to add the required HTML markup and initialize the carousel using JavaScript. Here's an example of the basic HTML markup for a carousel:

```html
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image1.jpg" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="image2.jpg" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="image3.jpg" alt="Image 3">
    </div>
  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
```

In this example, the `id` attribute of the carousel container is set to "myCarousel". The `data-bs-ride` attribute is set to "carousel" to enable automatic cycling of the carousel.

The carousel indicators are defined using the `ol` element with a class of "carousel-indicators". The `li` elements within the `ol` represent the individual indicators, and the `data-bs-target` and `data-bs-slide-to` attributes are used to link each indicator to a specific slide.

The carousel slides are defined within the `div` element with a class of "carousel-inner". Each slide is defined using the `div` element with a class of "carousel-item" and contains the content to be displayed in the slide.

Finally, the carousel controls are defined using the `a` element with classes of "carousel-control-prev" and "carousel-control-next". The `data-bs-slide` attribute is used to specify the direction of the slide transition.

Once the HTML markup is set up, you can initialize the carousel using JavaScript:

```html
var myCarousel = new bootstrap.Carousel(document.getElementById('myCarousel'), {
  interval: 2000,
  pause: false
})
```

In this example, the `bootstrap.Carousel` constructor is used to initialize the carousel. The first argument is the element that contains the carousel markup, and the second argument is an options object that allows you to customize the behavior of the carousel. 

## Code
HTML code for the Bootstrap Carousel, with sample images included:

```html
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Carousel Example</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ul>
    
      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://via.placeholder.com/800x400?text=Slide+1" alt="Slide 1">
          <div class="carousel-caption">
            <h3>Slide 1</h3>
            <p>Description of slide 1.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/800x400?text=Slide+2" alt="Slide 2">
          <div class="carousel-caption">
            <h3>Slide 2</h3>
            <p>Description of slide 2.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://via.placeholder.com/800x400?text=Slide+3" alt="Slide 3">
          <div class="carousel-caption">
            <h3>Slide 3</h3>
            <p>Description of slide 3.</p>
          </div>
        </div>
      </div>
    
      <!-- Controls -->
      <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </div>
</body>
</html>
```

> In this example, we use a placeholder image URL to display sample images in the carousel. If you replace the image URLs with the URLs of your own images, you will be able to view those images in the carousel.


## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
