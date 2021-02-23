<?php

if (isset($_POST['btn'])) {

  $fname = $_POST['fname'];

  $lname = $_POST['lname'];

  $from = $_POST['email'];

  $message = $_POST['message'];
  
  


   
  $to = "*******************@example.com";
 
  $subject = "Portfolio Form Submission";
  
  $subject2 = "Form Submission";

  $headers = "From: " . $from;
  
  $headers2 = "Hello " . $fname . ",";

  $txt = "You have recieved a message from " . $fname . " " . $lname . ".\n********************************************************************\n\n" . $message . "\n\n";
   
  $txt2 = "     Your message has been sent succesfully! \n\n Thank you,\nMichael Parenti\n" ;
  
  
  
    mail($to, $subject, $txt, $headers);
    
    mail($from, $subject2, $txt2, $headers2); // sends a copy of the message to the sender

    echo "Thank you " . $fname . ", your message has been sent. We will contact you shortly.";
   
}
 
?>
