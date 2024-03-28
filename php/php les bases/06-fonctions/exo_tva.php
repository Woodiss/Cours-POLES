<?php
include '../nav_global/nav.php';
?>

<?php
// exercice avec une fonction qui va calculer la Tva pour un prix HT

function calculTva($prix)
{
    // return permet de conserver en mémoire un résultat, récupérable ensuite dans notre code
    return $prix * 1.2 . "€ TTC";
}


// j'exécute en affichant le résultat
echo calculTva(100) . "<br>";
echo calculTva(80) . "<br>";


/* ETAPE 1
elle devra recevoir le prix en argument, puis elle calculera le prix TTC
    OBJECTIF: le fonction est capable de calculer le prix TTC de n'importe quel chiffre etpas juste 100
*/

function calculTva2($prix)
{
    return $prix * 1.2 . "€ TTC";
}

echo calculTva2(500) . "<br>";

/* ETAPE 2
La fonction doit à présent calculer un prix TTC en fonction de deux arguments qu'on dois lui donner. le prix HT, mais aussi quel est le taux Tva a appliquer au prix HT
*/

function calculTva3($prix, $Tva)
{
    return $prix * $Tva . "€ TTC";
}

echo calculTva3(500, 1.055) . "<br>";
echo calculTva3(300, 1.2) . "<br>";


// cette fonction prendras toujours deux arguments, sauf que celui concernant le taux TVA va recevoir une valeur par défaut ($taux = 1.2)
function calculTva4($prix, $taux = 1.2)
// si il n'y a pas de 2eme argument au moment de l'apelle de cette fonctione le fonctione prendras la valeur 1.2 en valeur par défaut
{
    return $prix * $taux . "€ TTC";
}

// au moment de l'exécution si je ne donne qu'un argument (100) alors ma fonction va lui appliquer le taux par defaut(1.2)
echo calculTva4(100) . "<br>";

// ici, le 1.3 va remplacer la valeur par défaut de $taux 
echo calculTva4(100, 1.3) . "<br>";




function calculTva5($prix, $taux = 1.2, $autreArgument)
{
    // Utilisez $prix et $taux comme nécessaire
    return "Prix : " . $prix . " € | Taux : " . $taux . " | Autre argument : " . $autreArgument;
}

// pour appeler une function ayant plusieurs argument dont un par defaut, il faut mettre "null" si ont ne peux pas le définir mais apellé les argument suivant
echo calculTva5(100, null, "Valeur de l'autre argument") . "<br>";
