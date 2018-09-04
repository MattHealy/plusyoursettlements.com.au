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

    $url = 'https://www.google.com/recaptcha/api/siteverify';

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => 'secret=' . $RECAPTCHA_SECRET . '&response=' . $recaptcha
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) {
        header('Location: /error?details=Recaptcha%20validation%20failure');
    }

    try {
        $data = json_decode($result, true);
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

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
            header('Location: /error?details=Error%20sending%20email');
        }

    } else {
        header('Location: /error?details=Recaptcha%20validation%20failure');
    }

} else {
    // POST data is invalid.
    header('Location: /error?details=Contact%20form%20validation%20failed');
}

die();

?>
