<?php
$bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$reponse = $bdd->query("select count(*) as nbr from produit where categorie_id=".$_GET["cat_id"]);
$rst = $reponse->fetch();
echo $rst["nbr"];

$reponse->closeCursor();
?>
