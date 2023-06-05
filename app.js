var currentSlide = 0;
var slides = document.querySelectorAll('.slides img');
var slideWidth = slides[0].clientWidth; // Get the width of the first slide
var totalSlidesWidth = slideWidth * slides.length; // Calculate the total width of all slides

// Set the width of the slides container
var slidesContainer = document.querySelector('.slides');
slidesContainer.style.width = totalSlidesWidth + 'px';

function changeSlide(n) {
  currentSlide += n;
  
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  } else if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  
  var translateX = -slideWidth * currentSlide;
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.transform = 'translateX(' + translateX + 'px)';
  }
}