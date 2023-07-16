document.addEventListener("DOMContentLoaded", function () {
 
  const minInput = document.querySelector(".input-min");
  const maxInput = document.querySelector(".input-max");
  const minRange = document.querySelector(".range-min");
  const maxRange = document.querySelector(".range-max");
  const progress = document.querySelector(".progress");

  
  minRange.value = parseInt(minInput.value);
  maxRange.value = parseInt(maxInput.value);

  
  function updateProgress() {
    const minValue = parseInt(minRange.value);
    const maxValue = parseInt(maxRange.value);
    const minPosition = ((minValue - 0) / (10000 - 0)) * 100;
    const maxPosition = ((maxValue - 0) / (10000 - 0)) * 100;
    progress.style.left = minPosition + "%";
    progress.style.width = maxPosition - minPosition + "%";
  }

 
  function updateInputs() {
    const minPosition = parseInt(progress.style.left) || 0;
    const maxPosition = parseInt(progress.style.width) || 0;
    const minValue = Math.round((minPosition / 100) * 10000);
    const maxValue = Math.round(((minPosition + maxPosition) / 100) * 10000);
    minInput.value = minValue;
    maxInput.value = maxValue;
  }

  
  minInput.addEventListener("input", function () {
    const minValue = parseInt(minInput.value);
    const maxValue = parseInt(maxInput.value);
    if (minValue < 0) {
      minInput.value = 0;
    } else if (minValue > 10000) {
      minInput.value = 10000;
    }
    if (minValue > maxValue) {
      maxInput.value = minValue;
    }
    minRange.value = minValue;
    updateProgress();
  });

  maxInput.addEventListener("input", function () {
    const minValue = parseInt(minInput.value);
    const maxValue = parseInt(maxInput.value);
    if (maxValue < 0) {
      maxInput.value = 0;
    } else if (maxValue > 10000) {
      maxInput.value = 10000;
    }
    if (maxValue < minValue) {
      minInput.value = maxValue;
    }
    maxRange.value = maxValue;
    updateProgress();
  });

  
  minRange.addEventListener("input", function () {
    updateInputs();
    updateProgress();
  });

  maxRange.addEventListener("input", function () {
    updateInputs();
    updateProgress();
  });
});
