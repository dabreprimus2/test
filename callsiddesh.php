<?php
require_once "vendor/autoload.php";
use Twilio\Rest\Client;

$AccountSid = 'AC2e9c00392eaa46066009decbfbfb2a20';
$AuthToken = 'db1c9561751d6cc167391321b60d6fa7';
$client = new Client($AccountSid, $AuthToken);

try{
$call = $client->calls->create("+15512295671","+16309310953",array("url"=>"http://demo.twilio.com/docs"));
echo "Dailing your call";
} catch(Exception $e){
	echo "Error:".$e->getMessage();
}
?>