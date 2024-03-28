<?php
$bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if($_POST["mode"] == 1) {
    $reponse = $bdd->query("select * from categorie where label LIKE '" . $_POST['cat'] . "%'");
    $lignes = $reponse->fetchAll();

    $chaine = '[';
    foreach($lignes as $ligne) {
        $chaine .= '{';
        $chaine .= '"id": "'.$ligne['id'].'",';
        $chaine .= '"label": "'.$ligne['label'].'"';
        $chaine .= '},';
    }
    $chaine = substr($chaine, 0, strlen($chaine)-1);
    $chaine .= ']';
    echo $chaine;
    $reponse->closeCursor();
}elseif($_POST["mode"] == 2 && $_POST['cat'] != "")
{
    $reponse = $bdd->query("select * from produit where categorie_id = " . $_POST['cat']);
    $chaine = '[';
    while ($ligne = $reponse->fetch())
    {
        $chaine .= '{';
        $chaine .= '"id": "'.$ligne['id'].'",';
        $chaine .= '"label": "'.$ligne['label'].'"';
        $chaine .= '},';
    }
    $chaine = substr($chaine, 0, strlen($chaine)-1);
    $chaine .= ']';
    echo $chaine;
    $reponse->closeCursor();
}elseif($_POST["mode"] == 3 && $_POST['id_produit'] != "")
{
    $reponse = $bdd->query("select * from produit where id = " . $_POST['id_produit']);
    echo $reponse->fetch()['prix'];
    $reponse->closeCursor();
}
?>
