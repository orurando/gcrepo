<?php
if(isset($_POST['email'])) {

$email_to = "sales@grandcanals.com";
$email_subject = "Contact from the web";

if(!isset($_POST['full_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['company'])) {


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

}
?>