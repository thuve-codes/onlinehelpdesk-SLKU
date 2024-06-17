function countUp(counterElement, targetValue) {
    let count = 0;
    const duration = 3000; // Total duration in milliseconds
    const steps = Math.ceil(targetValue / (duration / 10000)); // Calculate the number of steps needed
    const stepSize = targetValue / 500; // Calculate the step size dynamically
    
    function displayNextNumber() {
      if (count <= targetValue) {
        counterElement.textContent = Math.round(count).toString().padStart(counterElement.textContent.length, '0');
        count += stepSize;
        if (count > targetValue) {
          counterElement.textContent = targetValue.toString().padStart(counterElement.textContent.length, '0');
        } else {
          setTimeout(displayNextNumber, duration / 1000); // Adjust timeout for smoother animation
        }
      }
    }
  
    displayNextNumber();
  }
  
  window.onload = function() {
    const counters = document.querySelectorAll('.no');
    
    counters.forEach(counterElement => {
      const targetValue = parseInt(counterElement.getAttribute('data-val'));
      
      countUp(counterElement, targetValue);
    });
  };

  let slideIndex = 0;
const slides = document.querySelectorAll('.slider img');

function showSlide(index) {
    slides.forEach((slide) => {
        slide.style.transform = `translateX(-${index * 100}%)`;
    });
}

function nextSlide() {
    slideIndex = (slideIndex === slides.length - 1) ? 0 : slideIndex + 1;
    showSlide(slideIndex);
}

// Automatic slideshow
setInterval(nextSlide, 3000); // Change image every 3 seconds













