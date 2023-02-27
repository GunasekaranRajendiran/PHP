<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];                                             
$to = "gunasekaran.r1404@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>