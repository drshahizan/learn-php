// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Get the moon icon element
    const moonIcon = document.querySelector(".fas.fa-moon");
    
    // Get the root element
    const root = document.documentElement;
    
    // Define the light mode colors
    const lightModeColors = [
      "#e4e6eb", // --background-color
      "#e4e6eb", // --navbar-background-color
      "#24292D", // --text-color
      "#24292D", // --navbar-text-color
      "#242526"  // --button-background-color
    ];
    
    // Define the dark mode colors
    const darkModeColors = [
      "#24292D", // --background-color
      "#24292D", // --navbar-background-color
      "#e4e6eb", // --text-color
      "#e4e6eb", // --navbar-text-color
      "#242526"  // --button-background-color
    ];
    
    // Toggle dark mode
    function toggleDarkMode() {
      const isDarkMode = root.dataset.theme === "dark";
      root.dataset.theme = isDarkMode ? "light" : "dark";
      const colors = isDarkMode ? lightModeColors : darkModeColors;
      colors.forEach((color, index) => {
        root.style.setProperty(`--color-${index}`, color);
      });
      // Toggle moon and sun icons
      moonIcon.classList.toggle("fa-moon");
      moonIcon.classList.toggle("fa-sun");
    }
    
    // Add event listener to moon icon for toggling dark mode
    moonIcon.addEventListener("click", toggleDarkMode);
  });
  