<?php
session_start();
include_once('dd.php');
$login = $_POST['login'];
$pass = $_POST['password'];

$data = array('login'=>$login,
            'password'=>$pass
        );
$url = 'http://api.dealord.com/api/v1/accounts/login/';

$lr = apicall($url,$data);
$code = $lr ->code;

if ($lr ->code == '200')
{
    $token = $lr->body->token;
    $_SESSION["token"] = $token;
    header('location:index.php');
}
else{
    $det =$lr->body->detail;
    header("location:login.php?msg=$det"); 
}