document.addEventListener("DOMContentLoaded", function() {
  const minInput = document.querySelector(".input-min");
  const maxInput = document.querySelector(".input-max");
  const rangeMin = document.querySelector(".range-min");
  const rangeMax = document.querySelector(".range-max");
  const progressBar = document.querySelector(".progress");
  
  // Update the range slider values when the input fields change
  minInput.addEventListener("input", function() {
    rangeMin.value = this.value;
    updateProgressBar();
  });
  
  maxInput.addEventListener("input", function() {
    rangeMax.value = this.value;
    updateProgressBar();
  });
  
  // Update the input field values when the range slider changes
  rangeMin.addEventListener("input", function() {
    minInput.value = this.value;
    updateProgressBar();
  });
  
  rangeMax.addEventListener("input", function() {
    maxInput.value = this.value;
    updateProgressBar();
  });
  
  // Update the progress bar width based on the range slider values
  function updateProgressBar() {
    const min = rangeMin.value;
    const max = rangeMax.value;
    const range = max - min;
    const progressWidth = ((range - 0) / (10000 - 0)) * 100;
    
    progressBar.style.width = progressWidth + "%";
  }
  
  // Initialize the progress bar width on page load
  updateProgressBar();
});
