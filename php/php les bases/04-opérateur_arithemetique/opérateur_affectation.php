<?php
include '../nav_global/nav.php';
?>


<?php

// les opérateur par affectation ont += -= *=  et /=

$premierNombre = 4;
$secondNombre = 2;

// n'ecrivez pas cette syntaxe, elle va générer une erreur php a cause du  <br> concaténer
echo $premierNombre += $secondNombre;
echo '<br>';
// $a += $b est équivalent à $a = $a + $b;
// $c = $a + $b
//  les cas suivants von fonctionner aussi
echo $premierNombre -= $secondNombre;
echo '<br>';
echo $premierNombre *= $secondNombre;
echo '<br>';
echo $premierNombre /= $secondNombre;
echo '<br>';

// utilisez les opérateur par affectation si vous êtes sur de ne plus avoir besoin de valeur  initiale de  $premierNombre. Sinon, declarez une troisième variable pour y affecter le nouveau résultat
// $troisiemeNombre = $premierNombre + $secondNombre