// Accessing and modifying content
const titleElement = document.getElementById("title");
titleElement.innerHTML = "Updated Title";

const contentElement = document.getElementById("content");
contentElement.textContent = "This paragraph has been updated dynamically.";

// Modifying attributes
const btnElement = document.getElementById("btn");
btnElement.setAttribute("disabled", true);

// Adding event listener
btnElement.addEventListener("click", function() {
    titleElement.style.color = "red";
    contentElement.classList.add("highlight");
});
