<?php
add_action('wp_ajax_contacts_message', 'contacts_message');
add_action('wp_ajax_nopriv_contacts_message', 'contacts_message');

function contacts_message()
{
    $email_addres = get_option('admin_email');
    if (isset($_POST) && strcasecmp($email_addres, '') !== 0) {
        if (isset($_POST['full_name'])) {
            $name = $_POST['full_name'];
            $tel = $_POST['mobile'];
            $email = $_POST['email'];
            $reason = $_POST['reasons'];
            $message = $_POST['message'];

            $msg = "
            <p><strong>Message from user</strong></p>
                <p><strong>Full name:</strong> $name</p>
                <p><strong>Mobile number:</strong> $tel</p>
                <p><strong>Email address:</strong> $email</p>
                <p><strong>Reason for enquiry:</strong> $reason</p>
                <p><strong>Message:</strong> $message</p>
            ";

            $subject = "Message from ".site_url();
           wp_mail("$email_addres", $subject, "$msg");
        }
    } else {
        echo '0';
    }

    wp_die();
}