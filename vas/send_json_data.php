<?php 
$data= array("productId"=>0,
 "pricepointId"=>0,
 "mcc"=>"string",
 "mnc"=>"string",
 "text"=>"string",
 "msisdn"=>"string",
 "largeAccount"=>"string",
 "sendDate"=>"string",
 "priority"=>"string",
 "timezone"=>"string",
 "context"=>"string",
 "moTransactionUUID"=>"string",
"mtType"=> "String");

$j_data=json_encode($data);
$url="http://localhost/practice/vas/api.php";
$ch=curl_init($url);

 curl_setopt( $ch, CURLOPT_POSTFIELDS, $j_data );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$result = curl_exec($ch);
echo($result);
?>