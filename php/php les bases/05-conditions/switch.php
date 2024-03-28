<?php
include '../nav_global/nav.php';
?>

<?php

$couleur = "blue";

// je déclare une variable en lui affectant une valeur

switch ($couleur) {
        // elle débute avec une case qui test une valeur
    case "vert":
        echo "La couleur est bien vert <br>";
        break;
        // un break pour passer a la case suivant si celle ci n'est pas vérifié
        // le break dois être codé pour chaque case, Sinon, même si le case est vérifié, il va aller tester les case suivant
    case "blue":
        echo "La couleur est bien bleu <br>";
        break;
    case "rouge":
        echo "La couleur est bien rouge <br>";
        break;
    default:
        echo "La couleur est inconnue <br>";
}


// code la même en if/elseif

if ($couleur == "vert") {
    echo "La couleur est bien vert <br>";
} elseif ($couleur == "rouge") {
    echo "La couleur est bien rouge <br>";
} elseif ($couleur == "blue") {
    echo "La couleur est bien bleu <br>";
} else {
    echo "La couleur est inconnue <br>";
}
