<?php // Cette fonction calcule le nombre de caractères dans une phrase
 $phrase = 'Bonjour je suis une phrase.';
 $nbCar = strlen($phrase);
 echo '<p> Il y a ' . $nbCar . ' caracteres dans cette phrase. </p>';
?>

<?php // Cette fonction mélange au hasard les caractères d'une phrase
 $phrase = 'Bonjour je suis une phrase.';
 $phraseMelangee = str_shuffle($phrase);
 echo '<p>La phrase: '.$phrase. ' donne dans le désordre: ' . $phraseMelangee .'</p>';
 echo str_shuffle($phrase); // verssion raccourcie qui utilise la fonciton et l'affiche
 echo str_shuffle('Ma phrase'); // on peut directement écrire la phrase
?>

<?php //Fonction d'affichage de la date
 echo date('d/m/Y');
?>

<?php

 function bonjour($nom){ //Declaration de la fonction
    echo 'Bonjour ' . $nom;
 }
  bonjour('Marie'); // Appel de la fonction
?>



