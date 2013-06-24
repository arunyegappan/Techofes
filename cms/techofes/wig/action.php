<?php

$txt=$_POST["txt"];

echo "$txt";

$handle=fopen("read.txt","w+");

fwrite($handle,$txt);


?>