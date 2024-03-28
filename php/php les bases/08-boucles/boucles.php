<?php
include '../nav_global/nav.php';

// 01 - boucles while
// j'initialise ma variable $i en lui affectant la valeur 0
// souvant on initiallise à 0 car le premier indice d'un tableau est l'indice 0 (les boucles servent beaucoup à travailler sur les tableaux)
$i = 0;

// dans la parenthèse on donne la condition pour que la boucle puisse donctionner (tant que la valeur de $i ne dépasse pas 10)
/*
    while ($i <= 20) {
        tant que la condition est respectée, on exécute ce qui est dans ce bloc d'instructions (on affiche ce qui est après echo)
        echo "Tour de boucle " . $i . "<br>";
        incrémentation de $i
        $i++
    }
*/

while ($i <= 20) {
    if ($i == 10) {
        echo "Tour de boucle " . $i . "<br>";
    } else {
        echo "Tour de boucle " . $i . "--- <br>";
    }
    $i++;
}



// 02 - do while() pas très utilisée, presque jamais
$i = 0;

do {
    echo "Tour de boucle" . $i . "*** <br>";
    $i += 2;
} while ($i <= 10);


echo "<br>";
//  03 - boucles for
for ($i = 0; $i < 10; $i++) {
    echo "ligne " . $i . "<br>";
}



//  03.5 utilisation d'une boucle for pour créer un séléecteur
echo "<br>";

echo "<form>";
echo "<select>";
echo "<option selected>Sélectionner l'année</option>";
for ($annee = date('Y'); $annee >= date('Y') - 100; $annee--) {
    echo "<option> $annee </option>";
}
echo "</select>";
echo "</form>";




// 04 - double for imbriquée
echo "<br>";

echo "<table border='1' style='border-collapse:collapse'>";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td> $i </td>";
}
echo "</tr>";
echo "</table>";

echo "<br>";


$ligne = 0;
$celulle = 0;

echo "<table border='1' style='border-collapse:collapse'>";
for ($ligne = 0; $ligne <= 9; $ligne++) {
    echo "<tr>";
    for ($celulle = 0; $celulle <= 9; $celulle++) {
        echo "<td>" . (10 * $ligne + $celulle) + 1 . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
