// script.js

document.addEventListener("DOMContentLoaded", function() {
  const sunIcon = document.querySelector(".fas.fa-sun");
  const root = document.documentElement;

  const lightModeColors = [
    "#f5f5f5", // --background-color
    "#f5f5f5", // --navbar-background-color
    "#333333", // --text-color
    "#333333", // --navbar-text-color
    "#565656"  // --button-background-color
  ];

  const darkModeColors = [
    "#333333", // --background-color
    "#333333", // --navbar-background-color
    "#f5f5f5", // --text-color
    "#f5f5f5", // --navbar-text-color
    "#565656"  // --button-background-color
  ];

  function toggleLightMode() {
    const isDarkMode = root.dataset.theme === "dark";
    root.dataset.theme = isDarkMode ? "light" : "dark";
    const colors = isDarkMode ? lightModeColors : darkModeColors;
    colors.forEach((color, index) => {
      root.style.setProperty(`--color-${index}`, color);
    });
    sunIcon.classList.toggle("fa-sun");
    sunIcon.classList.toggle("fa-moon");
  }

  sunIcon.addEventListener("click", toggleLightMode);
});
