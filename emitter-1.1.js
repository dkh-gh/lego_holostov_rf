
// Кодировка (Charset): utf-8;
// Emitter.js - Версия (Version) 1.1;
// Автор: Дмитрий Холостов (Autor: Dmitry Kholostov);
// Сайт (Site): http://холостов.рф/ (http://xn--b1aribarht.xn--p1ai/)

var Emitter = new Object();

Emitter.picture = new Array();
Emitter.object = new Array();
Emitter.counter = new Array();
Emitter.xPose = new Array();
Emitter.yPose = new Array();
Emitter.objAction = new Array();
Emitter.randomX = new Array();
Emitter.randomY = new Array();

// Редактируемые значения:
Emitter.delay = 300; // Задержка перед добавлением следующего объекта.
Emitter.parts = 200; // Число создаваемых объектов.
Emitter.x = 0; // Движение по-горизонтали.
Emitter.y = 2; // Движение по-вертикали.
Emitter.random = 7; // Случайное движение объекта.
Emitter.class = "emitPic"; // Класс CSS, применяемый к каждому объекту.
Emitter.picture[0] = "image0.png"; // Изображения частиц (Вставляются по-очереди, после последнего вставляется первое).
Emitter.picture[1] = "image1.gif";


// Не редактируемые значения:
for(Emitter.counter[2]=0; Emitter.counter[2]<Emitter.parts; Emitter.counter[2]++) {
	Emitter.objAction[Emitter.counter[2]] = false;
	Emitter.randomX[Emitter.counter[2]] = Emitter.random / 2;
	Emitter.randomY[Emitter.counter[2]] = Emitter.random / 2;
}
Emitter.addSide = "unknown";
Emitter.counter[0] = 0;
Emitter.counter[1] = 0;
Emitter.counter[2] = 0;
Emitter.counter[3] = 0;
Emitter.counter[4] = 0;


Emitter.start = function()
{
	
	Emitter.plusX = Emitter.x;
	Emitter.plusY = Emitter.y;
	
	if(Emitter.x < 0) Emitter.plusX = Emitter.x*(-1);
	if(Emitter.y < 0) Emitter.plusY = Emitter.y*(-1);
	
	if(Emitter.plusX < Emitter.plusY) {
		if(Emitter.y < 0) {
			Emitter.addSide = "bottom";
			Emitter.y = Emitter.y * (-1);
		}
		else Emitter.addSide = "top";
	}
	
	if(Emitter.plusX > Emitter.plusY) {
		if(Emitter.x < 0) {
			Emitter.addSide = "right";
			Emitter.x = Emitter.x * (-1);
		}
		else Emitter.addSide = "left";
	}
	
	if(Emitter.plusX == Emitter.plusY) {
		if(Emitter.y < 0) {
			Emitter.addSide = "bottom";
			Emitter.y = Emitter.y * (-1);
		}
		else Emitter.addSide = "top";
	}
	
	if((Emitter.x == Emitter.y) && Emitter.x == 0) {
		Emitter.addSide = "center";
	}
	
	Emitter.addObj();
	
	window.setInterval(function() { Emitter.animation() }, 25);
	
}


Emitter.addObj = function()
{
	
	if(Emitter.counter[0]< Emitter.parts) {
		
		var object = document.createElement('img');
		object.src = Emitter.picture[Emitter.counter[1]];
		object.className = Emitter.class;
		object.style.position = "fixed";
		if((Emitter.addSide == "top") || (Emitter.addSide == "bottom")) {
			Emitter.xPose[Emitter.counter[0]] = Math.round(Math.random() * (window.innerWidth - object.width));
			Emitter.yPose[Emitter.counter[0]] = object.height * (-1);
		}
		if((Emitter.addSide == "left") || (Emitter.addSide == "right")) {
			Emitter.xPose[Emitter.counter[0]] = object.width * (-1);
			Emitter.yPose[Emitter.counter[0]] = Math.round(Math.random() * (window.innerHeight - object.height));
		}
		
		if(Emitter.addSide == "left") {
			object.style.left = Emitter.xPose[Emitter.counter[0]];
			object.style.top = Emitter.yPose[Emitter.counter[0]];
		}
		if(Emitter.addSide == "right") {
			object.style.right = Emitter.xPose[Emitter.counter[0]];
			object.style.top = Emitter.yPose[Emitter.counter[0]];
		}
		if(Emitter.addSide == "top") {
			object.style.top = Emitter.yPose[Emitter.counter[0]];
			object.style.left = Emitter.xPose[Emitter.counter[0]];
		}
		if(Emitter.addSide == "bottom") {
			object.style.bottom = Emitter.yPose[Emitter.counter[0]];
			object.style.left = Emitter.xPose[Emitter.counter[0]];
		}
		
		object.id = "EmitObj" + Emitter.counter[0];
		document.body.appendChild(object);
		
		Emitter.object[Emitter.counter[0]] = object;
		Emitter.objAction[Emitter.counter[0]] = true;
		
		Emitter.counter[0]++;
		Emitter.counter[1]++;
		
		if(Emitter.counter[1] >= Emitter.picture.length) Emitter.counter[1] = 0;
		
		window.setTimeout(function() { Emitter.addObj() }, Emitter.delay);
		
	}
	
	else { /* Emitting addObj() finished */ }
	
}


