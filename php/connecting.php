<?php

/* 
connecting.php, connecting buttcoin tipping buttons with Buttcoin API
ElGatoSaez - https://github.com/ElGatoSaez
 -
Buttcoins: http://buttcoin.us
Buttcoin API: https://hira.io/butt.php
Polsaker - https://github.com/Polsaker
 -
*/
// Parameters
https://hira.io/buttwait.php?tid=TRANSACTION_ID
// Place here your buttcoin account (Putting mine as example)
$acc = "elgatosaez";
// Landing website (I'm putting mine as example)
$cburl = "http://127.0.0.1/btc";
// Amount you want to put, you can take this into another form if you want.
$butts = "0";
// Connecting to the API
$api = "https://hira.io/butt.php?a=new&amount=" . $butts . "&callback=" . $cburl . "&deposit_to=" . $acc;
// Retreiving those contents
$getJson = file_get_contents($api);
// Decoding that JSON to be readable
$nowJson = json_decode($getJson, true);
// Getting the Transaction ID
$tID = $nowJson['id'];
// Then getting the final webpage (dun dun dun dun)
$fURL = "https://hira.io/buttwait.php?tid=" . $tID;
// Redirecting to that
header('Location: '.$fURL);
?>