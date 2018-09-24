<?php 

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa');
$pdo->exec('SET NAMES UTF8');

$query = $pdo->prepare(
						'SELECT 
							orderNumber,
							orderDate,
							shippedDate,
							status
						 FROM
						 	orders
						 ORDER BY
						 	orderDate
						');

$query->execute();

$allOrders = $query->fetchAll(PDO::FETCH_ASSOC);

include ( "index.phtml" );