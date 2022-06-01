<?php
echo "10";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$text=$_POST['text'];
$to="pierluigi.lepore@gmail.com";
$message="Name: ".$name."\r\n Email: ".$email."\r\n Message: ".$text;
$headers = "From: noreply@codeconia.com",
if($email!=NULL){
    mail($to,$subject,$message,$headers);
}
//redirect
header("Location:thankyou.html");
?>
?>