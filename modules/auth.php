
<?php
	
	if($_COOKIE['code'] != 'null' && $_COOKIE['code'] != '') {
		include $pre.'modules/connectDB.php';
		$user = mysql_fetch_array(mysql_query("select * from `users` where `code` = '".mysql_real_escape_string($_COOKIE['code'])."'"));
		mysql_close($connect);
		if($user['name'] == '') echo '<script> document.addEventListener(\'DOMContentLoaded\', function() { authUnconfirm() }, false) </script>';
		
		if($user['place'] != '') $way2user = $user['place'].'/';
		$way2user .= $user['link'];
		$way2user = '/участники/'.$way2user;
		echo '<div class="authHolder">
				<a href="'.$way2user.'.php"><div class="authUser" style="background-image: url('.$pre.'img/users/'.$user['img'].')">'.$user['name'].'</div>
			</div>';
		
	}
	
?>
