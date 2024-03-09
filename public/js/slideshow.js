$(() => {
    //variables
    let currentIndex = 0;
    const slides = $('.slide-image');
    const totalSlides = slides.length;

    // functions
    const showNextSlide = () => {
        slides[currentIndex].style.opacity = 0;
        currentIndex = (currentIndex + 1) % totalSlides;
        slides[currentIndex].style.opacity = 1;
    }

    // events

    // on start
    // Change slide every 5 seconds
    setInterval(showNextSlide, 5000);

});

