<?php

  $email = 'kotnala.himanshu99@gmail.com';//$_REQUEST['email'] ;
  $message = '' ;//$_REQUEST['message'] ;
echo 'hi';
  // here we use the php mail function
  // to send an email to:
  // you@example.com
 //if( 
 $mail=mail( "kotnala.himanshu@gmail.com", "Feedback Form Results", "hello testig ", "From: $email");
//echo $mail.'-->';
if($mail)
 {
  echo "SUCCESS";
} else {
    echo "ERROR: " . $mail->ErrorInfo;//echo "ERROR";
}
?>
