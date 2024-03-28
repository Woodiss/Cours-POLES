<?php
include '../nav_global/nav.php';
?>


<?php

// sa fonction est similaire a celle d'une variable, elle stocke une valeurrécupérable. Par contre, cette valeur ne sera pas modifiable par la suite

// une constante se déclare avec le mot clé define
// elle prend deux argument. Le nom de la constante (par convention, en majuscule). Le second argument est la valeur de la constante

define('VILLE', 'Poissy');
echo VILLE . "<br>";

// tenter de rédefinire sa valeur comme en dessous générera une erreur php

// define('VILLE', 'Paris');
// echo VILLE . "<br>";

// il sera utile de stocker une valeur que l'on sait fixe, non variable, dans une constante, par exemple, la valeur, de l'URL de site, On pourra la stocker avec define('URL', '')


// les constantes magiques sont des constantes déjà codées mise à notre disposition (il y'en a beaucoup : https://www.php.net/manual/fr/language.constants.magic.php)

// cette constante donne le chemin physique jusqu'au fichier (file)
echo __FILE__ . '<br>';
// celle-ci donne le chemin physique jusqu'au dossier
echo __DIR__ . '<br>';
// cette dernière donne la ligne où elle est codée
echo __LINE__ . '<br>';
