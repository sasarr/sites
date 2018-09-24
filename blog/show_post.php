<?php
require("controleur/bdd.php");

$query = $pdo->prepare(
						'SELECT Titre,
								Contenu,
								Nom,
								Date  

						FROM   `Article`
						INNER JOIN Auteurs ON Article.id = Auteurs.id
						');

$query->execute();

$allinfo = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $pdo->prepare(
						'SELECT Pseudo , 
						Contenu 

						FROM `Commentaire`
						');

$query->execute();

$infocom = $query->fetchAll(PDO::FETCH_ASSOC);

include("template/show_post.phtml");
