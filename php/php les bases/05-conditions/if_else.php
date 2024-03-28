<?php
include '../nav_global/nav.php';
?>

<?php
// je déclare 5 variables que je vais tester

$a = 22;
$b = 33;
$c = 44;
$d = 55;
$e = 66;

// 01-if else simple
// le if va tester (ce qu'on lui propose entre paranth_ses)
// si c'est vrai (TRUE) il exécute ce qu'il y a dans le bloc d'inztruction. Si c'est faux (FALSE), il exécute ce qui est dans le bloc d'instructions du else

if ($a < $b) {
    echo "Vrai, $a est bien inférieur à $b <br>";
} else {
    echo "Faux, $a n'est pas inférieur à $b <br>";
}

// en php, on n'est pas obligé de coder le else.
// on peut tester quelque chose et si c'est vrai, on exécute ce qui est dans le bloc d'instructions
// mais si c'est faux, si on ne rentre pas dans ce cas de figure, on continue simplement à exécuté la suite du code


if ($b < $c) {
    echo "Vrai, $b est bien inférieur a $c <br>";
}

// 02 - avec && (AND)
// avec &&, les deux test doivent être TRUE, sinon, on rentre dans le else si il y en n'a un

if ($a < $b && $b > $c) {
    echo "Vrai, les deux affirmations sont exactes <br>";
} else {
    echo "Faux, l'une des deux affirmation n'est pas vrai <br>";
}

// 03 - || (OR)
// avec || (OR) une seule des deux conditions vérifiées suffit a entrer dans le TRUE (le bloc d'intructions du if)

if ($a < $b || $b > $c) {
    echo "Vrai, l'une des deux affirmations est exactes <br>";
} else {
    echo "aucune des deux affirmation n'est exactes <br>";
}


// 04 - avec XOR (ou exclusif)
// XOR exige qu'une seul des deux affirmations soit exacte, Si les deux sont exactes ou les deux fausses, on entre dans le else

if ($a < $b xor $b > $c) {
    echo "Vrai, une seul des deux affirmations est exactes <br>";
} else {
    echo "Faux, les deux affirmation sont toutes les deux exactes ou fausse <br>";
}

// 05 - avec if/elseif/else
// condition avec trois possibilités. Si la première n'est pas vérifiée, on entre dans la seconde (elseif). Si cette dernière est toujours fausse, on entre dans le else

if ($a > $b) {
    echo "$a est bien supérieur à $b <br>";
} elseif ($a != 22) {
    echo "Vrai, $a est différent de 22 <br>";
} else {
    echo "Faux, les deux premier condition sont fausse <br>";
}

// 06 - condition contracté (appelée aussi ternaire)
// la condition contracté est utilisée quand on doit coder en PHP dans un bloc HTML
// elle permet une syntaxe plus condensée
/* if ($a < $b) {
    echo "Vrai $a est bien inférieur à $b";
 } else {
    echo "Faux, $a n'est pas inférieur à $b ";
 } */

// la ternaire ci-dessous est équivalente de la condition mise en commentaire au dessus 

// entre les parenthèses, on écrit toujours ce que l'on veut tester
// après le ? on écrit le bloc d'instruction du if 
// après les : on ecrit le bloc d'intructions du else

echo ($a < $b) ? "Vrai $a est bien inférieur à $b <br>" : "Faux, $a n'est pas inférieur à $b";


// 07 - if/else avec == et ===
// == vérifie seulement la valeur (donc ce que contient la variable)
// === (strictement égale) vérifie la valeur ET le type (donc si c'est un STRING, INTERGER, DOUBLE...)
$var = 100;
$var2 = "100";


if ($var === $var2) {
    echo "$var et $var2 sont égale en type et en valeur <br>";
} else if ($var == $var2) {
    echo "$var et $var2 sont égale en valeur mais pas en type <br>";
} else {
    echo "$var et $var2 ne sont n'y égale en valeur n'y en type <br>";
}

// 08 - if(isset)/else
// isset() est une fonction prédéfinie pour tester si une variable existe, à été déclarée avant dans le script
// c'est trés utile pour savoir si on continue à dérouler le code, à l'éxécuter ou stopper avec un message d'erreur
$test = 22;

if (isset($test)) {
    echo "La variable test existe";
} else {
    echo "La variable test n'existe pas <br>";
}


// code de la même condition en version contractée, en ternaire (utile lorsque l'on est dans un bloc HTML)
echo (isset($test)) ? "La variable test existe <br>" : "La variable test n'existe pas <br>";


$allVars = get_defined_vars();

foreach ($allVars as $varName => $varValue) {
    echo "Nom de la variable : $varName <br>";
}
