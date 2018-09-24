"use strict";


var a = parseFloat(window.prompt("Saisissez un premier nombre"));
var b= parseFloat(window.prompt("Saisissez un second nombre"));

if (isNaN(a) || isNaN( b)){
	console.log(erreur)
}
var operation = (window.prompt("Quel type d'operation voulez vous?"))



if( operation == "addition" || operation == "+"){
     operation = parseFloat( a + b);
     console.log(operation);
}else if(operation == "soustraction" || operation == "-"){
	operation = parseFloat(a-b);
	console.log(operation);
}else if ( operation == "multiplication" || operation == "*"){
	operation = parseFloat( a*b);
	console.log(operation);
}else if( operation == "division" || operation == "/"){
	operation = parseFloat(a/b);
	console.log(operation);
	if (a == 0 || b == 0){
		console.log("Ce n'est pas possible de faire cette division");
	}
}
else if(operation == "puissance" || operation == "^"){
	operation = Math.pow(a,b);
	console.log(operation)
}else{
	console.log("operation non reconnue")
}