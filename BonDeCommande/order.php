<?php 

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa');
$pdo->exec('SET NAMES UTF8');
/*
$concatenedQuery = 'SELECT
							customerName,
							contactFirstName,
							contactLastName,
							addressLine1,
							addressLine2,
							city
						 FROM
						 	customers
						 INNER JOIN 
						 	orders
						 	ON
						 	orders.customerNumber = customers.customerNumber
						 WHERE
						 	orderNumber = ' . $_GET['orderNumber']; 
*/
$query = $pdo->prepare(
						'SELECT
							customerName,
							contactFirstName,
							contactLastName,
							addressLine1,
							addressLine2,
							city
						 FROM
						 	customers
						 INNER JOIN 
						 	orders
						 	ON
						 	orders.customerNumber = customers.customerNumber
						 WHERE
						 	orderNumber = ?
					');

$query->execute(array($_GET['orderNumber']));

$customerContact = $query->fetch(PDO::FETCH_ASSOC);

$query2 = $pdo->prepare(
						'SELECT
							productName,
							priceEach,
							quantityOrdered,
							priceEach * quantityOrdered AS totalPrice
						FROM
							orderdetails
						INNER JOIN
							products
							ON
							products.productCode = orderdetails.productCode
						WHERE
							orderNumber = ?
						ORDER BY
							productName DESC
						');


$query2->execute(array($_GET['orderNumber']));

$orderInfos = $query2->fetchAll(PDO::FETCH_ASSOC);

$query3 = $pdo->prepare(
	'SELECT 
		SUM(priceEach * quantityOrdered ) AS totalHT
	 FROM 
	 	orderdetails
	 WHERE
	 	orderNumber = ?');

$query3->execute(array($_GET['orderNumber']));

$calcul = $query3->fetch(PDO::FETCH_ASSOC);

$totalHT = $calcul['totalHT'];

/*
$total = 0;
foreach($orderInfos as $orderInfo)
{
	$total += $orderInfo['totalPrice'];
}
*/
include ( "order.phtml" );