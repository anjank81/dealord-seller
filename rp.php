<?php
include_once('dd.php');
$user_id = $_POST['user_id'];
$timestamp = $_POST['timestamp'];
$signature = $_POST['signature'];
$pass = $_POST['pass'];
$data = array('user_id'=>$user_id,
            'timestamp'=>$timestamp,
            'signature' =>$signature,
            'password' =>$pass
        );
$url = 'http://api.dealord.com/api/v1/accounts/reset-password/';
$rp = apicall($url,$data);
$msg = $rp->body->detail;
header("location:login.php?msg=$msg")
?>