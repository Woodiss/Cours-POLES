<?php

session_start();
include '../nav_global/nav.php';


// une session sert à conserver des informations temporaire. On peut ouvrire une session pour l'utilisateur qui a mis un produit dans son panier mais on n'envoie pas cette information en BDD, car elle n'est pas définitive. Peut-être va t-il supprimer ce produit de son panier, ou ajouter un deuxieme etc...

// pour qu'une session puisse être débutée et que l'on puisse récuperer des informations, il faut déclarer en haut du dicher, avant toute chose (doctype etc) un session_start


$_SESSION['prenom'] = "Delia";
$_SESSION['statut'] = "admin";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Départ</title>
</head>

<body>
    <button><a href="../13-sessions/sessions_arriver.php">Aller ver le profil</a></button>
</body>

</html>