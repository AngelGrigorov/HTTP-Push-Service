<?php
require_once('../api/Request.php');
require_once '../db/dbConnection.php';
$path = '../repo';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file) {
    $str = file_get_contents("../repo/" . $file);
    $http = new Request();
    $http->setData($str);
    $http->makeRequest();
    echo $http->getStatus() . " " . $http->getStatusMessage() . " " . $http->getDateTime() . PHP_EOL;
require_once('../api/pushService.php');
push($db, $http->getStatus(), $http->getStatusMessage());
}

