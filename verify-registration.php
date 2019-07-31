<?php
include_once('dd.php');
$user_id = $_GET['user_id'];
$timestamp = $_GET['timestamp'];
$signature = $_GET['signature'];

$url ="http://api.dealord.com/api/v1/accounts/verify-registration/";
$data = array(
            'user_id'=>$user_id,
            'timestamp'=>$timestamp,
            'signature'=>$signature
        );
$vu = apicall($url,$data);
print_r($vu);
$code = $vu->code;
if ($code == 200)
{
    $msg = "Verfication Sucsess Login Now";
    header("location:login.php?msg=$msg");
}
else{
    $msg = "Verfication Fail";
    header("location:signup.php?msg=$msg");
}
?>