<?php

class MealController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
        if(array_key_exists('id', $_GET) && ctype_digit($_GET['id'])){
            
            $mealget = new MealModel();

            $get= $mealget-> get($_GET['id']);

            $http->sendJsonResponse($get);
        } else {
            $http->redirectTo('/');
        }

        
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
    /*public function sendJsonResponse($data)
    {
        echo json_encode($data);
        exit();
    }*/
}
