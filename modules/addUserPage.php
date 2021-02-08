
<?
	
	include $pre.'modules/connectDB.php';
	$user = mysql_fetch_array(mysql_query('select * from `users` where `id` = '.$uId));
	mysql_close($connect);
	
?>
			<div class="header" style="background-image: url(<? echo $pre.'img/users/'.$user['img'] ?>)">
				<h1> <? echo $user['name'].'' ?> </h1>
			</div>
			<div class="userInfoLine">
				<div class="likesLine"><? echo $user['like'] ?></div>
				<div class="placeNameLine"><? echo $user['placeName'] ?></div>
			</div>
<?
	
	include $pre.'modules/menu.php';
	
?>
			<div class="way">
	 	 	 	<a href="/"><div class="waySlotHome"></div></a>
	 	 	 	<a href="<? if($user['place'] != '') echo '../' ?>index.php"><div class="waySlot">Участники</div></a><?
				if($user['place'] != '') echo '<div class="waySlot">'.$user['placeName'].'</div>';
				?>
	 	 	 	<a href="#"><div class="waySlot"><? echo $user['name'] ?></div></a>
	 	 	</div>
