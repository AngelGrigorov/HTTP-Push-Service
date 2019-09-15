<?php
require_once('../api/Request.php');
require_once ('../db/dbConnection.php');
$path = '../repo';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach ($files as $file) {
    $str = file_get_contents("../repo/" . $file);
    // new request
    $http = new Request();

    // setting data
    $http->setData($str);

    require_once ('../api/appService.php');

    // making requests in custom web service with retry mechanism
    makeRequest( $http, $str);

    require_once('../api/pushQuery.php');

    //pushing the response in database
   pushAndPrint($http,$str,$db);
}


