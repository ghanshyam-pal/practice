<?php

    // $result = file_get_contents("php://input");

    $resp=array("requestId"=>"44:1507734322453",
     "code"=>"SUCCESS",
     "inError"=> false,
     "responseData"=>array("transactionUUID"=>"9bb96cda-ae95-11e7-91f6-0050568d729a"));

$enc_resp=json_encode($resp);
    echo "<pre>";
    echo $enc_resp;

?>