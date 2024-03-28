<?php
$bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_POST["mode"] == 1) {
    $reponse = $bdd->query("select * from categorie where label LIKE '" . $_POST['cat'] . "%'");
    $lignes = $reponse->fetchAll();
    echo '<?xml version="1.0" encoding="UTF-8" ?>';
    echo '<categories>';
    foreach($lignes as $ligne) {
        echo '<categorie>';
        echo '<id>'.$ligne['id'].'</id>';
        echo '<label>'.$ligne['label'].'</label>';
        echo '</categorie>';
    }
    echo '</categories>';
    $reponse->closeCursor();
}elseif($_POST["mode"] == 2 && $_POST['cat'] != "")
{
    $reponse = $bdd->query("select * from produit where categorie_id = " . $_POST['cat']);

    echo '<?xml version="1.0" encoding="UTF-8" ?>';
    echo '<produits>';
    while ($ligne = $reponse->fetch())
    {
        echo '<produit>';
        echo '<id>'.$ligne["id"].'</id>';
        echo '<label>'.$ligne["label"].'</label>';
        echo '</produit>';
    }
    echo '</produits>';
    $reponse->closeCursor();
}elseif($_POST["mode"] == 3 && $_POST['id_produit'] != "")
{
    $reponse = $bdd->query("select * from produit where id = " . $_POST['id_produit']);
    echo $reponse->fetch()['prix'];
    $reponse->closeCursor();
}
?>
