"use strict";

alert('hello world');

var jours=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];

var jour= window.prompt("Entrez un chiffre entre 1 et 7");

jour=parseInt(jour);

console.log(jours[jour-1]);