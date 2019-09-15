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

function pushAndPrint(Request $http, $data, $db)
{
    $status = $http->getStatus();
    $statusMessage = $http->getStatusMessage();
    $retryCount = 0;
    if($status !== 200 ) {
        while($retryCount < 5) {
            makeRequest($http, $data);

            //printing in console
            printInConsole($http);

            //pushing the response in database
            push($db, $status, $statusMessage);
            $retryCount++;
        }
    }else{
        //printing in console
        printInConsole($http);

        //pushing the response in database
        push($db, $status, $statusMessage);

    }
}
