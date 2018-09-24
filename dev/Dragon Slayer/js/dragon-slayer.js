'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* **************************************** DONNEES JEU **************************************** */
/*************************************************************************************************/

var game = {
	difficulte: 0, 
	pvjoueur:0,
	pvdragon: 0,
	arme: 0,
	armure:0
}


function initializeGame(){
game.difficulte = choix("1.Facile 2.Moyen 3.Difficile", 1, 3);
		if (game.difficulte == 1){
			game.pvjoueur = aleatoire(200,250);
			game.pvdragon = aleatoire(150,200);

		}else if ( game.difficulte == 2){
			game.pvjoueur = aleatoire(200,250);
			game.pvdragon = aleatoire(200,250);
		}else{
			game.pvjoueur = aleatoire(150,200);
			game.pvdragon = aleatoire(200,250);
		}


game.arme = choix(" 1.bois 2.fer 3.excalibure",1,3);
		if(game.arme == 1){
			game.armeRatio= 0.5;
		}else if(game.arme == 2){
			game.armeRatio = 1;
		}else{
			game.armeRatio = 2
		}

game.armure = choix(" 1.cuivre 2.fer 3.magic",1,3);
		if(game.armure == 1){
			game.armureRatio = 1;
		}else if(game.armure == 2){
			game.armureRatio = 1.25;
		}else{
			game.armureRatio = 2
		}

}

function damageDragon(){

		if (game.difficulte == 1){
			game.damageDragon = aleatoire(10,20)/game.armureRatio;
		}else if ( game.difficulte == 2 || game.difficulte == 3){
			game.damageDragon = aleatoire(30,40)/game.armureRatio;
		} return(game.damageDragon);
}

function damagePlayer(){

		if (game.difficulte == 1){
			game.damagePlayer = aleatoire(25,30)*game.armeRatio;
		}else if ( game.difficulte == 2 ){
			game.damagePlayer = aleatoire(15,20)*game.armeRatio;
		}else{
			game.damagePlayer=aleatoire(5,10)*game.armeRatio;
		}
			return(game.damagePlayer);
}


function gameloop(){
	
	do{
		var speeddragon = aleatoire(10,20);
	 	var speedplayer = aleatoire(10,20);

	if (speeddragon > speedplayer || speeddragon == speedplayer){
		damageDragon();
		game.pvjoueur= game.pvjoueur - game.damageDragon;
	} else{
		damagePlayer();
		game.pvdragon = game.pvdragon - game.damagePlayer;
	}
	console.log(game.pvjoueur);
	console.log(game.pvdragon);	
}while( game.pvjoueur > 0 && game.pvdragon > 0 );
console.log(game.pvjoueur);
console.log(game.pvdragon);
}

function showwinner(){
	if (game.pvjoueur>0){
		image("images/knight.jpg")
	}
	else{
		image("images/dragon.jpg")
	}
}
/*************************************************************************************************/
/* *************************************** FONCTIONS JEU *************************************** */
/*************************************************************************************************/




/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/


