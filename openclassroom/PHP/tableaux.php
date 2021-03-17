<?php
/*
Basiquement on peut définir un tableau comme ceci :
 $prenoms[0] = 'Mathieu';
 $prenoms[1] = 'Marie';
 $prenoms[2] = 'Robert';
 */

// On peut également l'écrire de cette façon
  $prenoms = array('Mathieu', 'Marie', 'Robert'); // tableau numéroté
  echo $prenoms[2]; //affiche le contenu de l'index "2" du tableau; soit le 3ème élément
  echo print_r($prenoms); //print_r affiche le contenu d'un tableau. On l'utilise pour du debug

  $personne = array('nom' => 'Nebra', 'prenom' => 'Mathieu', 'age'=>99); //Tableau associatif
  print_r($personne);

for ($i=0; $i < 3 ; $i++) {  //Dans cette boucle on affiche le contenu du tableau
    echo '<p>' . $prenoms[$i] . '</p>';
}

foreach ($prenoms as $value) { //Avec le foreach on n'est pas obligé de connaitre la longueur du tableau
    echo '<p>' . $value . '</p>';
}

foreach ($personne as $key => $value) { //traite le nom de la cellule et son contenu
    echo '<p>' .$key . ' vaut ' . $value . '</p>';
}

?>


<?php //Ce script PHP parcour le tableau et cherche si la clé 'nom' se trouve dans les coordonnées
$coordonnees = array ('prenom' => 'François', 'nom' => 'Dupont', 'adresse' => '3 Rue du Paradis', 'ville' => 'Marseille');

if (array_key_exists('nom', $coordonnees))
{
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

?>

<?php //Ce script recherche si la valeur 'Cerise'se trouve dans le tableau
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}
?>

<?php //Ici nous récupérons la clé d'une valeur d'un tableau
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
?>

