'use strict';

var row;
var column;
var size;
var tab = [];


size = parseInt(window.prompt('Entrez chiffre'));

for (row = 0; row < size; row++) {

	tab[row] = [];
	
    for(column = 0; column < size; column++){
    
    	tab[row][column] = (row + 1) * (column + 1);
    
    }
}

document.write('<table>');

for (row = 0; row < tab.length; row ++) {
	
	document.write('<tr>');
    
    for(column = 0; column < tab[row].length; column ++) {
    
    	if (row == column) {
       		
            document.write('<td class="same-number">'+tab[row][column]+'</td>');
        
        } else {
        
            document.write('<td>'+tab[row][column]+'</td>');

        
        }
    
    }

	document.write('</tr>');
}

document.write('</table>');

</script>

<style>

	.same-number {
    	background-color: red;
    
    }
    
    td {
    	background-color: blue;
    
    }

</style>