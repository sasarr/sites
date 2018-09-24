


var button = document.getElementById('toggle-rectangle');
var rectangle = document.querySelector('.rectangle');

button.addEventListener('click', cachebutton);

function cachebutton(){
	rectangle.classList.toggle("none");
	
}

rectangle.addEventListener('mouseover', changecolor);

function changecolor(){
	rectangle.classList.add("rouge");
}

rectangle.addEventListener('mouseleave',changecolor2);

function changecolor2(){
	rectangle.classList.remove("rouge");
	rectangle.classList.remove("vert");
}

rectangle.addEventListener('dblclick', changecolor3);

function changecolor3(){
	rectangle.classList.toggle("vert");
}

