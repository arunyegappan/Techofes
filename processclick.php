<?php
session_start();

if($_GET['str'])
{
$click=$_GET['str'];

 $path=$_GET['path'];
 
$_SESSION['click']=$click;

header("location:$path");
}

else
{
echo "fuck you";
}
?>