
<!DOCTYPE html>

<html>
	
	<head>
		
		<? $pre = '../../' ?>
		
		<link rel="icon" href="http://xn--c1adro.xn--b1aribarht.xn--p1ai/favicon.ico" type="image/x-icon">
		
		<meta charset="utf-8">
		
		<title>Нововведения - 1</title>
		
		<link rel="stylesheet" href="../../main.css">
		
	</head>
	
	<body>
		
		<div class="page">
			
			<div class="header">
				<h1>Нововведение 1</h1>
			</div>
			
			<? include $pre.'modules/menu.php' ?>
			<? include $pre.'modules/auth.php' ?>
			<? include $pre.'modules/fol.php' ?>
			
	 	 	<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<div class="waySlot">Нововведения</div>
	 	 	 	<a href="#"><div class="waySlot">1</div></a>
	 	 	</div>
	 	 	
			<div class="pageBlock">
				<div class="pageHeader">Нововведение 1, или первый отчёт по сайту. [24.10.16 12:34]</div>
				<div class="pageText">
					- Главная страница:<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Содержит ссылки на последние изменения на сайте.<br>
					- Раздел ,,Проекты,,:<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Содержит планируемые, создаваемые или уже созданные проекты, некоторые из которых имеют инструкции к сборке.<br>
					- Раздел ,,Инструкции,,:<br>
					&nbsp;&nbsp;&nbsp;&nbsp;Сожержит уже созданные и проверенные схемы-инструкции по сборке.
					
				</div>
			</div>
			
		</div>
		
	</body>
	
	<script src="<? echo $pre ?>main.js"></script>
	<script src="<? echo $pre ?>auth.js"></script>
	
</html>
