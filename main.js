
window.addEventListener("load", function() {
	
	resized();
	
}, false);

window.addEventListener("resize", function() {
	
	resized();
	
}, false);

function resized() {
	
	 document.documentElement.style.minHeight = document.documentElement.clientHeight+"px";
	
}
