<?php
// header("Location: index9.php");

$bdd = new PDO("mysql:host=localhost;dbname=ajax_tp", "root", "");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_POST['mode'] == "1") {

    $idClient = $_POST['id'];
    $reponse = $bdd->query("SELECT * FROM client WHERE id= $idClient");
    $lignes = $reponse->fetchAll();
    $ligne = $lignes[0];

    $chaine =  '[';
    $chaine .= '{';
    $chaine .= '"id": "' . $ligne['id'] . '",';
    $chaine .= '"civilite": "' . $ligne['civilité'] . '",';
    $chaine .= '"nom": "' . $ligne['nom'] . '",';
    $chaine .= '"prenom": "' . $ligne['prenom'] . '",';
    $chaine .= '"adresse": "' . $ligne['adresse'] . '",';
    $chaine .= '"code_postal": "' . $ligne['code_postal'] . '",';
    $chaine .= '"ville": "' . $ligne['ville'] . '",';
    $chaine .= '"carte": "' . $ligne['carte'] . '"';
    $chaine .= '},';

    $chaine =  substr($chaine, 0, -1);
    $chaine .= ']';
    echo $chaine;
    $reponse->closeCursor();
}


if ($_POST['mode'] == "2") {

    $reponse = $bdd->query("SELECT * FROM prestation");
    $lignes = $reponse->fetchAll();


    $chaine =  '[';
    foreach ($lignes as $ligne) {
        $chaine .= '{';
        $chaine .= '"code": "' . $ligne['code'] . '",';
        $chaine .= '"prestation": "' . $ligne['prestation'] . '",';
        $chaine .= '"cout": "' . $ligne['cout'] . '"';
        $chaine .= '},';
    }

    $chaine =  substr($chaine, 0, -1);
    $chaine .= ']';
    echo $chaine;
    $reponse->closeCursor();
}
