<?php
include_once('vendor/autoload.php');

function apicall($url,$data)
{
    $headers = array('Accept' => '*/*');
    $body = Unirest\Request\Body::form($data);
    $response = Unirest\Request::post($url, $headers, $body);
    return $response;
}