<?php
header("Content-Type: application/json");
include_once('vendor/autoload.php');
$q = $_GET['q'];
function apicall($url)
    {
        $headers = array('Authorization' =>'token c1ad8870c1d535ebbe02e0eb5c9ee3df6a14b312');
        $response = Unirest\Request::get($url,$headers);
        return $response;
    }
$url ="http://api.dealord.com/searchproductname/?prdName=".$q;
$res = apicall($url);
$myJSON = json_encode($res->body);
echo $myJSON;
?>