<?php // callback.php

require "vendor/autoload.php";

$access_token = '86uJdolVJGA/6v+CevfONIOVLqi5gYZDak7my2N0ujQnDjurF+bkF03cvru9Gyi3WskeCtnf58Tduf0iuHnMzFArVvWImj5wANabkSZKVOV2X1EwelKGuGkyKKJeTaBF8Ves96fBFsRn3cqbXxeLjwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '3b79370d5e86b13f51b185e1b3adbadb';
$idPush = 'U0007134473ad3d89728115a6d41d0304'// Get POST body content

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
