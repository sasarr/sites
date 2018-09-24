<?php 

	function AddToCSV($path, $dataToAdd)
	{
		$file = fopen($path, 'a+'); 
		fputcsv($file, $dataToAdd);
		fclose($file);
	}

	function GetCSV($path)
	{
		$file = fopen($path, 'a+'); 

		$tasks = array(); 

		while(true) 
		{
			$taskData = fgetcsv($file);

			if($taskData == false) 
			{
				break;
			}
			array_push($tasks, $taskData);
		}
		fclose($file);

		return $tasks;
	}

	function DeleteFromCSV($path, array $indexesToDelete)
	{
		$initialCSV = GetCSV($path);//recuperer le fichier initial

		//var_dump($initialCSV);
		//echo("--------------");
		//var_dump($initialCSV[6][5]);
		

		$tasks = array(); 

		foreach($initialCSV as $key => $value) // supprimer les lignes dont je ne veux plus 
		{
			//echo("---------------------------");
			//echo("key: " . $key);
			//var_dump($value);

			if(in_array($indexesToDelete, $key) == false) // est ce que key est egale a une valeur de indexes ( 0 ou 2 )
			{
				array_push($tasks, $value);
			}

		}

		$file = fopen($path, "w");
		fclose($file);
		
		foreach($tasks as $tasksData)
		{
			AddToCSV($file, $tasksData);
		}
	}