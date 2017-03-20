<?php
//Bypass CORS
header("Access-Control-Allow-Origin: *");
//SSL Verification disabled due to PHP 7.0 inability to verify some ssl cert
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

//Request code starts here
  header('Content-Type: application/json');
  echo file_get_contents($_REQUEST['url'],false, stream_context_create($arrContextOptions));
?>