Emitter.animation = function()
{
	
	for(Emitter.counter[2]=0; Emitter.counter[2]<Emitter.parts; Emitter.counter[2]++) {
		
		Emitter.counter[3] = (Math.random()*Emitter.random);
		Emitter.counter[4] = (Math.random()*Emitter.random);
		
		if(Emitter.objAction[Emitter.counter[2]]) {
			
			if(Emitter.randomX[Emitter.counter[2]] < Emitter.counter[3]) Emitter.randomX[Emitter.counter[2]] += 0.1;
			else Emitter.randomX[Emitter.counter[2]] += -0.1;
			if(Emitter.randomY[Emitter.counter[2]] < Emitter.counter[4]) Emitter.randomY[Emitter.counter[2]] += 0.1;
			else Emitter.randomY[Emitter.counter[2]] += -0.1;
			
			Emitter.xPose[Emitter.counter[2]] = Emitter.xPose[Emitter.counter[2]] + Emitter.x + Emitter.randomX[Emitter.counter[2]] - (Emitter.random / 2);
			Emitter.yPose[Emitter.counter[2]] = Emitter.yPose[Emitter.counter[2]] + Emitter.y + Emitter.randomY[Emitter.counter[2]] - (Emitter.random / 2);
			
			if(Emitter.addSide == "top") {
				if(Emitter.yPose[Emitter.counter[2]] > window.innerHeight) {
					Emitter.xPose[Emitter.counter[2]] = Math.round(Math.random() * (window.innerWidth - Emitter.object[Emitter.counter[2]].width));
					Emitter.yPose[Emitter.counter[2]] = Emitter.object[Emitter.counter[2]].height * (-1);
				}
				Emitter.object[Emitter.counter[2]].style.top = Emitter.yPose[Emitter.counter[2]] + "px";
				Emitter.object[Emitter.counter[2]].style.left = Emitter.xPose[Emitter.counter[2]] + "px";
			}
			if(Emitter.addSide == "bottom") {
				if(Emitter.yPose[Emitter.counter[2]] > window.innerHeight) {
					Emitter.xPose[Emitter.counter[2]] = Math.round(Math.random() * (window.innerWidth - Emitter.object[Emitter.counter[2]].width));
					Emitter.yPose[Emitter.counter[2]] = Emitter.object[Emitter.counter[2]].height * (-1);
				}
				Emitter.object[Emitter.counter[2]].style.bottom = Emitter.yPose[Emitter.counter[2]] + "px";
				Emitter.object[Emitter.counter[2]].style.left = Emitter.xPose[Emitter.counter[2]] + "px";
			}
			if(Emitter.addSide == "left") {
				if(Emitter.xPose[Emitter.counter[2]] > window.innerWidth) {
					Emitter.xPose[Emitter.counter[2]] = Emitter.object[Emitter.counter[2]].width * (-1);
					Emitter.yPose[Emitter.counter[2]] = Math.round(Math.random() * (window.innerHeight - Emitter.object[Emitter.counter[2]].height));
				}
				Emitter.object[Emitter.counter[2]].style.left = Emitter.xPose[Emitter.counter[2]] + "px";
				Emitter.object[Emitter.counter[2]].style.top = Emitter.yPose[Emitter.counter[2]] + "px";
			}
			if(Emitter.addSide == "right") {
				if(Emitter.xPose[Emitter.counter[2]] > window.innerWidth) {
					Emitter.xPose[Emitter.counter[2]] = Emitter.object[Emitter.counter[2]].width * (-1);
					Emitter.yPose[Emitter.counter[2]] = Math.round(Math.random() * (window.innerHeight - Emitter.object[Emitter.counter[2]].height));
				}
				Emitter.object[Emitter.counter[2]].style.right = Emitter.xPose[Emitter.counter[2]] + "px";
				Emitter.object[Emitter.counter[2]].style.top = Emitter.yPose[Emitter.counter[2]] + "px";
			}
			
		}
		
	}
	
}
