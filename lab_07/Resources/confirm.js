/**
 * Created by adam on 4/12/17.
 */
function getBooking(){
    var cost = 0;
            alert("get here");

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
        alert("get here");
        document.getElementById("cost").value = cost;

        document.getElementById("result").innerHTML = localStorage.getItem("lastname");
    }
}



function init () {

    getBooking();
}

window.onload = init;