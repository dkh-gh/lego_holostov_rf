
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Инструкция - Вертолёт WD2</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Инструкция - Вертолёт WD2</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Инструкции</div></a>
	 	 	 	<a href="#"><div class="waySlot">Вертолёт WD2</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<iframe width="820" height="500" src="https://www.youtube.com/embed/8HMLEkbDSWU" frameborder="0" allowfullscreen></iframe>
			</div>
			
			<? $comPage = 'sh1'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script> shemeCount = 20; </script>
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	<script src="../../scheme.js"></script>
	
</html>
