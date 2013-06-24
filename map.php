<?php
session_start();
if(!$_SESSION['theme'])
{
$_SESSION['theme']="first";
}
if(!$_SESSION['click'])
{
$_SESSION['click']="no";
}
?>

<html>
<title>Techofes'13</title>

<head>

<?php
include("script.txt");

if($_SESSION['theme']=="first")
{
include("head1.txt");
}

if($_SESSION['theme']=="second")
{
include("head2.txt");
}

if($_SESSION['theme']=="third")
{
include("head3.txt");
}

if($_SESSION['theme']=="fourth")
{
include("head4.txt");
}

if($_SESSION['theme']=="fifth")
{
include("head5.txt");
}


?>


</head>

<body oncontextmenu="return false;">

<?php

if(!($_GET['click']))
{
include("top.txt");
echo'
<div id="content">';

}

include("map.txt");

if(!($_GET['click']))
{
include("side.txt");
echo '
</div>
<!-- content ends-->';

include("footer.txt");
}
?>
</div>

<!-- Whole ends--> 
</body>


</html>