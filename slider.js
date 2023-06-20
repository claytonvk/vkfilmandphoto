const images = document.querySelectorAll('.slider-image');
const prevArrow = document.querySelector('.prev-arrow');
const nextArrow = document.querySelector('.next-arrow');
let currentImageIndex = 0;

function showImage(index) {
  if (index < 0) {
    index = images.length - 1;
  } else if (index >= images.length) {
    index = 0;
  }

  currentImageIndex = index;

  images.forEach((image) => {
    image.classList.remove('active');
  });

  images[currentImageIndex].classList.add('active');
}

prevArrow.addEventListener('click', () => {
  showImage(currentImageIndex - 1);
});

nextArrow.addEventListener('click', () => {
  showImage(currentImageIndex + 1);
});

// Show initial image
showImage(currentImageIndex);
