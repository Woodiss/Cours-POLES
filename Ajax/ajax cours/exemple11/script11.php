<?php
// header("Location: index9.php");

$bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// print_r($_POST);
// exit;
if ($_POST['get'] == "cat") {

    $cat = $_POST['cat'];

    $reponse = $bdd->query("SELECT * FROM categorie WHERE label LIKE '$cat%'");


    $lignes = $reponse->fetchAll();

    echo '<?xml version="1.0" encoding="UTF-8" ?>';
    echo '<categories>';
    foreach ($lignes as $ligne) {
        echo '<categorie>';
        echo '<id>' . $ligne['id'] . '</id>';
        echo '<label>' . $ligne['label'] . '</label>';
        echo '</categorie>';
    }
    echo '</categories>';

    // libère la connexion au serveur afin que d'autres instructions SQL puissent être émises
    $reponse->closeCursor();
}



if ($_POST['get'] == "produit" && !empty($_POST['selectcat'])) {

    $selectcat = $_POST['selectcat'];

    $reponse = $bdd->query("SELECT * FROM produit WHERE categorie_id = $selectcat");

    $lignes = $reponse->fetchAll();

    echo '<?xml version="1.0" encoding="UTF-8" ?>';
    echo '<produits>';
    foreach ($lignes as $ligne) {
        echo '<produit>';
        echo '<id>' . $ligne['id'] . '</id>';
        echo '<label>' . $ligne['label'] . '</label>';
        echo '</produit>';
    }
    echo '</produits>';
    $reponse->closeCursor();
}

if ($_POST['get'] == "price" && !empty($_POST['produit'])) {

    $produit = $_POST['produit'];

    $reponse = $bdd->query("SELECT * FROM produit WHERE id = $produit");

    $rst = $reponse->fetch();

    // var_dump($rst);

    echo $rst['prix'];

    $reponse->closeCursor();
}
