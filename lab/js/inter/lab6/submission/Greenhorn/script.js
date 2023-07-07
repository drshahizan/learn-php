// script.js

document.addEventListener("DOMContentLoaded", function() {
  const moonIcon = document.querySelector(".fas.fa-moon");
  const root = document.documentElement;
  
  const lightModeColors = [
    "#e4e6eb", // --background-color
    "#e4e6eb", // --navbar-background-color
    "#24292D", // --text-color
    "#24292D", // --navbar-text-color
    "#242526"  // --button-background-color
  ];
  
  const darkModeColors = [
    "#24292D", // --background-color
    "#24292D", // --navbar-background-color
    "#e4e6eb", // --text-color
    "#e4e6eb", // --navbar-text-color
    "#242526"  // --button-background-color
  ];
  
  function toggleDarkMode() {
    const isDarkMode = root.dataset.theme === "dark";
    root.dataset.theme = isDarkMode ? "light" : "dark";
    const colors = isDarkMode ? lightModeColors : darkModeColors;
    colors.forEach((color, index) => {
      root.style.setProperty(`--color-${index}`, color);
    });
    moonIcon.classList.toggle("fa-moon");
    moonIcon.classList.toggle("fa-sun");
  }
  
  moonIcon.addEventListener("click", toggleDarkMode);
});
