<?php
include '../nav_global/nav.php';
?>

<?php

// une variable est un espace mémoire ( ou plus simplement une boîte) dans lequel on stokxe une information (une donnée). Cette information étant récupérable ensuite à tout  moment dans notre code
// les information stokées dedans peuvent être des chaines de caractère (string, nombre entier (integer) float (nombre decimaal), des requetes sql, des tableaux (un array est ube sorte de variable) ou encore un booléen (on stocke ou TRUE ou FALSE dans la variable)

// 01- utilité de la variable 

echo "<p>Bonjour Fred</p>";
echo "<p>Comment vas-tu Fred</p>";
echo "<h2>Affichage de profil de Fred</h2>";

$prenom = "Fred";

echo "<p>Bnjour $prenom</p>";
echo "<p>Comment vas-tu $prenom</p>";
echo "<h2>Affichage de profil de $prenom</h2>";

// 02 regles concernant les variables
// pour les déclarer, le doit écroire la lettre $
// si je mets un chiffre après le signe $, je génère une erreur php (je ne peux pas nommer $9prénom)
// Par convention, on demande à ne pas débuter leur nom par un - ou tout autre caractère Spécial @ # etc ...
// toujour par convention, on ne met pas d'accent pour le nom de la variable. On n'écrit pas $prénom

// par convention, si le nom de la variable est composé, on doit l'écrire ou en cemelCase ($monPrenom) ou en snakecase ($mon_prenom). On n'écrit pas $monprenom ou $mon prenom
// par convention, on donne un nom logique, pertinent, qui parle à une variable.
$couleur = "rouge" . "<br>";
// attention, le  nom d'une variable est sensible à le casse
echo $couleur;


// la valleur affectée à une variable peut être modifiée. C'est la même variable mais avec une valeur différente
$couleur = "bleu" . "<br>";
echo $couleur;

// 03 type de variables
$prenom = "Fred";
echo gettype($prenom) . "<br>";

$nombreEntier = 32;
echo gettype($nombreEntier) . "<br>";

$nombreDecimal = 5.4;
echo gettype($nombreDecimal) . "<br>";

$booleen = TRUE;
echo gettype($booleen) . "<br>";
