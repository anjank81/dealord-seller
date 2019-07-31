<?php
include_once('dd.php');
$email =$_POST['email'];
$url ="http://api.dealord.com/api/v1/accounts/send-reset-password-link/";
$data = array('login'=>$email
        );
$fpp = apicall($url,$data);
$code = $fpp->code;
if ($fpp ->code == '200')
{
    $detail = $fpp->body->detail;
    header("location:forgot_password.php?msg=$detail");
}
else{
    $detail = $fpp->body->detail;
    header("location:forgot_password.php?msg=$detail");
}
?>