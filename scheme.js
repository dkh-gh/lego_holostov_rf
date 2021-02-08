
window.addEventListener('load', function() {
	
	shemeChoise = 0;
	document.getElementById('imgNum').innerHTML = (shemeChoise+1)+"/"+(shemeCount+1);
	
	document.getElementById('prevImg').addEventListener('click', function() {
		shemeChoise--;
		if(shemeChoise < 0) shemeChoise = 0;
		document.getElementById('imgHolder').scrollTop = shemeChoise*481;
		document.getElementById('imgNum').innerHTML = (shemeChoise+1)+"/"+(shemeCount+1);
	}, false);
	
	document.getElementById('nextImg').addEventListener('click', function() {
		shemeChoise++;
		if(shemeChoise > shemeCount) shemeChoise = shemeCount;
		document.getElementById('imgHolder').scrollTop = shemeChoise*481;
		document.getElementById('imgNum').innerHTML = (shemeChoise+1)+"/"+(shemeCount+1);
	}, false);
	
}, false);