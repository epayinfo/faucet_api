<?php

$client = new SoapClient('https://api.epay.info/?wsdl');


$response = $client->f_balance($apicode,1);

/***
Will return faucet's balance in satoshi.

***/

?>