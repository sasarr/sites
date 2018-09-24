<?php

$pdo= new PDO('mysql:host=localhost;dbname=classicmodels', 'root','troiswa') ; //connexion
$pdo -> exec('SET nNAME UTF8');//on active l'encodage utf8

$query = $pdo ->prepare('SELECT ordernumber, orderDate, shippedDate, status
FROM orders');// ici on tappe la requette 
$query -> execute(); // ici on appuie sur executer 

$orders = $query->fetchAll(PDO::FETCH_ASSOC);// ici on le convertis en array associatif

//var_dump($orders);




include 'index1.phtml';//ce doc va avoir besoin des infor provenant de la base de donneés


