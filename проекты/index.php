
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Проекты</title>
		
		<link rel="stylesheet" href="../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Проекты</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="#"><div class="waySlot">Проекты</div></a>
	 	 	</div>
	 	 	
			<a href="робот_домино">
				<div class="projectSlot" style="background-image: url(робот_домино/prev.png)">
					<div class="projectSlotHeader">Робот расставляющий домино</div>
					<div class="projectSlotText">Робот, в который везёт с собой костяшки домино и расставляет их вертикально на расстоянии пары сантиметров.</div>
				</div>
			</a>
			
			<a href="шагающий_робот">
				<div class="projectSlot" style="background-image: url(шагающий_робот/prev.png)">
					<div class="projectSlotHeader">Шагающий робот</div>
					<div class="projectSlotText">На роботов на колёсах все уже насмотрелись. Теперь давайте взглянем на четвероногого робота...</div>
				</div>
			</a>
			
			<a href="лазающий_робот">
				<div class="projectSlot" style="background-image: url(лазающий_робот/prev.png)">
					<div class="projectSlotHeader">Лазающий робот</div>
					<div class="projectSlotText">Робот, лазающий по ножкам стульев, столов, палкам и т. д...</div>
				</div>
			</a>
			
			<a href="управляемый_робот">
				<div class="projectSlot" style="background-image: url(управляемый_робот/prev.png)">
					<div class="projectSlotHeader">Управляемый робот</div>
					<div class="projectSlotText">Двухколёсный робот, который имея один мотор, может ехать по прямой или поворачивать.</div>
				</div>
			</a>
			
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
