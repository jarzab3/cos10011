/**
 * Created by adam on 3/27/17.
 */


/* Filename: lect5_html_io.js
   Purpose : demonstrate javascript alerts
   Target html: lect5_html_io.htm
   Author: Adam Jarzebak
   Date written: 27/03/2017
   Revisions:
*/


function promptName()
{
  	var sName = prompt("Enter your name.\nThis prompt should show up when " +
        "the \nClick Me button is clicked.", "Your name");

	alert("Hi there " + sName + ". Alert boxes are a quick way to check the \nstate of your variables when you are developing code.");

	outputMessage = document.getElementById("mymessage");
	outputMessage.textContent="Your output: " + sName;
}

function byTag()
{
  	var text = "Hi this is get element by Tag";

	// outputMessage = document.getElementsByTagName("h3");
	outputMessage = document.getElementById("msg2");
    outputMessage.textContent= text;
}

function init() {
	var clickme = document.getElementById("clickme");
	clickme.onclick = promptName;

    var click2 = document.getElementsByTagName("h3");
	click2[0].onclick = byTag;

	}

	function rewriteParagraph(userName){}

window.onload = init;

