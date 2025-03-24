<?php
if(isset($_POST['email'])) {
    $email_to = "you@awesomecompany.com";
    $email_subject = "You've got a new submission";

    function problem($error) {
        echo "Oh looks like there is some problem with your form data: <br></br>"
        echo $error . "<br></br>";
        echo "Please fix those to proceed.<br></br>"
        die();
    }

    if (
        !isset($_POST['fullName']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])
    ) {
        problem('Oh looks like there is some problem with your form data')
    }

    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error_message = "";
    $email_exp = "/^[A-Za-z .'-]+$/"

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Name does not seem valid.<br>';
    }
    if (strlen($message) < 2) {
        $error_message .= 'Message should not be less than 2 characters<br>';
    }
    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    function clean_string($string) {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($)
    }
}