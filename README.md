# ePay's official faucet api

Our API system is based on SOAP technology for higher security and better performance.

# How to send payment

soap webserver link is : https://api.epay.info/?wsdl

$client->send($apicode,$user_wallet,$amount_to_send,1,$note);

$apicode is the code you got from ePay.info (mandatory)

$user_wallet is the user's wallet address, it can be any address from our supported currencies (mandatory)

$amount_to_send is the amount you want to send in satoshi format. (mandatory)

the last parameter is the type of payment, 1 => normal prize that will respect the timer, 2=> is for referral payment will not respect timer (mandatory)

$note is the note in fron of the transaction in the list (Optional)

will return the following codes

if >0 it means the transaction went through and is complete.

-2 means wrong api code

-3 means not enough balance

-4 means one of the mandatory parameters is missing

-5 means payment is sooner than the calculated time out

-6 means ACL is active and server IP address is not authorized


# How to check 

soap webserver link is : https://api.epay.info/?wsdl

$client->f_balance($apicode,1);

$apicode is the code you got from ePay.info (mandatory)

the last parameter has to be 1  (mandatory)

will return the following codes

if >0 is your balance

-4 means one of the mandatory parameters is missing
