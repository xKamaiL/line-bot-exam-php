<?php



require "vendor/autoload.php";

$access_token = 'PjAHTQjene4cSIy+8XL0HF3aCFttuUg61xhaifdc0zv3dfj6jWrTkm2P3EMC/+4xDc/uxYSDPxKg4y3EcZ9F4tZXcdjGamxRI2V8W6pf//CsFXFb0TleZdcO/uZ65ZHPDS2sgBntL0cJW5ktuPPpHwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'fba86a6c2843404a9d5041528be25bf5';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







