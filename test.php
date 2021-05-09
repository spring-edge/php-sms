<?php
include 'smsapi.php';
    
$apikey = "675031xxxxxxxxxxxx";
$sender = "SEDEMO";
    
$sendsms = new smsapi($apikey, $sender);
$response = $sendsms->send_sms("9199xxxxxxxx", "Hello, This is a test message from spring edge");

echo $response;
?> 
