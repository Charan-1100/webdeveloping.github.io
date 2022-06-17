<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@webdeveloping.github.io';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Email: $subject.\n".
              "User Email: $message.\n";

$to = 'saicharan3168@gmail.com';

$headers = "From: $email_from \r\n"

$headers = "Reply-To: $visitor_email \r\n"

mail($to,$email_subjectm,$email_body,$headers);
header("Location: contact.html");

?>
