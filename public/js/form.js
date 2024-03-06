$(() => {
    // variables
    const $FormButton = $('#ShowForm');
    var submitUrl = $('#ContactForm').data('submit-url');

    $FormButton.click(() => {
        $('#ContactFormContainer').show();
        $('#ShowForm').hide();
        $('#SlideshowText').hide();
    });
    const $Form = $('#ContactForm')
    $Form.submit(function (event) {
        event.preventDefault();

        // Serialize the form data
        var formData = $(this).serialize();
        console.log(formData); // Log the serialized form data

        $.ajax({
            type: 'POST',
            url: submitUrl, // Use the route name for the form action
            data: $(this).serialize(), // Serialize the form data
            success: function (response) {
                // Handle success
                console.log('Quote request submitted successfully.WOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO');
                console.log(response);
            },
            error: function (error) {
                // Handle error
                console.error(error);
            }
        });
    });
});
