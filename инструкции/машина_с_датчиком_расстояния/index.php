
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Инструкция - Машина с датчиком расстояния</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Инструкция - Машина с датчиком расстояния</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Инструкции</div></a>
	 	 	 	<a href="#"><div class="waySlot">Машина с датчиком расстояния</div></a>
	 	 	</div>
	 	 	
			<div class="scheme">
				<div class="schemeImage" id="imgHolder">
					<div class="schemeImg" style="background-image: url(0.png)"></div>
					<div class="schemeImg" style="background-image: url(1.png)"></div>
				</div>
				<div class="schemePrev" id="prevImg"></div>
				<div class="schemeText" id="imgNum">. . .</div>
				<div class="schemeNext" id="nextImg"></div>
			</div>
			
			<? $comPage = 'sh0'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script> shemeCount = 1; </script>
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	<script src="../../scheme.js"></script>
	
</html>
