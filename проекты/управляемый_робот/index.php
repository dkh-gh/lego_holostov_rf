
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Проект - Управляемый робот</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Проект - Управляемый робот.</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Проекты</div></a>
	 	 	 	<a href="#"><div class="waySlot">Управляемый робот</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<div class="pageHeader">Управляемый робот. [24.10.16 21:01]</div>
				<div class="pageText">
					<!--<a href="../../инструкции/управляемый_робот"><div class="isSheme"></div></a>-->
					Двухколёсный робот, который имея один мотор, может ехать по прямой или поворачивать.<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/if4mU5gzqUg" frameborder="0" allowfullscreen></iframe>
					<br><br>Далее, добавив к этому роботу датчик расстояния, получаем робота, который ездит по комнате и не врезается.<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/vyI7Au0ufUU" frameborder="0" allowfullscreen></iframe>
					<br><br>Теперь, сделав крепление для ручки, получаем робота-чертёжника. Здесь он рисует кружочек:<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/K3fRxEWvL8A" frameborder="0" allowfullscreen></iframe>
					<br><br>А здесь он рисует треугольник:<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/m-yeZ-jB2oE" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			
			<? $comPage = 'pr4'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
