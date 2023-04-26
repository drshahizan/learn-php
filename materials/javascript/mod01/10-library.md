<a href="https://github.com/drshahizan/learn-php/stargazers"><img src="https://img.shields.io/github/stars/drshahizan/learn-php" alt="Stars Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/network/members"><img src="https://img.shields.io/github/forks/drshahizan/learn-php" alt="Forks Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/pulls"><img src="https://img.shields.io/github/issues-pr/drshahizan/learn-php" alt="Pull Requests Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/issues"><img src="https://img.shields.io/github/issues/drshahizan/learn-php" alt="Issues Badge"/></a>
<a href="https://github.com/drshahizan/learn-php/graphs/contributors"><img alt="GitHub contributors" src="https://img.shields.io/github/contributors/drshahizan/learn-php?color=2b9348"></a>
![](https://visitor-badge.glitch.me/badge?page_id=drshahizan/learn-php)

Don't forget to hit the :star: if you like this repo.

# Libraries and Frameworks

In JavaScript, a library is a collection of pre-written code that developers can use to perform common tasks without having to write the code from scratch. A framework, on the other hand, is a more comprehensive tool that provides a set of rules and guidelines to help developers build applications quickly and efficiently.

Some popular JavaScript libraries include jQuery, React, Vue.js, and AngularJS. These libraries offer a range of functionality, from simplifying DOM manipulation to providing a complete user interface framework.

Frameworks like Node.js, Express.js, and Meteor.js are popular in the backend development world. They provide a comprehensive set of tools for building web applications, from managing HTTP requests to database access and templating.

One of the advantages of using libraries and frameworks is that they can save time and effort for developers. Instead of reinventing the wheel for each project, developers can use pre-existing tools to accomplish common tasks more quickly and easily. Additionally, many libraries and frameworks have large communities of developers contributing to their development, which can lead to more robust and reliable code.

However, it's important to note that using libraries and frameworks can also come with some downsides. For example, relying too heavily on external code can make it difficult to maintain and debug applications, especially if updates to the library or framework break existing functionality. Additionally, some libraries and frameworks may not be well-suited to every project, and developers may need to spend time evaluating their options to find the best fit for a particular use case.

## JavaScript libraries

| No. | Library | Description |
| --- | ------- | ----------- |
| 1 | [jQuery](#1-jquery) | A fast, small, and feature-rich JavaScript library for DOM manipulation and event handling |
| 2 | [React](#2-react) | A JavaScript library for building user interfaces |
| 3 | [Vue.js](#3-vuejs)  | A progressive framework for building user interfaces |
| 4 | [Three.js](#4-threejs)  | A JavaScript library for creating 3D graphics on the web |
| 5 | [D3.js](#5-d3js)  | A JavaScript library for visualizing data using HTML, SVG, and CSS |
| 6 | [Chart.js](#6-chartjs)  | A simple yet flexible JavaScript charting library for creating interactive charts and graphs |
| 7 | AngularJS | A JavaScript framework for building dynamic web applications |
| 8 | Moment.js | A JavaScript library for working with dates and times |
| 9 | Axios | A promise-based HTTP client for making API requests in JavaScript |
| 10 | Lodash | A JavaScript utility library providing functions for common programming tasks |

### 1. jQuery
jQuery is a fast, small, and feature-rich JavaScript library that simplifies DOM manipulation and event handling. It provides an easy-to-use API for traversing and manipulating HTML documents, handling events, and creating animations.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>jQuery Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include the jQuery library from a CDN -->
    <script>
      $(document).ready(function () {
        // Code to run when the document is ready
        $("button").click(function () {
          // Code to run when a button is clicked
          $("p").toggle(); // Toggle the visibility of all paragraphs
        });
      });
    </script>
    <!-- Include a script tag with your jQuery code -->
  </head>
  <body>
    <h1>jQuery Example</h1>
    <button>Toggle Paragraphs</button>
    <!-- A button to trigger the jQuery code -->
    <p>Paragraph 1</p>
    <p>Paragraph 2</p>
    <!-- Two paragraphs to manipulate with jQuery -->
  </body>
</html>

```

In this example, we first include the jQuery library from a CDN by adding a script tag with the source URL. We then write our jQuery code inside a script tag with the "document.ready" function. This function ensures that the jQuery code runs only after the document has finished loading.

Inside the "document.ready" function, we attach a click event handler to the button element. When the button is clicked, the "toggle" method is called on all paragraphs on the page, which toggles their visibility.

Overall, jQuery simplifies DOM manipulation and event handling, making it a popular choice for front-end web development.

### 2. React
React is a popular JavaScript library for building user interfaces. It provides a declarative and efficient way to create reusable UI components, making it easier to build and maintain large web applications.

Here's an example of how to use React in an HTML document:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>React Example</title>
    <!-- Include the React and React DOM libraries from a CDN -->
    <script src="https://unpkg.com/react/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone/babel.min.js"></script>
  </head>
  <body>
    <div id="root"></div>

    <!-- Define a React component using JSX -->
    <script type="text/babel">
      function App() {
        return (
          <div>
            <h1>Hello, React!</h1>
            <p>This is a paragraph.</p>
          </div>
        );
      }

      // Render the React component to the DOM
      ReactDOM.render(<App />, document.getElementById("root"));
    </script>
  </body>
</html>

```

In this example, we include the React, React DOM, and Babel libraries from a CDN. Babel is a JavaScript compiler that allows us to write JSX code in our HTML document. We then define a React component called "App", which returns some HTML elements using JSX syntax.

Finally, we use the ReactDOM.render method to render the "App" component to the DOM, passing in the root element as the target.

### 3. Vue.js
Vue.js is a progressive JavaScript framework used for building user interfaces. It's designed to be easy to learn and use, while also being highly performant and scalable. Here's a simple example of how to use Vue.js in an HTML file:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Vue.js Example</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </head>
  <body>
    <div id="app">
      <p>{{ message }}</p>
    </div>

    <script>
      var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello, Vue!'
        }
      })
    </script>
  </body>
</html>
```

In this example, we include the Vue.js library from a CDN and create a simple Vue instance with an element (`#app`) and some data (`message`). The `{{ message }}` syntax is used to bind the `message` data to the `p` element, which will display the text "Hello, Vue!".

Vue.js provides a lot of features for building dynamic user interfaces, including computed properties, methods, directives, and event handling. The above example is just a starting point, and there are many other things you can do with Vue.js. It's worth checking out the official documentation and examples to learn more.

### 4. Three.js
Three.js is a popular JavaScript library used for creating 3D graphics in the web browser. It provides a simple and powerful API for creating and manipulating 3D objects, scenes, and animations.

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Three.js Example</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  </head>
  <body>
    <div id="canvas-container"></div>
    <script>
      // Create a Three.js scene
      const scene = new THREE.Scene();

      // Create a camera and add it to the scene
      const camera = new THREE.PerspectiveCamera(
        75,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
      );
      camera.position.z = 5;
      scene.add(camera);

      // Create a renderer and add it to the document
      const renderer = new THREE.WebGLRenderer();
      renderer.setSize(window.innerWidth, window.innerHeight);
      document.getElementById("canvas-container").appendChild(renderer.domElement);

      // Create a cube and add it to the scene
      const geometry = new THREE.BoxGeometry();
      const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
      const cube = new THREE.Mesh(geometry, material);
      scene.add(cube);

      // Render the scene
      renderer.render(scene, camera);
    </script>
  </body>
</html>
```

In this example, we first include the Three.js library from a CDN by adding a script tag with its source URL. We then create a Three.js scene, camera, and renderer. We set the camera's position and add it to the scene.

Next, we create a cube geometry and material and add it to the scene as a Mesh object. Finally, we render the scene using the renderer.

Overall, Three.js is a powerful library for creating 3D graphics and animations in the browser. With it, you can easily create and manipulate 3D objects and scenes, apply materials and textures, and add lighting and animation effects.

### 5. D3.js
D3.js is a popular JavaScript library for data visualization. It allows developers to create interactive and dynamic data-driven visualizations in web applications. Here is an example of how to use D3.js in an HTML document:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>D3.js Example</title>
    <script src="https://d3js.org/d3.v6.min.js"></script>
  </head>
  <body>
    <svg id="myChart"></svg>
    <script>
      // Define the chart data
      const data = [10, 20, 30, 40, 50];

      // Define the SVG dimensions and margins
      const margin = { top: 20, right: 20, bottom: 30, left: 50 };
      const width = 600 - margin.left - margin.right;
      const height = 400 - margin.top - margin.bottom;

      // Create the SVG element
      const svg = d3
        .select("#myChart")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

      // Define the x and y scales
      const x = d3.scaleBand().range([0, width]).padding(0.1);
      const y = d3.scaleLinear().range([height, 0]);

      // Set the domain of the scales
      x.domain(data.map((d) => d.toString()));
      y.domain([0, d3.max(data)]);

      // Create the x and y axes
      const xAxis = d3.axisBottom(x);
      const yAxis = d3.axisLeft(y);

      // Add the x and y axes to the chart
      svg
        .append("g")
        .attr("transform", "translate(0," + height + ")")
        .call(xAxis);

      svg.append("g").call(yAxis);

      // Add the chart bars
      svg
        .selectAll(".bar")
        .data(data)
        .enter()
        .append("rect")
        .attr("class", "bar")
        .attr("x", (d) => x(d.toString()))
        .attr("y", (d) => y(d))
        .attr("width", x.bandwidth())
        .attr("height", (d) => height - y(d));
    </script>
  </body>
</html>
```

In this example, we include the D3.js library from its official website by adding a script tag with its source URL. We then create an SVG element with an ID of "myChart" that will be used to render the chart.

Next, we define the chart data as an array of numbers. We also define the SVG dimensions, margins, and scales as JavaScript variables.

We then create the SVG element by selecting it with D3.js and setting its dimensions and margins. We also append a "g" element to translate the chart by the margins.

Next, we define the x and y scales using the `d3.scaleBand()` and `d3.scaleLinear()` methods, respectively. We set the domain of the scales using the data array and some other methods.

We then create the x and y axes using the `d3.axisBottom()` and `d3.axisLeft()` methods, respectively. We add the axes to the chart using the `svg.append("g")` and `call()` methods.

Finally, we add the chart bars using the `svg.selectAll().data().enter().append()` method chain. We set the x and y positions of the bars using the x and y scales, and we set their width and height based on the dimensions of the SVG element.

This example creates a simple bar chart using D3.js. However, D3.js is a powerful library that can be used to create many other types of data visualizations, including line charts, scatter plots, and more complex interactive visualizations.

It's worth noting that this example uses the latest version of D3.js (version 6) which is different from earlier versions, so be sure to check the documentation and examples for the specific version you are using.

### 6. Chart.js
Chart.js is a popular JavaScript library for creating interactive and customizable charts and graphs in web applications. Here's an example of how to use Chart.js in an HTML document:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Chart.js Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
    <canvas id="myChart"></canvas>
    <script>
      // Get the canvas element and context
      const canvas = document.getElementById("myChart");
      const ctx = canvas.getContext("2d");

      // Create the chart data
      const data = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
          {
            label: "Sales",
            data: [150, 200, 250, 300, 350, 400, 450],
            backgroundColor: "rgba(54, 162, 235, 0.2)",
            borderColor: "rgba(54, 162, 235, 1)",
            borderWidth: 1,
          },
          {
            label: "Expenses",
            data: [100, 150, 200, 250, 300, 350, 400],
            backgroundColor: "rgba(255, 99, 132, 0.2)",
            borderColor: "rgba(255, 99, 132, 1)",
            borderWidth: 1,
          },
        ],
      };

      // Create the chart options
      const options = {
        responsive: true,
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
              },
            },
          ],
        },
      };

      // Create the chart
      const chart = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options,
      });
    </script>
  </body>
