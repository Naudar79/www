<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$resultat = $bdd->query('SELECT * FROM meteo');

$donnees = $resultat->fetch();

while ($donnees = $resultat->fetch())
{
  echo $donnees['nom_de_la_colonne'];
}

$resultat->closeCursor();

?>