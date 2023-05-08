<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@youremail.com';
$email_subject = 'New form submission';
$email_subject = "User name : $name.\n".
                "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User message: $message.\n";

$to = 'dbindustries9@gmail.com';

$headers = "From : $email_from \r\n";

$headers .= "Reply-To : $visitor_email\r\n";

mail($to,$email_subject,$email_subject,$headers);

header("Location : rename.html");
?>