</html>
```

In this example, we first include the Chart.js library from a CDN by adding a script tag with its source URL. We then create a canvas element with an ID of "myChart" that will be used to render the chart.

Next, we create the chart data and options as JavaScript objects. The data object contains labels and datasets arrays that specify the chart labels and values, along with some styling options. The options object sets some chart options, such as making the chart responsive and setting the y-axis to start at zero.

Finally, we create a new Chart instance with the canvas context, chart type, data, and options. This will render the chart on the canvas element.

Chart.js supports many different chart types, including line charts, bar charts, pie charts, and more. It also allows for further customization and interactivity, such as adding tooltips, animations, and event listeners.

## JavaScript Framework

| No. | Framework | Description |
| --- | --------- | ----------- |
| 1 | [Angular](#1-angular-framework) | A platform for building mobile and desktop web applications |
| 2 | [React](#2-react-framework)  | A JavaScript library for building user interfaces |
| 3 | [Vue.js](#3-vuejs-framework)  | A progressive framework for building user interfaces |
| 4 | Ember.js | A JavaScript framework for building scalable web applications |
| 5 | Backbone.js | A lightweight JavaScript library for building scalable and maintainable web applications |
| 6 | Meteor | A full-stack JavaScript framework for building real-time web applications |
| 7 | Aurelia | A next-generation JavaScript framework for building web applications |
| 8 | Polymer | A JavaScript library for building web components |
| 9 | Svelte | A new way to build web applications by writing less code |
| 10 | Next.js | A React-based framework for building server-side rendered web applications |

### 1. Angular Framework
Angular is a popular JavaScript framework used for building dynamic web applications. Here's a simple example of how to use Angular in an HTML file:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Angular Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
  </head>
  <body ng-app="myApp">
    <div ng-controller="myCtrl">
      <p>{{ message }}</p>
    </div>

    <script>
      var app = angular.module('myApp', []);
      app.controller('myCtrl', function($scope) {
        $scope.message = 'Hello, Angular!';
      });
    </script>
  </body>
</html>
```

