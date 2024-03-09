$(() => {
    const modal = $('#RequestModal');
    const closeButton = $('.close-button');

    // Function to open the modal with a custom message
    window.openModal = (message) => {
        $('#modal-message').text(message); // Set the message
        modal.modal('show'); // Display the modal
    };

    // Close the modal when the close button is clicked
    closeButton.click(() => {
        modal.modal('hide');
    });

    // Close the modal if the user clicks outside of it
    $(window).click((event) => {
        if ($(event.target).is(modal)) {
            modal.modal('hide');
        }
    });
});
