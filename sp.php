<?php
include_once('dd.php');
$fname =$_POST['first_name'];
$lname =$_POST['last_name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$password =$_POST['password'];
$password_confirm =$_POST['password_confirm'];
if ($password == $password_confirm)
{
    $url ="http://api.dealord.com/api/v1/accounts/register/";
    $data = array(
            'first_name'=>$fname,
            'last_name'=>$lname,
            'email'=>$email,
            'phone'=>$phone,
            'password'=>$password,
            'password_confirm'=>$password_confirm
        );
    $su = apicall($url,$data);
    print_r($su);
    $code = $su->code;
    if ($code ==400)
    {
        $email =$su->body->email[0] ?? '';
        $phone =$su->body->phone[0] ?? '';
        $message = '';
        if($email!=null)
        {
            $message = $message.$email."<br/>";
        }

        if ($phone !=null)
        {
            $message = $message.$phone."<br/>";
        }
        header("location:signup.php?msg=$message");
    }
    else if ($code==201)
    {
        $message= "Registration Successful, Verify your email";
        header("location:signup.php?msg=$message");
    }

}
else{
    $message ="Passwords Should be Same";
     header("location:signup.php?msg=$message");
}

?>