
<?php

	$traductor=
	[
		"voiture" => "car",	
		"chien" => "dog",
		"chat" => "cat"	,
		"pigeon" => "bird",
		"moustique" => "mosquito",	
		"clavier" => "keyboard",	
		"ecran" => "screen"	,
		"programmer" => "programing"	
	];



$motformulaire = $_POST["word"];


/*foreach($traductor as $mot => $element)
{
	if($motformulaire == $element || strcasecmp($motformulaire,$element) == 0)
	{
				echo $mot;
	}
	else if($motformulaire == $mot ||strcasecmp($motformulaire,$mot) == 0)
	{	
			echo $element;		
	}
}*/


$shortest = -1;

foreach($traductor as $mot => $element)
{
	if(strcasecmp($motformulaire,$element) != 0)
	{
		$lev = levenshtein($motformulaire,$element);

		if($lev == 0)
		{
			$closet = $element;
			$shortest = 0;
			break;
		}

		if ($lev <= $shortest || $shortest <0){
			$closet= $element;
			$shortest = $lev;
		}
	}

}
echo "Mot entré : $motformulaire\n";
	if ($shortest == 0) 
	{
	    echo "Correspondance exacte trouvée : $closest\n";
	} 
	else 
	
	    echo "Vous voulez dire :" .$closet ."?\n";

	

		/*if ($percent > 90%){

			echo $mot;
		}
	}
	else if($motformulaire == $mot ||strcasecmp($motformulaire,$mot) != 0)
	{	
			echo $element;		
	}
}*/


	/*if(isset($_POST) && isset($_POST["word"]))
	{
		var_dump($_POST);
	}
	

	$mot = $_POST["word"];

	if ($mot == 'voiture') {

		echo $traductor["voiture"];
		
	}else if ($mot == 'chien'){
		echo $traductor['chien'];
	}else
		echo "votre mot de fait pas partie de la liste";
*/

	include("index.phtml");



/*****************correction de prof ******************************************************
	<?php
	$dictionary = [ "voiture" => "car", "chien" => "dog", "chat" => "cat", "pigeon" => "bird", "moustique" => "mosquito", "clavier" => "keyboard"];

	$language = null;
	$traduction = null;
	
	if(array_key_exists("word", $_POST))
	{
		$currentWord = $_POST["word"];

		if( array_key_exists( $currentWord, $dictionary ) )
		{
			$language = "french";
			$traduction = $dictionary[ $currentWord ];
		}
		else if( in_array( $currentWord, $dictionary ) )
		{
			$language = "english";
			$traduction = array_search( $currentWord, $dictionary );
		}
		else
		{
			$language = "inconnu";
			$traduction = "NON!!!!!!!!";
		}
	}
	
	include "traductor.phtml";

******************************************************************************************************/