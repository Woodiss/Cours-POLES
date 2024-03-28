<?php
$group = array("jalal", "nawfel", "stéphane", "bachir", "michael", "guillaume");
$nom = $_GET['nom'];

if (in_array(strtolower($nom), $group)) {
    echo "Salut " . $nom;
    // trim supprimer les espace au début et à la fin
} else if (trim($nom) == "") {
    echo "Bonjour inconnu, quel est votre nom ?";
} else {
    echo "Bonjour " . $nom . " je ne vous connais pas";
}
