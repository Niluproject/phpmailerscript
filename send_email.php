<?php
// Include the PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// Retrieve the form data
$sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Configure the SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';

// Set the email content
$mail->setFrom('nillvaghela11@gmail.com', 'Nilesh');
$mail->addAddress($sender_email);
$mail->Subject = $subject;
$mail->Body = $message;

// Send the email
if (!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent successfully.';
}
?>
