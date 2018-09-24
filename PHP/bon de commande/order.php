<?php 



$value = $_GET["valeur"];

$pdo= new PDO('mysql:host=localhost;dbname=classicmodels', 'root','troiswa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ; //connexion
$pdo -> exec('SET NAMES UTF8');//on active l'encodage utf8

$query2 = $pdo ->prepare(
	'SELECT customerName, contactFirstName, contactLastName,addressLine1, city, orderNumber 
	FROM orders
	INNER JOIN  customers ON customers.customerNumber = orders.customerNumber
	WHERE orderNumber = '.$value
	);// ici on tappe la requette 
$query2 -> execute(); // ici on appuie sur executer 

$orders2 = $query2->fetchAll(PDO::FETCH_ASSOC);// ici on le convertis en array associatif





$query3 = $pdo ->prepare(
	'SELECT customerName, contactFirstName, contactLastName,addressLine1, city, orderNumber 
	FROM orders
	INNER JOIN  customers ON customers.customerNumber = orders.customerNumber
	WHERE orderNumber = '.$value
	);// ici on tappe la requette 
$query3 -> execute(); // ici on appuie sur executer 

$orders3 = $query3->fetchAll(PDO::FETCH_ASSOC);// ici on le convertis en array associatif





//var_dump($orders2);

include 'order.phtml';