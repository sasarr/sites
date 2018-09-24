<?php
require("bdd.php");



$titre = $_POST["titre"];
$textarea = $_POST["article"];
$auteur = $_POST["auteur"];
$categorie = $_POST["categorie"];


$query = $pdo->prepare('INSERT INTO Article(

								 Titre,
								 Contenu,
								 Auteur,
								 Catégorie )
						VALUES (
								:titre,
								:textarea,
								:auteur,
								:categorie
								)			
						');

$query -> execute(array( ":titre" => $titre , ":textarea" => $textarea , ":auteur" =>$auteur , ":categorie" => $categorie) );


header("location:../add_post.php");
exit();







