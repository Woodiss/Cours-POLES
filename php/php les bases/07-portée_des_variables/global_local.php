<?php
include '../nav_global/nav.php';


// les variables déclarées dans l'un des deux espaces ne sont pas reconnues automatiquement dans l'autre espace

// du global vers le local
// ci dessous, la variable $pays déclarée dans l'espace global ne sera pas reconnue dans l'espace local (dans la fonction) si je n'utilise pas le mot clé global pour importer ma variable dans l'espace local. Sinon undefined variable $pays

$pays = "France";

function affichePays()
{
    // global $pays permet d'appeler une variable qui ce trouve en dehors de la fonction
    global $pays;
    echo $pays;
}

echo affichePays() . "<br>";

// du local au global

function afficheJour()
{
    $jour = "mercredi";
    return $jour;
    // pour récupérer la valeur de la variable $jour je dois utilisé le mot clé RETURN sinon même erreur undefined variable $jour
    echo "Demain nous serons samedi <br>";
    // cette phrase ne s'afficheras pas car le RETURN sort de la function
}

echo afficheJour();
