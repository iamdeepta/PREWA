<?php
  if(isset($_POST['submit'])){
    $name=$_POST['sendername'];
    $email=$_POST['emailaddress'];
    $phone=$_POST['telephone'];
    $subject=$_POST['sendersubject'];
    $msg=$_POST['sendermessage'];

    $to='info@prewa.org'; // Receiver Email ID, Replace with your email ID
    $subject='Contact Form Submission';
    $message="Name :".$name."\n"."Phone :".$phone."\n\n"."Wrote the following :"."\n".$msg;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
      //echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";

      $msg_success = "Mail sent successfully! Thank you ".$name.", we will contact you shortly.";

      header("Location: contact_us.php?msg_success=".$msg_success);
    }
    else{
      //echo "Something went wrong!";

      $msg_error = "Something went wrong! Please try again.";

      header("Location: contact_us.php?msg_error=".$msg_error);
    }
  }
?>