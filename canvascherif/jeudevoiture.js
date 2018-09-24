Exercice Orient\Uffffffffbject Javascript ( a faire tout seul ( vraiment ) )

Le but de l'exercice est de vous faire pratiquer la syntaxe javascript pour 
la cr\Uffffffffion de constructeur d'instance d'assignation de propri\Uffffffffs, de methodes
via les prototypes.

Cr\Uffffffff un jeu de voiture ou l'on pourra avoir autant de voiture que l'on veux, 
a chaque "tour de jeu" vous allez choisir une voiture au hasard et la faire avancer
d'une distance definie par "la puissance de son moteur", la course n'est pas fini 
tant que vous n'avez pas le "classement" de toutes les voitures et leur temps/nombre de tours
avant d'avoir pass\Uffffffffa ligne d'arriv\Uffffffff... bon courage et adieu

function Game()
{
    this.cars = [];
}


Game.prototype.Initialize = function()
{
    this.cars.push( new car );
  
}


function Car()
{
    this.car = Math.random() * 100 |0;
    this.pmotor = new Equipment("pmotor", Math.random() * 10 |0);
 	this.distance = pmotor * 10;
}

Game.prototype.course = function()
{
    while();
    {

    }
}

Car.prototype.classement = function()
{
var classement = [];
classement.sort();
console.log(classement);
}

function Equipment( name, effect )
{
    this.name = name;
    this.effect = effect; // + 2 ||\Uffffffff- 5 
}



var game = new Game();
game.Initialize();
game.course();

///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////





function Game()
{
    this.track = [];
    this.leaderboard = [];
    this.globalTurn = 0;
}

Game.prototype.Initialize = function( numberOfParticipant )
{
    for(var i = 0; i < numberOfParticipant; i++)
    {
        game.track.push( new Car() );
    }
};

Game.prototype.Start = function()
{
    while(this.leaderboard.length != this.track.length)
    {
        this.globalTurn++;
        var randomIndex = Math.floor(Math.random() * this.track.length);
        var randomCar = this.track[randomIndex];

        if(randomCar.trackFinished == false )
        {
            randomCar.Accelerate();    
        }
        else 
        {
            continue;
        }
        
        console.log("la voiture " + randomIndex + " Accellere de " + randomCar.speed + " il lui reste " + randomCar.distanceRemaining + " pixels a parcourir" );
        

        if(randomCar.distanceRemaining < 0)
        {
            console.log("et elle depasse la ligne d'arriv");
            //this.track.splice(randomIndex, 1);
            this.leaderboard.push(randomIndex);
            randomCar.trackFinished = true;
        }
        console.log("-----------------------------------------------------------------------");
    }

    console.log("le classement finale est " + this.leaderboard);
}

function Car()
{
    this.trackFinished = false;
    this.distanceRemaining = 1000;
    this.speed = 1 +  (Math.random() * 100 |0);
    this.turnToFinish = 0;
}

Car.prototype.Accelerate = function()
{
    this.distanceRemaining -= this.speed;
    this.turnToFinish++;
}

var game = new Game();
game.Initialize( (1 + Math.random() * 14) |0 );
game.Start();