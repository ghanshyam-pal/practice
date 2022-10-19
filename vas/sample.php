<?php
$url="https://mobily-ma.timwe.com/sa/ma/api/external/v1/broadcast/sms/broadcast-def/1234";
$ch=curl_init($url);
//curl_setopt($ch,CURLOPT_URL,)
curl_exec($ch);
?>