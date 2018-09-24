function Landscape()
{
	this.canvas;
	this.context;

	this.rainDrop = [];


	this.gravity = -2;
	this.wind = 0.7;
	this.colors = ["red", "green", "blue", "white", "yellow"];
}

Landscape.prototype.Initialize = function()
{
	landscape.canvas = document.getElementById("canvas");
	landscape.context = landscape.canvas.getContext("2d");
}


Landscape.prototype.Draw = function()
{
	landscape.context.fillStyle = "rgba( 0,0,0, 0.1)";
	landscape.context.fillRect(0,0, landscape.canvas.width, landscape.canvas.height);

	for(var i = 0; i < landscape.rainDrop.length; i++)
	{
		landscape.rainDrop[i].Draw();
	}
}

//------------------------------------------------------

function RainDrop(positionX, positionY)
{
	this.position = 
	{
		x: positionX,
		y: positionY
	};
	this.color = landscape.colors[ Math.floor ( Math.random() * landscape.colors.length ) ];
	console.log(this.color);
}

RainDrop.prototype.Draw = function()
{
	landscape.context.fillStyle = this.color;
	this.position.y -= landscape.gravity;
	this.position.x += landscape.wind;
	landscape.context.fillRect(this.position.x, this.position.y, 10, 10);
}

var landscape = null;
window.addEventListener("DOMContentLoaded", function()
{
	landscape = new Landscape();
	landscape.Initialize();


	landscape.canvas.addEventListener("click", function(info)
	{
		console.log("une goutte de pluie est n\Uffffffff");
		var x = info.pageX - this.offsetLeft;
		var y = info.pageY - this.offsetTop;

		landscape.rainDrop.push( new RainDrop(x, y) );

	});


	window.setInterval( landscape.Draw, 1000 / 30);
});
