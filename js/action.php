<?php

if (isset($_POST['send'])){
  $to = 'katiecsigurdson@gmail.com';
  $subject = 'Message from my site';
  $successmsg = "Thank you for your message!";

  $message = 'Name: ' . $_POST['name'];
  $message .= 'Email: ' . $_POST['email'];
  $message .= 'Subject: ' . $_POST['subject'];
  $message .= 'Comments: ' .$_POST['comments'];

  $success = mail($to, $subject, $message);

  echo $successmsg;

}

?>
