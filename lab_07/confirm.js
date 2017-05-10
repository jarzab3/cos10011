/**
 * Created by adam on 4/12/17.
 */

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
        document.getElementById("beard").textContent = sessionStorage.beard;

        // cost = calcCost(sessionStorage.trip, sessionStorage.partySize);
        document.getElementById("confirm_cost").textContent = cost;

        /*
         Write lastname, age, species, age, food, and partySize from seesionStorage to the hidden inputs
         */

        // document.getElementById("cost").value = cost;

    }
}

function prefill_form() {
    if(sessionStorage.firstname != undefined){
        document.getElementById("firstname").value = sessionStorage.firstname;
        document.getElementById("lastname").value = sessionStorage.lastname;
        document.getElementById("age").value = sessionStorage.age;
        document.getElementById("trip").value = sessionStorage.trip;
        document.getElementById("species").value = sessionStorage.species;
        document.getElementById("partySize").value = sessionStorage.partySize;

    }
}

function cancelBooking(){

    window.location = "../../lab_07/Resources/register.html";

}


function init () {

    getBooking();

    document.getElementById("cancelButton").addEventListener("click", cancelBooking);

    prefill_form();

}

window.onload = init;