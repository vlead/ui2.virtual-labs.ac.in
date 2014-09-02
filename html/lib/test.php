<?php

$message = $_POST['message'];
$subject = $_POST['subject'];
$from = $_POST['email'];


require "Swift-5.0.1/lib/swift_required.php";
$transport = Swift_SmtpTransport::newInstance('students.iiit.ac.in', 25)
  ->setUsername('ankit.bhansali')
  ->setPassword('mbrbabab04');
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance($subject)
  ->setFrom(array($from))
  ->setTo(array('ankit05bhansali@gmail.com'))
  ->setBody($message);

// Send the message
$result = $mailer->send($message);
echo "DONE";
?>
