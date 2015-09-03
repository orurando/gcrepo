<?php
if(isset($_POST['email'])) {

$email_to = "sales@grandcanals.com";

$email_subject = "Contact from the web";

if(!isset($_POST['full_name']) ||
!isset($_POST['email']) ||
!isset($_POST['company']) ||
!isset($_POST['telephone'])) {


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = $actual_link."/../contact-us.html?fail=true";


header("Location: ".$actual_link);
die();
}

$email_message = "Contact Details:\n\n";
$email_message .= "Full Name: " . $_POST['full_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Phone Number: " . $_POST['telephone'] . "\n";
$email_message .= "Company: " . $_POST['company'] . "\n\n";


$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = $actual_link."/../contact-us.html?sucess=true";


header("Location: ".$actual_link);
}
?>