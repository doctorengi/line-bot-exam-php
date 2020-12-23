<?php



require "vendor/autoload.php";

$access_token = '+vEbXmedgEZ6WJOBACJ/ZDFAdHHqPNS6tMNnwhje+T5Ukrm6mLMHbtzbQ/V5gRSo1oY+nT9D2lC2R5w9pp0tLw4dPmSrwi81pbrnlgNt8GIZ9jaOHaAYKw3R8E7C6sSA1m9jde4udSmEcUoZnJJ0RgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '1dbaed90ee42d21c3bf95a57f37c4747';
$idPush = 'U0007134473ad3d89728115a6d41d0304'

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







