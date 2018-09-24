
'use strict';
// variable 
var items = [];

load();
// functions

function callback(response){
   console.log(response);
$('#meal-details img').attr('src', getWwwUrl()+"/images/meals/"+response.Photo);
$('#meal-details p').text(response.Description);
$('#meal-details strong').text(parseFloat(response.SalePrice).toFixed(2));
}

function change(event){

    var modif = event.target.value ;//cible l'evenement

    $.getJSON(getRequestUrl()+'/meal?id='+modif, callback);
}

function addToLocalStorage(id, name, price, quantity) {
    
    for (var index = 0; index < items.length; index++) {
        if (items[index].mealId == id) {
            items[index].quantity += quantity;
            saveDataToDomStorage('panier', items);
            load();
            return;
        }
    }


    var product = {
        mealId : id,
        name: name,
        salePrice: price,
        quantity: quantity
    }



    items.push(product);
    saveDataToDomStorage('panier', items);
    load();
}

function load() {
    items = loadDataFromDomStorage('panier');
    if (items == null) {
        items = [];
    } else {
        var table = $('<table class="generic-table">').append('<tr><td class="number">Quantité</td><td class="number">Produit</td><td class="number">Prix Unitaire</td><td class="number">Prix Total</td></tr>');

        for (var i = 0; i < items.length; i++) {
            var info = '<tr><td class="number">'+items[i].quantity+'</td><td class="number">'+items[i].name+'</td><td class="number">'+items[i].salePrice+' €</td><td class="number">'+(items[i].salePrice*items[i].quantity)+'</td><td><button class="button delete button-cancel small" data-meal-id='+items[i].mealId+'><i class="fa fa-trash"></i></button></td></tr>'
            table.append(info);
        } 

        $('#order-summary').html(table);
        $('.delete').on('click',onClickRemove);
    
    }
  
}


function onClickAddRecap(event) {
    event.preventDefault();
    var id = $('#meal').val();
    var name = $('#meal-'+ $('#meal').val()).text();
    var price = parseFloat($('#meal-details strong').text());
    var quantity = parseFloat($('#quantity').val());

    console.log(id + ' ' + name+ ' '+ ' '+ price + " "+ quantity);
    addToLocalStorage(id, name, price, quantity);
}

function onClickRemove(event){
    event.preventDefault();
    var id = $(this).data('meal-id');
    remove(id);
}

function remove(mealId) {
    var index;
    
    for(index  = 0; index < items.length; index ++) {
        if (items[index].mealId == mealId) {
        
            items.splice(index, 1);
            saveDataToDomStorage('panier', items);
            load();
        }    
    }


}

// code principal

$('#meal').on('change',change); //on('change') changement via jquery

$('#addRecap').on('click', onClickAddRecap);





//stocker des donees en js window.localstorage et window.sessionstorage , dif info cstmt stocker ds le localstorage contrairement au sessionstorage.