<?php
  try
  {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
  }
  catch(Exception $error)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$error->getMessage());
}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>
      <!-- Afficher la liste des randonnées -->
    </table>
  </body>
</html>

