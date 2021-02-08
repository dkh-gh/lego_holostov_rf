
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Инструкции</title>
		
		<link rel="stylesheet" href="../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Инструкции</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="#"><div class="waySlot">Инструкции</div></a>
	 	 	</div>
	 	 	
			<a href="кран">
				<div class="projectSlot" style="background-image: url(кран/p1.png)">
					<div class="projectSlotHeader">Кран</div>
					<div class="projectSlotText">22 декабря 2016 года был разработан новый проект - Кран. Создающийся из компонентов одного набора, кран может крутиться вокруг своей оси в нужную сторону и поднимать и опускать груз, имея всего один мотор!</div>
				</div>
			</a>
			
			<a href="мусоровоз">
				<div class="projectSlot" style="background-image: url(мусоровоз/p0.png)">
					<div class="projectSlotHeader">Мусоровоз WD2</div>
					<div class="projectSlotText">Мусоровоз, сделанный по инструкции Lego WeDo 2.0.</div>
				</div>
			</a>
			
			<a href="вертолёт">
				<div class="projectSlot" style="background-image: url(вертолёт/p0.png)">
					<div class="projectSlotHeader">Вертолёт WD2</div>
					<div class="projectSlotText">Вертолёт, сделанный по инструкции Lego WeDo 2.0.</div>
				</div>
			</a>
			
			<a href="машина_с_датчиком_расстояния">
				<div class="projectSlot" style="background-image: url(машина_с_датчиком_расстояния/p0.png)">
					<div class="projectSlotHeader">Машина с датчиком расстояния</div>
					<div class="projectSlotText">Простая машина, движущаяся вперёд-назад с датчиком расстояния.</div>
				</div>
			</a>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
