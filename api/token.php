<?php
$date=date_create();
$timestamp = date_timestamp_get($date);
$plain = $app_id."_".$timestamp."_".$app_key;
$sig = md5($plain);
$arr = array("app_id" => "e5908b39e61040b9aada6ad6069c870e","timestamp" => $timestamp,"sig" => $sig);
echo json_encode($arr);
?>