
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Проект - Шагающий робот</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Проект - Шагающий робот.</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="../"><div class="waySlot">Проекты</div></a>
	 	 	 	<a href="#"><div class="waySlot">Шагающий робот</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<div class="pageHeader">Шагающий робот. [25.10.16 14:15]</div>
				<div class="pageText">
					На роботов на колёсах все уже насмотрелись. Теперь давайте взглянем на четвероногого робота. Меняя точки крепления ног скорость работы мотора, можно получать разные способы ходьбы: рысью, галопом, шагом...
					<div class="imgBlock" style="background-image: url(p0.jpg)"></div>
					<div class="imgBlock" style="background-image: url(p1.jpg)"></div>
					<div class="imgBlock" style="background-image: url(p2.jpg)"></div>
					Так же робот притерпел несколько компановок и для изменения положения центра тяжести, и для изменения положения агрегатов. Была даже компановка с контроллером снизу:
					<div class="imgBlock" style="background-image: url(p3.jpg)"></div>
					<div class="imgBlock" style="background-image: url(p4.jpg)"></div>
					В итоге, самая удачная и компактная компановка агрегатов и ходовой, и робот пощёл уверенно даже по дивану, хотя нагрузка на мотор очень велика, из-за чего при малейшем трении, раньше, робот просто замирал, рассыпался или ломался :)<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/hF8dFkaeiLY" frameborder="0" allowfullscreen></iframe>
					<br><br>Немогу не выложить это видео:<br><br>
					<iframe width="760" height="400" src="https://www.youtube.com/embed/F4RuezNHNf0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			
			<? $comPage = 'pr6'; include $pre.'modules/coments.php' ?>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
