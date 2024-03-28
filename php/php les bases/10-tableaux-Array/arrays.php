<?php

include '../nav_global/nav.php';


// une variable permet de stocker des valeurs 
$listPrenom =  "Asuna,Naruto,Kuzuto,Hinata";

echo "$listPrenom <br>";

$tableauPrenom = array("Asuna", "Naruto", "Kuzuro", "Hinata", 15);

echo "<pre>";
print_r($tableauPrenom);
"</pre>";

// var_dump va afficher le nombre d'octets (/caractères) de chaque mot
echo "<pre>";
var_dump($tableauPrenom);
"</pre>";

echo "<br>";
echo $tableauPrenom[1];


// autre syntaxe pour déclarer un tableau.
// elle est plus pratique que la première pour ajoute des éléments au tableau au fur et à mesure de notre code si on ne les connait pas tous au départ.

$listePays[] = "France";
$listePays[] = "Japon";
$listePays[] = "Espagne";
$listePays[] = "Italie";
$listePays[] = "Maroc";
$listePays[] = "Roumanie";


// boucle foreach adapté aux tableau

foreach ($listePays as $indice => $valeur) {
    echo "<p> $valeur a pour indice $indice </p>";
}

// foreach version ul/li
echo "<ul>";
foreach ($listePays as $indice => $valeur) {
    echo "<li> la valeur $valeur a pour indice $indice </li>";
}
echo "</ul>";


// permet d'afficher le tableau sous forme de liste séparer par les 1er argument de IMPLODE donc ici " - "
echo "<p>" . implode(' - ', $tableauPrenom) . "</p>";


// count et sizeof

// afficher le nombre d'élément dans le tableau (équivalent à Nomtableau.length)
echo count($tableauPrenom) . "<br>";
// sizeof() est un alias de count() mais fait exactement la même chose
echo sizeof($tableauPrenom) . "<br>";
