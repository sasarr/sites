<?php

/*********************************************************************************************************************************************************
//une fct qui va lire le contenu de la feuille excel et l'afficher


	
	// une function qui va lire le contenu de la feuillle excel et l'afficher
	
	$path = "tasks.csv"; // l'url

	$file = fopen($path, 'a+'); // j'ouvre l'url en lecture ET ecriture ( si il n'existe pas je le cr\Uffffffff)

	$tasks = array(); // un array vide qui va accueillir toutes les tasks

	while(true) // tant qu'il reste du contenu dans le csv
	{
		$taskData = fgetcsv($file); // je recupere la ligne suivante 

		if($taskData == false) // si la ligne est vide, on casse la boucle
		{
			break; // on la casse grace au break
		}

		array_push($tasks, $taskData); // si la boucle n'a pas \Uffffffff cass\Uffffffff ca veux dire que la ligne n'est pas vide ( qu'il y a une task ) 
	}

	fclose($file);  // n'oublions pas de fermer le fichier

	var_dump($tasks); // on affiche a la barbare tout ce qu'on a recuperer*
	**************************************************************************************************************************************************/ 


	include "cvsManipulation.php"; // inclue notre bibliotheque de fonctionnalit\Uffffffffpropre au csv

	$tasksResult = GetCSV("tasks.csv"); // recuperer le contenu du csv envoy\Uffffffffn parametres

	var_dump($tasksResult); // on affiche a la barbare tout ce qu'on a recuperer 

	include "indexe.phtml"; // et notre petit phtml pour creer la page 