<?php


$client = new SoapClient('https://api.epay.info/?wsdl');

// Send a normal prize
$response = $client->send($apicode,$user_wallet,$amount_to_send,1);

// Send a refferal earning
$response = $client->send($apicode,$user_wallet,$amount_to_send,2,'Referral earnings.');



/****
$response['status'] is greater than 0 that means transaction was successful
***/

?>