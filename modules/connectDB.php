
<?php
	
	$connect = mysql_connect('XXX', 'XXX', 'XXX');
	if(!$connect) echo '<br>< Ошибка соединения с базой данных ><br>';
	
	mysql_select_db('XXX', $connect);
	
	mysql_set_charset('utf8');
	
?>
