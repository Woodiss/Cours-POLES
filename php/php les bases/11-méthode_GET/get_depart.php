<?php
include '../nav_global/nav.php';


// la méthode GET(superglobale) permet de véhiculer des informations dans l'URL pour récupérer sur un autre fichier (ou a un endroit du même ficher) pour un affichage spécial

// prémier exemple, je récupére les informations sur la même page (comme un one-page)
// deuxième exemple en récupérant les infos sur une autre page
// dans l'attribut href, d'abord j'indiue le nim du fichier ou je veux récupérer les infos, puis j'écris "?" pour envoyer les infos. Chaque info étant séparée de la précédente par un "&"
// target='_blank' permet d'ouvrir la nouvelle page dans un nouvel onglet

if (!$_GET) {
    echo "<button><a href='get_arriver.php?produit=Gateau&variete=fraise&prix=12' target='_blank'>Tester</a></button>";
}
