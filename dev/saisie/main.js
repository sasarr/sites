'use strict';

var number;
do{
	number= window.prompt("Veuillez taper un nombre :");
	
}while( isNaN(number) || number == '' );

console.log(number);