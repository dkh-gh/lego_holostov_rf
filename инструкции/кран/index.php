
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Инструкция - Кран</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Инструкция - Кран</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Инструкции</div></a>
	 	 	 	<a href="#"><div class="waySlot">Кран</div></a>
	 	 	</div>
	 	 	
			<div class="scheme">
				<div class="schemeImage" id="imgHolder">
					<div class="schemeImg" style="background-image: url(0.png)"></div>
					<div class="schemeImg" style="background-image: url(1.png)"></div>
					<div class="schemeImg" style="background-image: url(2.png)"></div>
					<div class="schemeImg" style="background-image: url(3.png)"></div>
					<div class="schemeImg" style="background-image: url(4.png)"></div>
					<div class="schemeImg" style="background-image: url(5.png)"></div>
					<div class="schemeImg" style="background-image: url(6.png)"></div>
					<div class="schemeImg" style="background-image: url(7.png)"></div>
					<div class="schemeImg" style="background-image: url(8.png)"></div>
					<div class="schemeImg" style="background-image: url(9.png)"></div>
					<div class="schemeImg" style="background-image: url(10.png)"></div>
					<div class="schemeImg" style="background-image: url(11.png)"></div>
					<div class="schemeImg" style="background-image: url(12.png)"></div>
					<div class="schemeImg" style="background-image: url(13.png)"></div>
					<div class="schemeImg" style="background-image: url(14.png)"></div>
					<div class="schemeImg" style="background-image: url(15.png)"></div>
					<div class="schemeImg" style="background-image: url(16.png)"></div>
					<div class="schemeImg" style="background-image: url(17.png)"></div>
					<div class="schemeImg" style="background-image: url(18.png)"></div>
					<div class="schemeImg" style="background-image: url(19.png)"></div>
				</div>
				<div class="schemePrev" id="prevImg"></div>
				<div class="schemeText" id="imgNum">. . .</div>
				<div class="schemeNext" id="nextImg"></div>
			</div>
			
			<? $comPage = 'sh3'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script> shemeCount = 19; </script>
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	<script src="../../scheme.js"></script>
	
</html>
