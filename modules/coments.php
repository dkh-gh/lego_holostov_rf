			<div class="comentsBlock">
				<div class="comentsHeader">Коментарии.</div>
				<div class="comentsText">
					<?php
						
						//if(($user['code'] == 'XXX') || ($user['like'] > 4)) {
						if($user['code'] == 'XXX') {
							echo '<input type="text" class="comentField" id="coment" placeholder="Твой коментарий"><input type="button" value="Отправить" id="sendComent" onclick="comentSend()">';
							echo '<script>
						function comentSend() {
							var xhr = new XMLHttpRequest();
							//alert(document.getElementById("coment").value);
							xhr.open("GET", "http://лего.холостов.рф/modules/addComent.php?c="+document.getElementById("coment").value+"&u='.$user['code'].'&p='.$comPage.'");
							xhr.send();
							document.getElementById("sendComent").value = "Отправка";
							window.setTimeout( function() { window.location.reload() }, 1000 );
						}
					</script>';
						}
						else echo 'Комментировать могут авторизованные пользователи.';
						
						echo '<hr>';
						include $pre.'modules/connectDB.php';
						$coments = mysql_query('select * from `coments` where `page` = "'.$comPage.'"');
						$aUsers = [];
						$aUsersImg = [];
						$aComents = [];
						while ($coment = mysql_fetch_array($coments)) {
							$user = mysql_fetch_array(mysql_query('select * from `users` where `code` = "'.$coment['code'].'"'));
							array_push($aUsers, $user['name']);
							array_push($aUsersImg, $user['img']);
							array_push($aComents, $coment['text']);
						}
						
						for($i = count($aUsers); $i > 0; $i--) {
							echo '<div><div class="authUser" style="background-image: url('.$pre.'img/users/'.$aUsersImg[$i-1].')">'.$aUsers[$i-1].'</div><div class="coment">'.$aComents[$i-1].'</div></div>';
						}
						
						mysql_close($connect);
						
					?>
				</div>
			</div>
