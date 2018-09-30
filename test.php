<?php
include 'smsapi.php';
    
$apikey = "675031xxxxxxxxxxxx";
$sender = "SEDEMO";
    
$sendsms = new smsapi($apikey, $sender);
$sendsms->send_sms("9199xxxxxxxx", "Hi this is a test message");

?> 
