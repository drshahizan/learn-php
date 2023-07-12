// Get the necessary elements
const body = document.body;
const sidebar = document.querySelector("nav");
const sidebarToggle = document.querySelector(".sidebar-toggle");
const darkModeToggle = document.querySelector(".mode-toggle");

// Function to toggle the sidebar
function toggleSidebar() {
  sidebar.classList.toggle("close");
}

function toggleDarkMode() {
  body.classList.toggle("dark");
}

// Event listeners for the sidebar toggle and dark mode toggle
sidebarToggle.addEventListener("click", toggleSidebar);
darkModeToggle.addEventListener("click", toggleDarkMode);
