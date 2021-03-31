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

    if (isset($_POST['ville'])) {
        $ville = $_POST['ville'];
        $haut = $_POST['haut'];
        $bas = $_POST['bas'];
        $resultat = $bdd->query('SELECT * FROM météo');
        $donnees = $resultat->fetch();
        $requete = $bdd->prepare("INSERT INTO météo (ville, haut, bas) VALUES ('$ville',$haut,$bas)"); 
        $requete->execute();
        $resultat->closeCursor();
        if ($resultat){
        $ville='';
        $haut='';
        $bas='';
        } else {
        echo "<p>Erreur</p>";
        }
    }else{
        $ville='';
        $haut='';
        $bas='';
    }
$resultat = $bdd->query('SELECT * FROM météo');
$donnees = $resultat->fetch();
?>

<form action="index.php" method="POST" enctype="multipart/form-data" name="delete">
<?php
while ($donnees = $resultat->fetch())
{
?>
<div>
 <table>
  <tr>
    <td>
        <input type="checkbox" name="chkDel<?php echo $donnees['id'];?>" id="chkDel">
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
</form>
<?php
}
 $resultat->closeCursor();
?>
<div>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <div>
        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" value="<?php echo $ville;?>">
    </div>
    <div>
        <label for="haut">Haut</label>
        <input type="text" name="haut" id="haut" value="<?php echo $haut;?>">
    </div>
    <div>
        <label for="bas">Bas</label>
        <input type="text" name="bas" id="bas" value="<?php echo $bas;?>">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>

</div>
</body>
</html>
