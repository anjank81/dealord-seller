<?php
include_once('dd.php');
$user_id = $_GET['user_id'];
$timestamp = $_GET['timestamp'];
$signature = $_GET['signature'];

?>
<form action="rp.php" method="post">
    <label> New Password </label>
    <input type="text" name="pass" />
    <input type="hidden" name ="user_id" value ="<?php echo $user_id;?>"/>
    <input type="hidden" name ="timestamp" value ="<?php echo $timestamp;?>"/>
    <input type="hidden" name ="signature" value ="<?php echo $signature;?>"/>
    <input type="submit" value="submit" />
</form>