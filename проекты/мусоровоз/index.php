
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Проект - Мусоровоз WD2</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Проект - Мусоровоз WD2.</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Проекты</div></a>
	 	 	 	<a href="#"><div class="waySlot">Мусоровоз WD2</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<div class="pageHeader">Мусоровоз WD2. [24.10.16 13:42]</div>
				<div class="pageText">
					<a href="../../инструкции/мусоровоз"><div class="isSheme"></div></a>
					<div class="imgBlock" style="background-image: url(p0.png)"></div>
					Мусоровоз, сделанный по инструкции Lego WeDo 2.0.
					<div class="imgBlock" style="background-image: url(p1.png)"></div>
				</div>
			</div>
			
			<? $comPage = 'pr2'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
