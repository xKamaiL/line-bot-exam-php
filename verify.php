<?php
$access_token = 'PjAHTQjene4cSIy+8XL0HF3aCFttuUg61xhaifdc0zv3dfj6jWrTkm2P3EMC/+4xDc/uxYSDPxKg4y3EcZ9F4tZXcdjGamxRI2V8W6pf//CsFXFb0TleZdcO/uZ65ZHPDS2sgBntL0cJW5ktuPPpHwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;