// Carousel functionality
let currentImageIndex = 0;
const images = document.querySelectorAll('.carousel-image');

// Show the first image initially
images[currentImageIndex].classList.add('active');

function showNextImage() {
    images[currentImageIndex].classList.remove('active');
    currentImageIndex = (currentImageIndex + 1) % images.length;
    images[currentImageIndex].classList.add('active');
}

// Change image every 3 seconds
setInterval(showNextImage, 3000);
