<?php

if (!isset($_POST['submit'])) {

    echo "error; you need to submit the form!";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$telephone = $_POST['telephone'];
$message = $_POST['message'];

if (empty($name) || empty($visitor_email) || empty($telephone) || empty($message)) {
    echo 'fill out all the fields';
    exit;
}
$subject = $_POST['subject'];

$email_from = $visitor_email;
$email_subject = $subject;
$email_body = "You have recieved a new message from: $name \n , email address: $visitor_email \n Here is the message: \n $message";

$to = 'svenlinderoth@outlook.com';
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);

?>