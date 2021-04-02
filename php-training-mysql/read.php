<?php
  try
  {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=rando;charset=utf8', 'root', '');
  }
  catch(Exception $error)
  {
    // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$error->getMessage());
}

$resultat = $bdd->query('SELECT * FROM hiking');
$donnees = $resultat->fetch();
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
    
        <table border="1">
        <tr>
          <td>Name</td>
          <td>Difficulty</td>
          <td>Distance</td>
          <td>Duration</td>
          <td>Height difference</td>
        </tr>
     
        <?php
          while ($donnees = $resultat->fetch()) {
        ?>
        <tr>

          <td>
            <!--<input type="checkbox" name="chkDel<?php echo $donnees['id'];?>" id="chkDel">-->
            <?php echo $donnees['name'];?>
          </td>
          <td>
            <?php echo $donnees['difficulty'];?>
          </td>
          <td>
            <?php echo $donnees['distance'];?>
          </td>
          <td>
            <?php echo $donnees['duration'];?>
          </td>
          <td>
            <?php echo $donnees['height_difference'];?>
          </td>
        </tr>
        <?php
          }
        ?>
        </table>
  </body>
</html>

