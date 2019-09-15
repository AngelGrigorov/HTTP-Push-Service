<?php
require_once('../api/Request.php');

 function makeRequest(Request $http, $data)
{
    if(!empty($data)){
        $http->setStatus(200);
        $http->setStatusMessage("OK!");
    }else{
        $http->setStatus(404);
        $http->setStatusMessage("Not found!");
    }
}
function printInConsole(Request $http):void
{
    $result = $http->getStatus() . " " . $http->getStatusMessage() . " " . $http->getDateTime() . PHP_EOL;
    echo $result;
}
