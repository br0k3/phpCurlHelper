<?php

require_once 'class.curlhelper.php';

$curl = new CurlHelper();
$curl->run('http://www.example.com/');
$response = $curl->getResponse();

var_dump($response);
