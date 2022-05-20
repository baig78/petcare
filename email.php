<?php
// the message
$msg = $_POST['name']."\n".$_POST['email']."\n".$_POST['subject']."\n".$_POST['message'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("baig.mirza78@gmail.com","My subject",$msg);
?>