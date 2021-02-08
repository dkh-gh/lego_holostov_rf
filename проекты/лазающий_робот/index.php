
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Проект - Лазающий робот</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Проект - Лазающий робот.</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Проекты</div></a>
	 	 	 	<a href="#"><div class="waySlot">Лазающий робот</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<div class="pageHeader">Лазающий робот. [24.10.16 21:01]</div>
				<div class="pageText">
					<!--<a href="../../инструкции/управляемый_робот"><div class="isSheme"></div></a>-->
					<div class="imgBlock" style="background-image: url(p0.png)"></div>
					Идея лазающего по ножкам столов, стульев, палкам, балкам, и всему подобному, появилась давно, но сделал только сейчас.<br>
					И так, в чём суть? - Робот обхватывает палку колёсами с двух сторон и начинает по ней двигаться вверх или вниз, за счёт их вращения:<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/tLK1P3j1o0U" frameborder="0" allowfullscreen></iframe>
					<br><br>Далее, добавив к этому роботу датчик расстояния, получаем робота, который может увидеть пол и остановиться перед ним, или же увидеть верхний конец палки и остановиться перед ним.<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/wkBS4RT932Q" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			
			<? $comPage = 'pr5'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
