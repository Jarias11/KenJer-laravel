ScrollReveal().reveal('.slide-up', {
    distance: '200px', // Distance in px the element moves in
    origin: 'bottom', // Direction from which the element moves in
    duration: 1500, // Duration in milliseconds
    delay: 0, // Delay in milliseconds
    easing: 'ease', // Easing function
    interval: 200 // Interval between elements (if multiple elements are selected)
});
ScrollReveal().reveal('.slide-right', {
    distance: '200px', // Distance in px the element moves in
    origin: 'right', // Direction from which the element moves in
    duration: 1500, // Duration in milliseconds
    delay: 0, // Delay in milliseconds
    easing: 'ease', // Easing function
    interval: 200 // Interval between elements (if multiple elements are selected)
});
ScrollReveal().reveal('.card', {
    delay: 200,
    distance: '400px',
    origin: 'bottom',
    duration: 2000,
    reset: true,
    interval: 200, // Optional: Specify the interval between each card reveal
    beforeReveal: function (domEl) {
        // Add a class to each card's card-inner to reset the flip state before revealing
        domEl.querySelector('.card-inner').classList.remove('flipped');
    },
    afterReveal: function (domEl) {
        // Add a class to each card's card-inner to flip it after revealing
        domEl.querySelector('.card-inner').classList.add('flipped');
    }
});
