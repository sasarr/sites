var game = {};

game.canvas = document.getElementById("canvas"); 
game.context = canvas.getContext("2d");

game.car = new Image();
game.car.src = "voiture.png";

game.car.onload = function()
{
    game.drawTrack();
    game.drawCar();
};


game.drawTrack = function()
{
    game.drawBackground();

    for(var i = 1; i < 5; i++)
    {
        game.drawFinishLine( i * 10 );        
    }

    game.drawRedStrips(0);
    game.drawRedStrips(game.canvas.height - 10);
};


game.drawBackground = function()
{
    game.context.fillStyle = "grey";
    game.context.fillRect( 0, 0, game.canvas.width, game.canvas.height);    
};

game.drawRedStrips = function(y)
{
    for(var i = 0; i < 100; i++)
    {
        if( i % 2 == 0 )
        {
            game.context.fillStyle = "red";
        }
        else
        {
            game.context.fillStyle = "white";
        }

        game.context.fillRect(i * 10, y,  10, 10);
    }
};

game.drawFinishLine = function(offset)
{
    for(var i = 0; i < 80; i+=2 )
    {
        game.context.fillStyle = "white";
        if( (offset / 10) % 2 == 0 )
        {
            game.context.fillRect(game.canvas.width - offset, i * 10, 10, 10);
        }
        else
        {
            game.context.fillRect(game.canvas.width - offset, i * 10 + 10, 10, 10);
        }
         
    }
};

game.drawCar = function()
{
    //game.context.drawImage(game.car, 0,0);
    game.context.drawImage(game.car, 0, 0, game.car.width / 3, game.car.height / 6, 0,15, 55,50);
    //                       image , sx, sy,  sw             , sh                 , dx, dy, dw, dh
};

document.getElementById("canvas").onmousemove = function(info)
{
    game.context.clearRect(0,0, game.canvas.width, game.canvas.height);

    game.drawTrack();

    
    var x = info.pageX - this.offsetLeft;
    var y = info.pageY - this.offsetTop;
    game.context.drawImage(game.car, 0, 0, game.car.width / 3, game.car.height / 6, x - ( 55 * 0.5), y - (50 * 0.5), 55, 50);
}
