$(() => {
    // variables
    const $FormButton = $('#ShowForm');
    const submitUrl = $('#SubmitUrl').val();

    $FormButton.click(() => {
        $('#ContactFormContainer').show();
        $('#ShowForm').hide();
        $('#SlideshowText').hide();
    });
    const $Form = $('#ContactForm')
    $Form.submit(function (event) {
        event.preventDefault();
        $('#ContactFormContainer').hide();

        $.ajax({
            type: 'POST',
            url: submitUrl,
            data: $(this).serialize(),
            success: function (response) {
                openModal('request sent');
            },
            error: function (error) {
                console.error(error);
            }
        });
    });
});
