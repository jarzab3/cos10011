/**
 * Author: Adam Jarzebak
 * Target: confirm.html
 * Purpose: Load data from session storage and submit to server
 * Created: 01/04/2017
 * Last updated: 01/04/2017
 */
"use strict";
/*get variables from form and check rules*/

//This should be really be calculated securely on the server! 
function calcCost(trips, partySize){
    var cost = 0;
    if (trips.search("1day") != -1) cost = 200;
    if (trips.search("4day")!= -1) cost += 1500;
    if (trips.search("10day")!= -1) cost += 3000;
    return cost * partySize;
}

function getBooking(){
    var cost = 0;
    if(sessionStorage.firstname != undefined){    //if sessionStorage for username is not empty
        //confirmation text
        document.getElementById("confirm_name").textContent = sessionStorage.firstname + " " + sessionStorage.lastname;
        document.getElementById("confirm_age").textContent =sessionStorage.age;
        document.getElementById("confirm_trip").textContent = sessionStorage.trip;
        document.getElementById("confirm_species").textContent = sessionStorage.species;
        document.getElementById("confirm_food").textContent =sessionStorage.food;
        document.getElementById("confirm_partySize").textContent = sessionStorage.partySize;
        cost = calcCost(sessionStorage.trip, sessionStorage.partySize);
        document.getElementById("confirm_cost").textContent = cost;

        document.getElementById("firstname").value = sessionStorage.firstname;
		/*
		 Write lastname, age, species, age, food, and partySize from seesionStorage to the hidden inputs
		 */
        document.getElementById("cost").value = cost;
    }

}

function validate() {

    // alert("FIRST WORKNG");
    var errorMsg = '';
    var result = true;
    var firsname = document.getElementById('firstname').value;

    if (!firsname.match(/^[a-zA-Z]+$/)) {
        errorMsg = errorMsg + "Your first name must contain only alpha characters\n"
        result = false;
    }

    if (isNaN(age)) {
        errorMsg = errorMsg + "Your age must be a number\n";
        result = false;
    }
    else if (age < 18) {
        errorMsg = errorMsg + "Your age must be 18 or older\n";
        result = false;

    }
    else if (age > 1000) {
        errorMsg = errorMsg + "You cannot be so old, can you?\n";
        result = false;

    }

    alert(errorMsg);

    if (errorMsg != '') {
        alert(errorMsg);
    }


    return result;

    // alert("FIRST WORKNG");
//
//
//     window.console.log("The file opened successfully");
// }

}

function init () {

    var regForm = document.getElementById("reggform");

    regForm.onsubmit = validate;

    // document.getElementById("reggform").onsubmit = validate;

	// document.getElementById("reggform").onsubmit = onSubmit();

}

window.onload = init;

