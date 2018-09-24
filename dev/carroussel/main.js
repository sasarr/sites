'use strict';

var button = document.getElementById('toolbar-toggle');
var barredoutils = document.querySelector('.hide');

var slider = document.querySelector('#slider img');
var textcont = document.querySelector('#slider figcaption');
var inter;
var isplaying= false;

button.addEventListener('click',cacher);

function cacher(){
	barredoutils.classList.toggle("none");
}
//image.src = "images/2.jpg";
var compteurimg =0;
var images = [
{
	image:'images/1.jpg',
	legend: 'Street Art',
},
{
	image:'images/2.jpg',
	legend: 'Fast Lane',
},
{
	image:'images/3.jpg',
	legend:"Colorful Building",
},
{
	image:'images/4.jpg',
	legend:'Skyscrapers',
},
{
	image:'images/5.jpg',
	legend:'City by night',
},
{
	image:'images/6.jpg',
	legend:'Tour Eiffel',
}
]

var suivant= document.getElementById('slider-next');
suivant.addEventListener('click', next);
 
function next(){
	if(compteurimg<images.length-1){
		compteurimg++;}
		else{compteurimg = 0}

		slider.src = images[compteurimg].image;

		textcont.textContent =  images[compteurimg].legend;
}

var précédent= document.getElementById('slider-previous');
précédent.addEventListener('click', previous);
 
function previous(){

		if(compteurimg>0){
		compteurimg--;}
		else{compteurimg = images.length-1}

		slider.src = images[compteurimg].image;

		textcont.textContent =  images[compteurimg].legend;
}

var play= document.getElementById('slider-toggle');
play.addEventListener('click', playavancer);

function playavancer(){
 if(isplaying == false){

  inter=setInterval(next, 1000);
    isplaying = true;
}else {
    clearInterval(inter)
    isplaying =false;
}
}






/*
// ajouter une class 

title.classList.add('uneClass');

// retirer une class

title.classList.remove('uneClass');

//toggle

title.classList.toggle('uneClass');

var toolbarToggle = document.getElementById('toolbar-toggle');
    var toolbar = document.querySelector('.toolbar ul');
    var image = document.querySelector('#slider img');
    var figcaption = document.querySelector('#slider figcaption');
    var buttonNext = document.getElementById('slider-next');
    var buttonPrevious = document.getElementById('slider-previous');
    
    var slides =
    [
        { image: 'images/1.jpg', legend: 'Street Art'          },
        { image: 'images/2.jpg', legend: 'Fast Lane'           },
        { image: 'images/3.jpg', legend: 'Colorful Building'   },
        { image: 'images/4.jpg', legend: 'Skyscrapers'         },
        { image: 'images/5.jpg', legend: 'City by night'       },
        { image: 'images/6.jpg', legend: 'Tour Eiffel la nuit' }
    ];
    
    var index = 0;
    
    function displayToolbar(){
    
    	toolbar.classList.toggle('hide');
    }
    
  
  	function refreshSlider() {
    	image.src = slides[index].image;
        figcaption.textContent = slides[index].legend;
    
    }
    
    function goToNext() {
    
    	index++;
        
        if (index > slides.length -1) {
        
        	index = 0;
        }
        
        refreshSlider();
    
    }
    
    
    function goToPrev() {
    
    	index--;
        
        if(index < 0) {
        	index = slides.length - 1;
        }
        
        refreshSlider();
    
    }
  	
    
    
    document.addEventListener('DOMContentLoaded', function()
	{
    	toolbarToggle.addEventListener('click', displayToolbar);
        buttonNext.addEventListener('click', goToNext);
        buttonPrevious.addEventListener('click', goToPrev);
	});
    
    
    

	
</script>*/
'use strict';   // Mode strict du JavaScript

/*
    Afficher des images
    Faire un caroussel
        faire defiler les images vers l'avant / l'arriere / en random / automatiquement
    faire la toolbar 
*/

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/

// url des images 
var images = [
    { url: "images/1.jpg", figcaption: "lol c'est une image 1 "},
    { url: "images/2.jpg", figcaption: "lol c'est une image 2 "},
    { url: "images/3.jpg", figcaption: "lol c'est une image 3 "},
    { url: "images/4.jpg", figcaption: "lol c'est une image 4 "},
    { url: "images/5.jpg", figcaption: "lol c'est une image 5 "},
    { url: "images/6.jpg", figcaption: "lol c'est une image 6 "}
];

var currentImage = {};
var toolbar = null;
var index = 0;
var timer = null;

const leftArrow = 37;
const rightArrow = 39;

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

function MoveToNextElement()
{
    //console.log("move to next activated");
    index++;
    if(index > images.length - 1)
    {
        index = 0;
    }

    RefreshSlider();
}

function MoveToPreviousElement()
{
    //console.log("move to previous activated");
    index--;
    if(index < 0)
    {
        index = images.length - 1;
    }

    RefreshSlider();
}

function MoveToRandomElement()
{
    //console.log("random activated");
    var i = 0;
    var previousIndex = index;
    while(previousIndex == index ||\Uffffffffi > 50)
    {
        index = Math.floor( Math.random() * images.length );
        i++;
    }

    RefreshSlider();
}

function Animate()
{
    //console.log("play-stop activated");
    if(timer == null)
    {
        timer = setInterval(MoveToNextElement, 1000);
    }
    else
    {
        clearInterval(timer);       
        timer = null;
    }

}

function ToggleToolbar()
{
    //console.log("toggle-toolbar activated");
    toolbar.classList.toggle("hide");

}

function RefreshSlider()
{
    currentImage.image.setAttribute("src", images[index].url );
    currentImage.figcaption.innerHTML = images[index].figcaption;
}

function KeyboardEvent(e)
{
    if(e.keyCode == leftArrow)
    {
        MoveToPreviousElement();
    }

    if(e.keyCode == rightArrow)
    {
        MoveToNextElement();
    }
}

/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/


document.addEventListener("DOMContentLoaded", function()
{

    // j'installe mes events
    document.getElementById("slider-previous").addEventListener("click", MoveToPreviousElement);
    document.getElementById("slider-next").addEventListener("click", MoveToNextElement);
    document.getElementById("slider-random").addEventListener("click", MoveToRandomElement);
    document.getElementById("slider-toggle").addEventListener("click", Animate);

    document.getElementById("toolbar-toggle").addEventListener("click", ToggleToolbar);


    // les touches du clavier

    document.addEventListener("keydown", KeyboardEvent);

    // je recupere la tooblar
    toolbar = document.querySelector(".toolbar ul");

    // je recupere les elements du DOM qui deviendront interactifs ( SEULEMENT QUAND DOMCONTENTLOADED )
    currentImage.image = document.querySelector("figure img");
    currentImage.figcaption = document.querySelector("figure figcaption");

    currentImage.image.setAttribute("src", images[index].url );

    //--------------------------------------------------------------------------------------------------------
    // SetupEvent("slider-previous", "click", MoveToPreviousElement);
    // SetupEvent("slider-next", "click", MoveToNextElement);
    // SetupEvent("slider-random", "click", MoveToRandomElement);
    // SetupEvent("slider-toggle", "click", Animate);

});


/*
function SetupEvent(id, eventType, callback)
{
    var currentElement; 
    currentElement = document.getElementById(id);

    if( currentElement == null ||\UffffffffcurrentElement == undefined )
    {
        console.log("l'id: " + id + " n'existe pas");
        return;
    }

    currentElement.addEventListener(eventType, callback);
}
*/