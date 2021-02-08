
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Участники</title>
		
		<link rel="stylesheet" href="<? echo $pre ?>main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Участники</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="#"><div class="waySlot">Участники</div></a>
	 	 	</div>
			
	 	 	<div class="pageBlock">
				<div class="pageHeader">
					Участники проекта
					<a href="авторизация"><div class="authLink"></div></a>
				</div>
				<div class="pageText">
					Пока что страница участников в разработке.
					
					<a href="учитель.php">
						<div class="user uAdmin">
							Дмитрий Холостов
							<div class="userListFrom">Учитель</div>
						</div>
					</a>
					
				</div>
			</div>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
