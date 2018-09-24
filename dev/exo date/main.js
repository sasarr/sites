"use strict";

var jours = [
"Lundi",
"Mardi",
"Mercredi",
"Jeudi",
"Vendredi",
"Samedi",
"Dimache"
];

var moiss =  [
"Janvier",
"Février",
"Mars",
"Avril",
"Mai",
"Juin",
"Juillet",
"Août",
"Septembre",
"Octobre",
"Novembre",
"Decembre"
];

var dat = new Date();

var jour = date.getDay();
var mois = date.getMonth();
var annee = date.getYears();
var heure = date.getHours();
var minute = date.getMinutes();

var datetoday = jour+mois+annee+heure+minute;
console.log(datetoday)



