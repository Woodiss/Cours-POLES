<?php
// header("Location: index9.php");

$bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// print_r($_POST);
// exit;
if ($_POST['get'] == "cat") {

    $cat = $_POST['cat'];

    $reponse = $bdd->query("SELECT * FROM categorie WHERE label LIKE '$cat%'");


    // premiere façon de faire (créer directement les balises options)
    // $rst = $reponse->fetchAll();
    // foreach ($rst as $value) {
    //     echo "<option value='" . $value['id'] . "'>" . $value['label'] . "</option>";
    // }

    // 2eme façon de faire (créer une chaine de caractère et laisse JS les traitée)
    $chaine = "";
    while ($ligne = $reponse->fetch()) {
        $chaine .= $ligne['id'] . ',' . $ligne['label'] . ';';
    }
    echo $chaine;

    // libère la connexion au serveur afin que d'autres instructions SQL puissent être émises
    $reponse->closeCursor();
}



if ($_POST['get'] == "produit" && !empty($_POST['selectcat'])) {

    $selectcat = $_POST['selectcat'];

    $reponse = $bdd->query("SELECT * FROM produit WHERE categorie_id = $selectcat");

    $rst = $reponse->fetchAll();

    // var_dump($rst);
    foreach ($rst as $key => $value) {
        echo "<option value='" . $value['id'] . "'>" . $value['label'] . "</option>";
    }
    $reponse->closeCursor();
}

if ($_POST['get'] == "price" && !empty($_POST['produit'])) {

    $produit = $_POST['produit'];

    $reponse = $bdd->query("SELECT * FROM produit WHERE id = $produit");

    $rst = $reponse->fetchAll();

    // var_dump($rst);
    foreach ($rst as $key => $value) {
        echo $value['prix'];
    }
    $reponse->closeCursor();
}
