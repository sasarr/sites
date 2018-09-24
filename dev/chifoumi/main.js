"use strict";


var a = "pierre";
var b = "feuille";
var c = " ciseau";

var choix = window.prompt(" pierre, feuille ou ciseau?");

var ordi= Math.random();
if(ordi<= 0.33){
	ordi= "pierre";
}else if (ordi <= 0.66){
	ordi = "feuille";
}else{
	ordi= "ciseau";
}

if( choix == a ){

	if(ordi == "pierre"){
		console.log("égalité");}
		else if(ordi == "feuille"){
			console.log("la feuille gagne, la pierre perd");
		}else{
			console.log("la pierre gagne, le ciseau perd");
		}
}

if( choix == b){

	if(ordi == "feuille"){
		console.log("égalité");}
		else if(ordi == "pierre"){
		console.log("la feuille recouvre la pierre");
	}else{
		console.log("le ciseau gagne, la feuille perd");
	}
}

if( choix == c){
	if(ordi == "ciseau"){
		console.log("égalité");}
	else if(ordi == "pierre"){
		console.log("la pierre gagne, le ciseau perd");
	}else{
		console.log("le ciseau gagne, la feuille perd");
	}
}

if(choix != a && choix != b && choix!= c){
	console.log("erreur");
}
