<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

$resultat = $bdd->query('SELECT * FROM météo');

$donnees = $resultat->fetch();

while ($donnees = $resultat->fetch())
{
?>
<div>
 <table>
  <tr>
    <td>
        <?php echo $donnees['ville'];?>
    </td>
    <td>
        <?php echo $donnees['haut'];?>
    </td>
    <td>
        <?php echo $donnees['bas'];?>
    </td>
  </tr>
 </table>
</div>

<?php
}
 $resultat->closeCursor();
?>
<div>
<form action="index.php" method="post">
    <div>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" paceholder="Ville">
    </div>
    <div>
        <label for="haut">Haut</label>
        <input type="text" name="haut" id="haut" paceholder="Haut">
    </div>
    <div>
        <label for="bas">Bas</label>
        <input type="text" name="bas" id="bas" paceholder="Bas">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>
