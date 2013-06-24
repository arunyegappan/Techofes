<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<?php
include("header.php");
?>
<link rel="stylesheet" href="css/main.css" type="text/css" />
<style type="text/css" media="all">
	@import "wig/css/info.css";
	@import "wig/css/main.css";
	@import "wig/css/widgEditor.css";
</style>

<script type="text/javascript" src="wig/scripts/widgEditor.js"></script>

</head>
<body>

<div class="container">

  <div class="content">
    <?php
	$user = "gamindrome";
	$fname = $user . "/home.txt";
	if(isset($_POST['update'])) {
		echo "HI";
		update();
		die();
	}
	else {
		echo '  	<form action="?update" method="post">
			<fieldset>
				<label for="noise">
					The contents of the file...
				</label>
				<textarea id="noise" name="txt" class="widgEditor nothing" >';
               
					$handle = fopen( $fname , "r");
					$txt = fread($handle,filesize($fname));
					echo $txt;
				
            echo '    </textarea>
			</fieldset>
			<fieldset class="submit">
				<input name="update" type="submit" value="Update" />
			</fieldset>
		</form>';
	}
	function update() {
		$user = "gamindrome";
		$fname = $user . "/home.txt";
		$txt=$_POST["txt"];
		echo "$txt";
		$handle=fopen($fname,"w+");
		fwrite($handle,$txt);
		echo'
		<script>
		location.href("rules.php");
		</script>
		';

	}
		?>
  <div class="footer">
    <p>Footer</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>