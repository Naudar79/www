<?php
 $age = 24;

 if ($age >= 18)
 {
	$majeur = true;
 }
 else
 {
	$majeur = false;
 }
// Ces deux boucles font la même chose... la seconde est appelée une ternaire car elle fait plusieurs actions en une seule ligne

 $age = 24;

 $majeur = ($age >= 18) ? true : false;

?>