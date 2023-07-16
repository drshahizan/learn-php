
const body = document.body;
const sidebar = document.querySelector("nav");
const sidebarToggle = document.querySelector(".sidebar-toggle");
const darkModeToggle = document.querySelector(".mode-toggle");


function toggleSidebar() {
  sidebar.classList.toggle("close");
}


function toggleDarkMode() {
  body.classList.toggle("dark");
}


sidebarToggle.addEventListener("click", toggleSidebar);
darkModeToggle.addEventListener("click", toggleDarkMode);
