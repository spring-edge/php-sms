<?php
include 'smsapi.php';
    
$apikey = "675031xxxxxxxxxxxx";
$sender = "SEDEMO";
    
$sendsms = new smsapi($apikey, $sender);
$response = $sendsms->send_sms("9199xxxxxxxx", "Hi this is a test message");

echo $response;
?> 
