
<?php
	
	include '../modules/connectDB.php';
	$result = mysql_query("SELECT * FROM coments");
	$count = mysql_num_rows($result);
	
	$result = mysql_query("INSERT INTO coments (`id`, `code`, `time`, `date`, `text`, `display`, `page`)	VALUES ('".$count."', '".$_GET['u']."', '".date('H:i:s')."', '".date('Y-m-d')."', '".$_GET['c']."', 'true', '".$_GET['p']."')") or die(mysql_error());
	
	echo 'ok';
	
?>