In this example, we include the AngularJS library from a CDN and create a simple Angular module called `myApp` with a controller called `myCtrl`. We then use the `ng-app` directive to bootstrap the Angular application on the `body` element, and the `ng-controller` directive to bind the `myCtrl` controller to the `div` element.

The `{{ message }}` syntax is used to bind the `message` variable in the `$scope` object of the `myCtrl` controller to the `p` element, which will display the text "Hello, Angular!".

Angular provides a lot of features for building complex web applications, including two-way data binding, dependency injection, directives, services, and more. The above example is just a starting point, and there are many other things you can do with Angular. It's worth checking out the official documentation and examples to learn more.

### 2. React Framework
React is a popular JavaScript library used for building user interfaces. It provides a component-based approach to building web applications, making it easy to create reusable UI elements. Here's a simple example of how to use React in an HTML file:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>React Example</title>
    <script src="https://unpkg.com/react/umd/react.development.js"></script>
    <script src="https://unpkg.com/react-dom/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone/babel.min.js"></script>
  </head>
  <body>
    <div id="root"></div>

    <script type="text/babel">
      class Greeting extends React.Component {
        render() {
          return (
            <div>
              <h1>Hello, React!</h1>
            </div>
          );
        }
      }

      ReactDOM.render(<Greeting />, document.getElementById('root'));
    </script>
  </body>
