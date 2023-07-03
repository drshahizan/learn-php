// Get the mode-toggle element
const modeToggle = document.querySelector('.mode-toggle');

// Add click event listener to toggle the dark mode
modeToggle.addEventListener('click', function () {
  // Toggle the 'dark' class on the body element
  document.body.classList.toggle('dark');
});

