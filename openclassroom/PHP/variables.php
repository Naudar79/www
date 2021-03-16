<?php
    $exempleTexte = "Bonjour"; // STRING - Chaine de caractères.... on peut aussi mettre '' 
    $exempleNbEntier = 25; // INT - Ce nombre est entier, sans décimales
    $exempleNbDecimal = 15.8; //FLOAT - Attention il faut un point et non une virgule
    $exempleBoolean = true; // BOOL - ou false
    $exempleVarNull = NULL; // NULL - Variable qui ne contient rien

    echo "Le visiteur a $exempleNbEntier ans. "; // solution facile mais pas propre
    echo 'Le visiteur a ' . $exempleNbEntier . 'ans. '; // solution plus propre, l'affichage est identique
    // exemple de calculs
    $total = $exempleNbEntier * $exempleNbDecimal; // + - * / %
    echo 'le résultat est de: ' . $total . '.';
?>

