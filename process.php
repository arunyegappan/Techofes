<?php
session_start();

if($_GET['str'])
{
$theme=$_GET['str'];

 $path=$_GET['path'];
 
$_SESSION['theme']=$theme;

header("location:$path");
}

else
{
echo "fuck you";
}
?>