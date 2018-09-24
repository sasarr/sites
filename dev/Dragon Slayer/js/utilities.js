'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* *********************************** FONCTIONS UTILITAIRES *********************************** */
/*************************************************************************************************/


function aleatoire(min,max){
	return(Math.floor((max-min)*Math.random())+min);
}








function choix(message, min, max){
	
	var difficult;
	do{
		difficult= parseInt(window.prompt(message));
		
	}while( isNaN(difficult) || difficult< min || difficult > max);

	return difficult
}







function image(url){
	document.write('<img src="'+url+'"/>');

}






/*image('images/dragon.jpg');*/