<?php

$bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$reponse = $bdd->query("SELECT count(*) as nbr FROM produit WHERE categorie_id=" . $_GET['cat_id']);

$rst = $reponse->fetch();

// echo "<pre>";
// print_r($rst);
// echo "</pre>";
echo $rst['nbr'];

$reponse->closeCursor();
