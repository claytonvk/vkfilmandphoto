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


const instagramInput = document.getElementById('instagram-input');

instagramInput.addEventListener('focus', function() {
  if (!this.value.startsWith('@')) {
    this.value = '@' + this.value;
  }
});


document.addEventListener('DOMContentLoaded', function() {
  // Initialize lazy loading for images
  const lazyloadImages = document.querySelectorAll('.lazyload');
  if ('loading' in HTMLImageElement.prototype) {
      lazyloadImages.forEach(function(img) {
          img.src = img.dataset.src;
      });
  } else {
      const script = document.createElement('script');
      script.src = './cdnjs/lazysizes.min.js';
      document.body.appendChild(script);
  }
});
