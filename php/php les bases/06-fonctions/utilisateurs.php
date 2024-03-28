<?php
include '../nav_global/nav.php';
?>

<?php

// la fonction utilisateur, par opposition à prédifine est celle qui n'existe pas. Que nous allons coder pour nos propres besoins, par rapport aux fonctionnalités du site

function salut($prenom)
{
    echo "Salut " . $prenom . "<br>";
}

// le paramètre  "Woodis" qui sera donné au moment où l'on exécute. Ce paramètre étant envoyer en ligne 153 pour être concaténé au reste de la chaine de caractères
salut("Woodis");
