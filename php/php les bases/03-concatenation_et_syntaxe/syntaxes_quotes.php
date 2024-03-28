<?php
include '../nav_global/nav.php';
?>

<?php

$test = "exemple";
// premier cas avec des doubles quotes, ma variable est interprétée. La valeur est récupérée sans concaténation
echo "Ma variable $test est une chaine de caractères <br>";
// dans ce second cas, simple quotes, la variable n'est pas interprétée
echo 'Ma variable $test est une chaine de caractères <br>';
// le doit stopper la chaine de caractères avant et après la variable et concaténer avec le reste
echo 'Ma variable ' . $test . ' est une chaine de caractères <br>';

// attention, avec les simples quotes, on doit a chaque fois utiliser des caractères d'échappements ( antislah \) pour que le code ne soit pas perturbé (faire un test en l'enlevant)
echo 'Ma variable  $test n\' est une chaine de caractères <br>';


// avec des doubles quotes, je n'ai pas besoin de l anti slash pour echapper l'apostrophe
echo "Ma variable $test n'est pas interprétée <br>";
