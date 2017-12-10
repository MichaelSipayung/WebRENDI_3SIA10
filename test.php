<?php
$user ='root';
$pass = '';
$db='dbmrksia10';
$db  =new  mysqli('localhost',$user,$pass,$db       )  or die("Unable to Connect");
echo 'Hi Sucess Login';
?>