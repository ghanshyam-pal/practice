<?php 


include("keygen.php");

//echo "<br>".$ekey."<br>";







$url = 'https://mobily-ma.timwe.com/sa/ma/api/external/v2/sms/mt/1234';
$data = array("productId"=>1234,
 "pricepointId"=>5678,
 "mcc"=>"420",
 "mnc"=>"03",
 "text"=>"http://www.timwe-wap-push.com",
 "msisdn"=> "XXXXXXXXXXX(FAKE_MSISDN)",
 "largeAccount"=>"XXXX(SHORTCODE)",
 "priority"=>"NORMAL",
 "timezone"=>"Asia/Riyadh",
 "context"=>"STATELESS",
 "mtType"=>"WAP"  );

$postdata = json_encode($data);

$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'
,'apikey: 6080ee536440481a8acda80f827e2fc9y52','authentication: $ekey'
,'external-tx-id: 620b49cf-c429-4928-b12f-971fe580b17b'));
$result = curl_exec($ch);
curl_close($ch);
print_r ($result);
?>