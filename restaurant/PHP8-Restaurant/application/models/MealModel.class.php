<?php

class MealModel{

	public function listAll() {
		$dataBase = new Database();

		$meals = $dataBase->query('SELECT * FROM Meal'); 

		return $meals;
	}
	



	public function get($id){

		$dataBase = new Database();

		$meals = $dataBase->queryOne('SELECT * FROM Meal WHERE Id =?', [ $id ]);

		return $meals;

	}
		


}