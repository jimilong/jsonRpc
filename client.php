<?php
require_once('jsonRPCClient.php');

$client  = new jsonRPCClient('http://www.long.test:8080/rpc/server.php');

try {
    //call this method from network
    echo $client->hello();
}catch(Exception $e) {
    echo$e->getMessage(); 
}