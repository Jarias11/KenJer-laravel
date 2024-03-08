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


        $.ajax({
            type: 'POST',
            url: submitUrl,
            data: $(this).serialize(),
            success: function (response) {
                openModal('request sent');
                $('#ContactFormContainer').hide();

                $('#ShowForm').show();

            },
            error: function (error) {
                console.error(error);
            }

        });
        $(this)[0].reset();
    });
});
