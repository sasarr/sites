"use strict";

var ht= window.prompt("Montant HT");
ht=parseFloat(ht);
var tva= (ht*0.2);
var ttc= (ht+tva);
console.log("TTC=",ttc);

