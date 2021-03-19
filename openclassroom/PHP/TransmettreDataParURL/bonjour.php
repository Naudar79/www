<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bonjour.php</title>
 </head>
 <body>
    <p>
        <?php 
        if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])) {
           $nbRep = (int)$_GET['repeter'];
           if ($nbRep<100) {
            for ($repetition=0; $repetition <= $nbRep ; $repetition++) { 
                echo '<p> Bonjour' . $_GET['nom'] . ' ' . $_GET['prenom'] . '</p>';   
            }
            else {
                echo 'Le nombre de répétitions dépasse 100';
            }
           }  
        }
        else {
            echo 'Pas de nom ou de prénom défini !';
        }
        ?>
    </p>
 </body>
</html>