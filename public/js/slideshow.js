let currentIndex = 0;
const slides = document.querySelectorAll('.slide-image');
const totalSlides = slides.length;

function showNextSlide() {
    slides[currentIndex].style.opacity = 0;
    currentIndex = (currentIndex + 1) % totalSlides;
    slides[currentIndex].style.opacity = 1;
}
// Change slide every 5 seconds
setInterval(showNextSlide, 5000);

