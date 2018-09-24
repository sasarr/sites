// dragon-slayer.js

var game = {};

function initializeGame()
{
	game.difficulty = requestInteger
    (
        'Niveau de difficulté ?\n' +
        '1. Facile - 2. Normal - 3. Difficile',
        1, 3
    );
    
    switch(game.difficulty)
    {
    	case 1: 
        game.hpDragon = getRandomInteger(150, 200);
        game.hpPlayer = getRandomInteger(200, 250);
        break;
    	
        case 2: 
        game.hpDragon = getRandomInteger(200, 250);
        game.hpPlayer = getRandomInteger(200, 250);
        break;
        
        case 3: 
        game.hpDragon = getRandomInteger(200, 250);
        game.hpPlayer = getRandomInteger(150, 200);
        break;
    }
    
game.armor = requestInteger
(
    'Armure ?\n' +
    '1. Cuivre - 2. Fer - 3. Magique',
    1, 3
);

var cuivre = 1;
var fer = 2;
var magique = 3;

switch(game.armor)
    {
     	case cuivre:
        game.armorRatio = 1;
        break;
        
        case fer:
        game.armorRatio = 1,25;
        break;
        
        case magique:
        game.armorRatio = 2;
        break;
    }
    
game.sword = requestInteger
    (
        'Epée ?\n' +
        '1. Bois - 2. Acier - 3. Excalibur',
        1, 3
    );

function gameLoop() {
    var damagePoint;
    var dragonSpeed;
    var playerSpeed;
    
    while(game.hpDragon > 0 && game.hpPlayer > 0)
    {
        dragonSpeed = getRandomInteger(10, 20);
        playerSpeed = getRandomInteger(10, 20);
        
        if(dragonSpeed > playerSpeed)
        {
            damagePoint = computeDragonDamagePoint();
            game.hpPlayer -= damagePoint;
            // game.hpPlayer = game.hpPlayer - damagePoint
            console.log
            (
                'Le dragon est plus rapide et vous brûle, il vous enlève ' +
                damagePoint + ' PV'
            );
            
        } else {
            damagePoint = computerPlayerDamagePoint();
            game.hpDragon -= damagePoint;
            console.log
            (
                'Vous êtes plus rapide et frappez le dragon, vous lui enlevez ' +
                damagePoint + ' PV'
            );
        }
    
        showGameState();
    }


}


function showGameState()
{
    console.log
    (
        'Dragon : ' + game.hpDragon + ' PV, ' +
        'joueur : ' + game.hpPlayer + ' PV'
    );
}
    
    
}

function showGameWinner()
{
    if(game.hpDragon <= 0)
    {
        showImage('images/knight.jpg');

        console.log("Vous avez gagné, vous êtes vraiment fort !");
        console.log("Il vous restait " + game.hpPlayer + " PV");
    } else {
        showImage('images/dragon.jpg');

        console.log("Le dragon a gagné, vous avez été carbonisé !");
        console.log("Il restait " + game.hpDragon + " PV au dragon");
    }
}


function start() {
    initializeGame();
    showGameState();
    gameLoop();
    showGameWinner();

}

start();






</script>