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



function storeBooking(firstname, lastname, age, is1day, is4day, is10day) {

    sessionStorage.firstname = firstname;
    sessionStorage.lastname = lastname;
    sessionStorage.confirm_age = age;

    localStorage.setItem("lastname", "Smith");

        var trip = "";
        if(is1day){trip =+ ' is 1 day';}
        if(is4day){trip =+ ' is 4 day';}
        if(is10day){trip =+ ' is 10 day';}

    alert("Data saved");
}

function validate() {

    var errorMsg = '';
    var result = true;
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var age = document.getElementById('age').value;
    var beard_size = document.getElementById('beard').value;

    var species_choices;

    species_choices = {
        1: "Human",
        2: "Dwarf",
        3: "Hobbit",
        4: "Elf"
    };

    var is1day = document.getElementById("1day").checked;
    var is4day = document.getElementById("4day").checked;
    var is10day = document.getElementById("10day").checked;


    if (!firstname.match(/^[a-zA-Z]+$/)) {
        errorMsg = errorMsg + "Your first name must contain only alpha characters\n";
        result = false;
    }

    if (!lastname.match(/^[a-zA-Z]+$/)) {
        errorMsg = errorMsg + "Your lastname name must contain only alpha characters\n";
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

    else {
        var tempMsg = checkSpeciesAge(age, species_choices);
        if (tempMsg != ""){
            errorMsg = errorMsg + tempMsg;
            result = false;
        }
    }

    if(document.getElementById("food").nodeValue == "none"){
        errorMsg = errorMsg + "You must select a food preference";
        result = false;
    }

    if (!(is1day || is4day || is10day)){
        errorMsg += "Please select at least one trip.\n";
        result = false;
    }

    if (result == true){
        result = validateSpecies(species_choices, age, beard_size);
    }

    if (errorMsg != '') {
        alert(errorMsg);
    }

    if (result){

        storeBooking(firstname, lastname, age, species_choices, is1day, is4day, is10day )
    }

    return result;
}


function getSpecies(){

    var speciesName = "Unknown";

    var speciesArray = document.getElementById("species").getElementsByTagName("input");

    for (var i = 0; i < speciesArray.length; i++){
        if (speciesArray[i].checked)
            speciesName = speciesArray[i].value;
    }

    return speciesName;

}

function checkSpeciesAge(age, species_choices){

    var errMsg = '';
    var species = getSpecies();

    switch(species){
        case species_choices[1]:
            if (age > 120){
                errMsg = "You cannot be a Human and over 120.\n";
            }
            break;

        case species_choices[2]:
        case species_choices[3]:
            if (age > 150){
                errMsg = "You cannot be a" + species + " and over 150.\n";
            }
            break;

        case species_choices[4]:
            break;

        default:
            errMsg = "We don't allow your kind on our tours.\n";
    }
    return errMsg;
}

//This function checks the values only for species
function validateSpecies(species_choices, age, beard_size){

    var result = true;
    var specie = getSpecies();
    var errorMsg = "";

    if (specie == species_choices[1]) {
        //This if statment is for Human specie, if required!
    }

    else if (specie == species_choices[2]){
        if (age < 30){
            errorMsg = "Dwarfs must be over 30 years old";
            result = false;
        }

        else if (beard_size < 12){
            errorMsg = "Dwarfs must have a beard longer than 12 inches";
            result = false;
        }
    }

    else if (specie == species_choices[3] || species_choices[4])
    {
        if (beard_size != 0){
            errorMsg = "Elves and Hobbits cannot have beards";
            result = false;
        }
    }

    if (errorMsg != '') {
        alert(errorMsg);
    }

    return result;
}

function init () {

    var regForm = document.getElementById("reggform");
    regForm.onsubmit = validate;

    // var cForm = document.getElementById("bookform");
    // getBooking();
}

window.onload = init;
