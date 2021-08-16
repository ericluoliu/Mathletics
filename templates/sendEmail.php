<?php
// the message
$msg = "testing testing";
$headers = "From: gogograce999@gmail.com";

// send email
mail("themathleticspage@gmail.com","Contact Form Response",$msg,$headers);

echo "email should have sent";
?>