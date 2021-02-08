
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Авторизация</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Авторизация</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Участники</div></a>
	 	 	 	<a href="#"><div class="waySlot">Авторизация</div></a>
	 	 	</div>
			
	 	 	<div class="pageBlock">
				<div class="pageHeader">Авторизация</div>
				<div class="pageText">
					<? 
						//if($_GET['su'] == true) {
							//echo '<hr>[code=\''.$_COOKIE['code'].'\']';
							
							if($_COOKIE['code'] == 'null' || $_COOKIE['code'] == '') {
								echo '
					<script src="../../auth0.js"></script>
					Ты не авторизован. Введи свой код:
					<input type="text" id="authKey" placeholder="Введи код сюда">
					<input type="button" id="authKeyConfirm" value="Авторизоваться">
								';
							}
							else {
								include $pre.'modules/connectDB.php';
								$user = mysql_fetch_array(mysql_query("select * from `users` where `code` = '".mysql_real_escape_string($_COOKIE['code'])."'"));
								mysql_close($connect);
								if($user['name'] == '') echo '<script> document.addEventListener(\'DOMContentLoaded\', function() { authUnconfirm() }, false) </script>';
								echo '
					<script src="../../auth1.js"></script>
					Авторизован как <b>'.$user['name'].'</b>.
					<input type="button" id="authKeyUnconfirm" value="Отвязать устройство">
								';
							}
						//}
					?>
				</div>
			</div>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
