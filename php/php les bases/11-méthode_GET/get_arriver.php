<?php
include '../nav_global/nav.php';


// ce code n'est valable que si on veut récupérer les infos sur la même page
if ($_GET) {
    echo $_GET['produit'] . " à la " . $_GET['variete'] . "<br>";
    echo "Vendu au prix de " . $_GET['prix'] . "€, aujourd'hui seulement !";
}

// foreach ($_GET as $indice => $valeur) {
//     echo "<p> $valeur a pour indice $indice </p>";
// }
