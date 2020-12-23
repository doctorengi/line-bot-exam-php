<?php
$access_token = '+vEbXmedgEZ6WJOBACJ/ZDFAdHHqPNS6tMNnwhje+T5Ukrm6mLMHbtzbQ/V5gRSo1oY+nT9D2lC2R5w9pp0tLw4dPmSrwi81pbrnlgNt8GIZ9jaOHaAYKw3R8E7C6sSA1m9jde4udSmEcUoZnJJ0RgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
