<?php
include '../nav_global/nav.php';
?>

<?php

// .. les opérateurs arithmetiques sont + - * /

$premierNombre = 4;
$secondNombre = 2;

// il perment donc donc d'additionner, soustraire, multiplier et diviser

echo $premierNombre + $secondNombre . "<br>";
echo $premierNombre - $secondNombre . "<br>";
echo $premierNombre * $secondNombre . "<br>";
echo $premierNombre / $secondNombre . "<br>";

// deux autres opérateur arithmetique, le modulo et l'exponentiatin
// le modulo donne le reste de la division
// L'exponentiation permet d'affecter au premier nombre la puissance du second nombre
echo $premierNombre % $secondNombre . "<br>";
// ici, c'est 4 puissance 2 (ou 4²)
echo $premierNombre ** $secondNombre . "<br>";
