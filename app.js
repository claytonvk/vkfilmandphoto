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

$(function() {
  $("#datepicker").datepicker();
});

// Get the phone input element
const phoneInput = document.getElementById('phone-input');
phoneInput.addEventListener('input', formatPhoneNumber);

function formatPhoneNumber() {
  // Get the raw phone number value
  let phoneNumber = phoneInput.value;

  // Remove any non-digit characters
  phoneNumber = phoneNumber.replace(/\D/g, '');

  // Apply formatting based on the number of digits
  if (phoneNumber.length > 3 && phoneNumber.length <= 6) {
    phoneNumber = phoneNumber.replace(/(\d{3})(\d{1,3})/, '($1) $2');
  } else if (phoneNumber.length > 6) {
    phoneNumber = phoneNumber.replace(/(\d{3})(\d{3})(\d{1,4})/, '($1) $2-$3');
  }

  // Update the input value with the formatted phone number
  phoneInput.value = phoneNumber;
}