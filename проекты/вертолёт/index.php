
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Проект - Вертолёт WD2</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Проект - Вертолёт WD2.</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Проекты</div></a>
	 	 	 	<a href="#"><div class="waySlot">Вертолёт WD2</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<div class="pageHeader">Вертолёт WD2. [24.10.16 13:42]</div>
				<div class="pageText">
					<a href="../../инструкции/вертолёт"><div class="isSheme"></div></a>
					Это первый разработанный урок по сборке моделей из Lego WeDo.
					<div class="imgBlock" style="background-image: url(p0.png)"></div>
					Вертолёт, сделанный по инструкции Lego WeDo 2.0.
					<div class="imgBlock" style="background-image: url(p1.png)"></div>
				</div>
			</div>
			
			<? $comPage = 'pr1'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
