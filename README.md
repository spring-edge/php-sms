PHP SMS-Lib
================================

This repository contains PHP-lib to send sms using Spring Edge (https://www.springedge.com) APIs

Requirements
------------

- [Sign up](https://www.springedge.com/) for a free Trail Messaging account
- Create a new `apikey` from developers section of sms account
- Setup sender name for sms account.
- A working envounment to run PHP.


Installation
------------

Place `smsapi.php` in same directory.
Get API key and Sender name.

Usage
-----

Send Text message:

```
include 'smsapi.php';

$apikey = "675031xxxxxxxxxxxx";
$sender = "SEDEMO";

$sendsms = new smsapi($apikey, $sender);
$sendsms->send_sms("9199xxxxxxxx", "Hello, This is a test message from spring edge");

```

Success Response:

```
{
 "groupID":xxxxxx,
 "MessageIDs":"xxxxxxx-xx",
 "status":"AWAITED-DLR"
}
```


Or in case of an error:

```
{
  "error":"Invalid Mobile Numbers"
}
```


Support
-------------

For any support or query please visit:
[https://www.springedge.com](https://www.springedge.com)
