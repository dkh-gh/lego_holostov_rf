
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Проект - Кран</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Проект - Кран</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Проекты</div></a>
	 	 	 	<a href="#"><div class="waySlot">Кран</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<div class="pageHeader">Кран. [23.10.16 0:33]</div>
				<div class="pageText">
					<a href="../../инструкции/кран"><div class="isSheme"></div></a>
					22 декабря 2016 года был разработан новый проект - Кран.<br>Создающийся из компонентов одного набора, кран может крутиться вокруг своей оси в нужную сторону и поднимать и опускать груз, имея всего один мотор!
					<div class="imgBlock" style="background-image: url(p0.png)"></div>
					<div class="imgBlock" style="background-image: url(p1.png)"></div>
					Так как в каждом наборе всего один мотор, а выполняемых им функций оказалось две, было решено разработать раздаточную коробку, которая переключала мотор с оси вращения башни крана на катушку нитки и обратно.
					<div class="imgBlock" style="background-image: url(p3.png)"></div>
					<div class="imgBlock" style="background-image: url(p4.png)"></div>
					Переключение рычага с оси на катушку осуществляется руками. Если отпустить рычаг - резинка возвращает рычаг в положение вращения башни вокруг оси.
				</div>
			</div>
			
			<? $comPage = 'pr3'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
