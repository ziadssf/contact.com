<?php

   $name = $_POST['name'];
   $user_email = $_POST['email'];
   $message = $_POST['msg'];
   $phone = $_POST['phone'];
   $my_email = 'alpha4code@gmail.com';
   $subject = "new message";
   $headers = "From: $user_email \r\n";
   $email_body = "User Name: $name. \n" . "User Email: $user_email. \n" . "User Message: $message. \n" . "User Phone: $phone. \n";
   mail($my_email, $subject,$email_body,$headers);

?>
