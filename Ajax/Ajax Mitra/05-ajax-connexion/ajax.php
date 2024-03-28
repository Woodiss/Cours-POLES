<?php

// --1-- connexion BDD
// ⚡️ pour Mac ⚡️
$host = 'localhost';
$bdd = 'connexion';
$user = 'root';
$mdp = ''; // pour WINDOWS le mdp est vide
// $mdp = 'root'; // ⚡️ pour MAC ⚡️ le mdp est root

# variable de réception pour la connexion à la BDD
$pdo = new PDO(
    'mysql:host=' . $host . ';dbname=' . $bdd,
    $user,
    $mdp,
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    )
);


// je prépare le tableau array qui contiendra la réponse
$tab = array();
$tab['validation'] = '';
$tab['message'] = '';

if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    // $verif = $pdo->query("SELECT * FROM user WHERE pseudo = '$pseudo' AND mdp = '$mdp'");
    $verif = $pdo->prepare("SELECT * FROM user WHERE pseudo = :pseudo AND mdp = :mdp");
    $verif->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
    $verif->bindParam(":mdp", $mdp, PDO::PARAM_STR);
    $verif->execute();

    if ($verif->rowCount() > 0) {
        // s'il y a plus de 0 lignes, alors le pseudo et mdp sont coreects
        $tab['validation'] = 'OK';

        $info = $verif->fetch(PDO::FETCH_ASSOC);
        $tab['message'] = '<div class="alert alert-success" role="alert">';

        foreach ($info as $indice => $valeur) {
            $tab['message'] .= '<b>'. $indice .' : </b>' . $valeur .'<br>';
        }

        $tab['message'] .= '</div>';
    } else {
        // le psseudo ou le mdp est faux ou les deux
        $tab['validation'] = 'NOK';
        $tab['message'] = '<div class="alert alert-danger" role="alert">Attention, le pseudo et/ou le mot de passe sont incorrects<br>Veuillez vérifier vos identifiants</div>';
    } // FIN  if($verif->rowCount()
} // FIN if(!empty($_POST['pseudo']) &&
echo json_encode($tab);
