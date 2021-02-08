
document.cookie = "code="+localStorage.getItem('code');

function authConfirm() {
	localStorage.setItem('code', document.getElementById('authKey').value);
	document.cookie = "code="+document.getElementById('authKey').value;
	window.location.reload();
	//if(localStorage.getItem('code') == null) {}
}

function authUnconfirm() {
	localStorage.setItem('code', null);
	document.cookie = "code=null";
	window.location.reload();
}
