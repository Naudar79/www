<?php
$age = 14;

if($age < 12){ // < > == != <= >=
    echo 'Salut gamin ! ';
} 
elseif ($age == 14) {
    echo 'Tu as 14 ans ';
}
else {
    echo 'Bonjour cher adulte ';
}

$adulte = true;

if ($adulte) { // Si c'est un adulte
    echo 'Tu es un adulte 1 ';
}
else {
    echo 'Tu es un enfant ';
}

if (!$adulte) { // Si ce n'est un adulte
    echo 'Tu es un enfant ';
}
else {
    echo 'Tu es un adulte 2 ';
}

$nom = 'Bernard';

if ($adulte AND $nom=='Bernard') { // AND = && ou OR = || 
    echo 'Tu es un adulte qui s appelle Bernard';
}

// Astuce : on peut couper le code PHP !

if ($adulte) {
?>

<h4>Exemple de texte en HTML imbriquée entre la condition en PHP</h4>

<?php
echo 'blabla ';
}
//**************************
switch ($age) {
    case '4':
        echo 'tu as 4 ans';
        break;
    case '16':
        echo 'tu as 16 ans';
        break;
    default:
        echo 'tu es majeur';
        break;
}

?>