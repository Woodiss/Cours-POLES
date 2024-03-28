<?php
include '../nav_global/nav.php';
?>

<?php

// 1 Concatenation simple

$prenom = "Delia";
$nom = "Danciu";

// il y a deux manieres de concaténer en PHP
// d'abord la moins utilisées, avec une virgule

echo "je suis ", $prenom, " ", $nom, "<br>";

// la plus utilissé: le point
echo "je suis " . $prenom . " " . $nom . "<br>";


// 2 contcaténation par affectation

$nombre = "Ko";

echo $nombre .= 15;
echo $nombre;
