
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Чат</title>
		
		<link rel="stylesheet" href="<? echo $pre ?>main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Чат</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="#"><div class="waySlot">Чат</div></a>
	 	 	</div>
			
			<? $comPage = 'cht'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
