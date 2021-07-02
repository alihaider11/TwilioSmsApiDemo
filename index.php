<?php

require __DIR__.'./vendor/autoload.php';

//echo(__DIR__.'./vendor/autoload.php');

use Twilio\Rest\Client;

$sid = 'AC51b5263be2ebc1d1540e4dfa33247f33';
$token = 'f2ce5be5e93fea366c998da4c84a0f6d';
$client = new Client($sid, $token);
echo($client);

$client->messages->create(
    // the number you'd like to send the message to
    '+923117227296',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19893033546',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    ]
);


?>