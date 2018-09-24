'use strict';

var liste=[];

function addproduit(a){
	liste.push(a);
}

addproduit('lait');
addproduit('fraise');

console.log(liste);






function suppproduit(b){
	liste.indexOf('b')
	liste.splice(b);

}

suppproduit('lait')
console.log(liste);
 /************CORRECTION************/


function displayShoppingList()
{
	console.log('La liste contient ' + shoppingList.length + ' produit(s).');
	console.log(shoppingList);
    
    
    document.write('La liste contient ' + shoppingList.length + ' produit(s).');
    document.write('<ul>');
    
    for (var i = 0; i < shoppingList.length; i++) {
    
    	document.write('<li>'+shoppingList[i]+'</li>');
        
    }
    
    document.write('</ul>');
}

addItem('Fraises');
addItem('Poulet');
addItem('Tournevis');
addItem('Artichaut');

displayShoppingList(); ---> AFFICHER LA LISTE 


/******************CORRECTION*****************************/

function removeAllItems()
{
	shoppingList = [];
    
    //shoppinglist.splice(0, shoppingList.length);
}


/********************CORRECTION***********************/
function removeItem(item)
{
	var index = shoppingList.indexOf(item); FAUT LA STOCKER DANS UNE VARIABLE INDEX POUR POUVOIR REUTILISER LA VALEUR  CAR indexOf A UN RETURN !
    
    if(index == -1)
	{
    	console.log("ERREUR : le produit " + item + " n'existe dans la liste de courses");
		
    } else {
    	shoppingList.splice(index, 1);
    }

}


addItem('Fraises');
addItem('Poulet');
addItem('Tournevis');
addItem('Artichaut');


removeItem('Poulet');
