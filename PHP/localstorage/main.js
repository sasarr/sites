var cache = document.getElementById('cacher');
var List = document.querySelector('.hide');

cache.addEventListener('click',cacher)

function cacher(){
	List.classList.toggle("none");
}



var civilite = document.getElementById("civilite");
var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var telephone =  document.getElementById("telephone");

var contact = [];

var MonObjet = new Object();

function SaveContact(e){
e.preventDefault();
	//LoadContact();
console.log(e);
	MonObjet.civilite = civilite.value;
	MonObjet.nom = nom.value;
	MonObjet.premon = prenom.value;
	MonObjet.telephone = telephone.value;

	contact.push(MonObjet);

	var jsonString = JSON.stringify(contact);
	window.localStorage.setItem("contact", jsonString);

}
console.log(MonObjet );

function LoadContact(){


	var jsonString = window.localStorage.getItem("contact");
	contact = JSON.parse(jsonString);

	
	document.getElementById('liste').innerHTML = MonObjet.civilite +"  "+ MonObjet.nom


    
}
	 
	



console.log(document.getElementById('liste'))


var save = document.getElementById("save");
save.addEventListener('click',SaveContact);

var load = document.querySelector('.load');
load.addEventListener('click', LoadContact);










