<?php

require_once 'class.curlhelper.php';

$curl = new CurlHelper();
$curl->run('http://www.example.com/');
$response = $curl->getResponse();

// do something with the response
var_dump($response);
