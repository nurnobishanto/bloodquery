<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subj = $_POST['subj'];
$message = $_POST['message'];
$phone = $_POST['phone'];

$formcontent="From: $name \n Email: $email \n Phone : $phone \n Subject : $subj \n Message: $message ";
$recipient = "admin@nurnobishanto.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
//echo "Thank You!";

header("Location: contact.php?success");

?>