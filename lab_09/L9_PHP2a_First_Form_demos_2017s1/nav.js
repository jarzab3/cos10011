/* JavaScript for Lecture 9 include demo */

function init(){
var mynav=document.getElementsByTagName("NAV")[0];
var mynavitems=mynav.getElementsByTagName("A");
	for  (var i=0; i < mynavitems.length; i++){
		if (window.location.href===mynavitems[i].href) {
	    mynavitems[i].className="active";
		}
	}
}
window.onload = init;