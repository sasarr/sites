<?php
require("controleur/bdd.php");

$query = $pdo->prepare('SELECT Titre,
								 Contenu,
								 Nom,
								 Nomcat 
								 FROM `Article`

						Inner JOIN Catégorie on Article.id = Catégorie.id
						INNER JOIN Auteurs on Article.id = Auteurs.id
						');

$query->execute();

$infoadmin = $query->fetchAll(PDO::FETCH_ASSOC);

include("template/admin.phtml");
