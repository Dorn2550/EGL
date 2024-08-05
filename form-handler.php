<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = 'lakkana8755@gmail.com';
$headers = "Form: $email_form \r\r";
$headers .= "Reply-To: $visitor_email \r\n";

main($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
            
?>