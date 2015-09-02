<?php
if(isset($_POST['email'])) {

$email_to = "dimax6@gmail.com";


if(!isset($_POST['full_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['company']) ||
!isset($_POST['subject']) ||
!isset($_POST['comment'])) {


var_dump($_POST);die();
}
$email_subject = $_POST['subject'];
$email_message = "Contact Details:\n\n";
$email_message .= "Full Name: " . $_POST['full_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Phone Number: " . $_POST['telephone'] . "\n";
$email_message .= "Company: " . $_POST['company'] . "\n\n";
$email_message .= "Comment: " . $_POST['comment'] . "\n\n";


$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

}
?>