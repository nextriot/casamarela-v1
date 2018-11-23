<?php
 
/**
 * Descript: Display the entered data as well send an email to entered email address.
 * @author Prem Tiwari
 * 
 */
$post_data = file_get_contents("php://input");
$data = json_decode($post_data);
 
// sned an email
$to = "atendimento@casamarela.com";
 
$subject = "New contact from $data->name";

$message = "Name: $data->name\n";
$message .= "Email: $data->email\n\n";
$message .= "Message:\n$data->message\n";
 
$headers = "From: $data->name <$data->email>";
 
//php mail function to send email on your email address
mail($to, $subject, $message, $headers);
 
?>