"use strict";

var ht= parseFloat(window.prompt("Montant HT"));

var choix= window.prompt("Voulez-vous une remise?");

if (choix == "oui"){
	var remise = parseFloat(window.prompt("De combien?"));
	alert("Votre remise est de" + remise + "%");
	ht = (ht*(1-(remise/100)));
var tva= (ht*0.2);
var ttc= (ht+tva);
console.log("Remise de ", remise, "% donc TTC=",ttc);

}else{
	alert("Aucune remise n'a été appliquée");
	ht=parseFloat(ht);
var tva= (ht*0.2);
var ttc= (ht+tva);
console.log("TTC=",ttc);

}

