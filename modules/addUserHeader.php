
<?
	
	include $pre.'modules/connectDB.php';
	
	$user = mysql_fetch_array(mysql_query('select * from `users` where `id` = '.$uId));
	echo $user['name'].' - Страница пользователя';
	
	mysql_close($connect);
	
?>