</html>
```

In this example, we include the React and ReactDOM libraries from a CDN, as well as the Babel library for transpiling JSX syntax. We then define a simple `Greeting` component that renders a heading with the text "Hello, React!".

Finally, we use the `ReactDOM.render` method to render the `Greeting` component inside the `div` element with the ID `root`.

React provides many other features for building complex user interfaces, including state management, lifecycle methods, and event handling. The above example is just a starting point, and there are many other things you can do with React. It's worth checking out the official documentation and examples to learn more.

### 3. Vue.js Framework
Vue.js is a progressive JavaScript framework used for building user interfaces. It provides a reactive and composable view layer with a simple and flexible API. Here's a simple example of how to use Vue.js in an HTML file:

```html
<!DOCTYPE html>
<html>
  <head>
    <title>Vue.js Example</title>
    <script src="https://unpkg.com/vue"></script>
  </head>
  <body>
    <div id="app">
      <p>{{ message }}</p>
    </div>

    <script>
      var app = new Vue({
        el: '#app',
        data: {
          message: 'Hello, Vue!'
        }
      });
    </script>
  </body>
</html>
```

In this example, we include the Vue.js library from a CDN and create a simple Vue instance with a `data` object that contains a `message` property. We then use the double curly braces `{{ message }}` to display the value of the `message` property inside the `p` element.

The `el` property is used to specify the element that the Vue instance will be mounted to, in this case the `div` element with the ID `app`.

Vue.js provides many other features for building complex user interfaces, including computed properties, methods, directives, and more. The above example is just a starting point, and there are many other things you can do with Vue.js. It's worth checking out the official documentation and examples to learn more.

## Key points about Libraries and Frameworks in JavaScript:

|       | Libraries     | Frameworks    |
|-------|---------------|---------------|
| Usage | Provides      | Provides      |
|       | pre-written   | a pre-defined |
|       | functionality | structure     |
|       | for specific  | for building   |
|       | tasks         | applications  |
|       |               |               |
| Example 1  | jQuery        | React         |
| Example 2  | Chart.js     | Angular       |
| Example 3 | D3.js        | Vue.js        |
|       |               |               |
| Language  | JavaScript   | JavaScript    |
| License   | Varies       | Varies        |
| Size      | Small        | Large         |
| Dependencies | Fewer    | More          |
| Learning Curve | Easy   | Steep         |
| Flexibility | Limited    | High          |
| Performance | Lightweight | Heavy         |
| Community | Large        | Large         |

## Contribution 🛠️
Please create an [Issue](https://github.com/drshahizan/learn-php/issues) for any improvements, suggestions or errors in the content.

You can also contact me using [Linkedin](https://www.linkedin.com/in/drshahizan/) for any other queries or feedback.

![](https://visitor-badge.glitch.me/badge?page_id=drshahizan)
