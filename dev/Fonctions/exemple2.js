'use strict';

// Pour communiquer avec l'extérieur une fonction peut aussi avoir des arguments en entrée...
function sayHello(firstName, lastName)
{
    document.write('<p>Bonjour ' + firstName + ' ' + lastName + ' !</p>');
}



// (...)

// Appel de la fonction en indiquant autant de paramètres que la fonction possède.
sayHello('Marie', 'MAYERS');

// Nouvel appel de la fonction.
sayHello('Ailton', 'CHRISTIAN');


//exemple 3

function sayHello()
{
    return 'Bonjour à toutes et à tous !';
}

sayHello();

var phrase = sayHello();

console.log(phrase);


function multiplication(num1, num2) {
	var result = num1 * num2;
	return result;
}
var q = window.prompt('chiffre 1');
var l = window.prompt('chiffre 2');
var multi = multiplication(q, l);



