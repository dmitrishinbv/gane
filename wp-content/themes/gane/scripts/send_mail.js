jQuery(document).ready(function ($) {
    $(".form__submit__btn").click(function (e) {
        var full_name = $("#name").val();
        var mobile = $("#mobile").val();
        var email = $("#email").val();
        var reasons = $("#reasons").val();
        var message = $("#message").val();

        e.preventDefault(); // if the clicked element is a link

        $.ajax({
            url: ajax_contact_form.url,
            type: 'POST',
            data: {
                action: 'contacts_message',
                full_name,
                mobile,
                email,
                reasons,
                message,
            },
            success: function (response) {
                console.log(response);
            }
        });
    })
});