<?php

require_once 'includes/secret_variables.php';

$pagetitle = 'Contact Us';

$to = 'sam@plusyoursettlements.com.au';
$subject = 'Plus Your Settlements Website Inquiry';

session_start();

// Check a POST is valid.
if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {

    // POST data is valid.

    // Verify with Google Recaptcha
    $recaptcha = $_POST['g-recaptcha-response'];

    $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=' . $RECAPTCHA_SECRET . '&response=' . $recaptcha);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    if ($data['success']) {

        // Send email in here

        $contact_name = $_POST['name'];
        $contact_phone = $_POST['phone'];
        $contact_email = $_POST['email'];

        if ($_POST['buyingselling'] == 'buying') {
            $contact_buyingsellingneither = 'Buying';
        } elseif ($_POST['buyingselling'] == 'selling') {
            $contact_buyingsellingneither = 'Selling';
        } else {
            $contact_buyingsellingneither = 'Neither';
        }

        $contact_comments = $_POST['comments'];

        $message = <<<EOT
You have a new enquiry from www.plusyoursettlements.com.au.

Name: $contact_name

Phone: $contact_phone

Email: $contact_email

Buying/Selling: $contact_buyingsellingneither

Comments: $contact_comments

EOT;

        $success = mail($to, $subject, $message);

        if ($success) {
            header('Location: /thanks');
        } else {
            header('Location: /error');
        }

    } else {
        header('Location: /error');
    }

} else {
    // POST data is invalid.
    header('Location: /error');
}

die();

?>
