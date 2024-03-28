<?php
require_once('inc/init.inc.php');

$tab = array();

$mode = ''; // décide de l'action à appliquer

if (!empty($_POST['mode'])) {
    $mode = $_POST['mode'];
}

$tab['validation'] = '';
$tab['message'] = '';

if ($mode == "connexion") {

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
            $_SESSION['user'] = array();
            foreach ($info as $key => $value) {
                $_SESSION['user'][$key] = $value;
            }


        } else {
            // le pseudo ou le mdp est faux ou les deux
            $tab['validation'] = 'NOK';
            $tab['message'] = '<div class="alert alert-danger" role="alert">Attention, le pseudo et/ou le mot de passe sont incorrects<br>Veuillez vérifier vos identifiants</div>';
        } // FIN  if($verif->rowCount()
    } // FIN if(!empty($_POST['pseudo'])

} elseif ($mode == 'enregistrer') {
    // enregistrement des articles
    
    if (!empty($_POST['titre']) && !empty($_POST['categorie']) && !empty($_POST['contenu']) && isset($_POST['photo'])) {
        // si tous les champs sont renseignés je peux insérer en BDD
        $resultat = $pdo->prepare("INSERT INTO article (titre, categorie, contenu, date_enregistrement, photo, id_auteur) VALUES (:titre, :categorie, :contenu, NOW(), :photo, :id_auteur) ");
        
        $resultat->bindParam(':titre', $_POST['titre'], PDO::PARAM_STR);
        $resultat->bindParam(':categorie', $_POST['categorie'], PDO::PARAM_STR);
        $resultat->bindParam(':contenu', $_POST['contenu'], PDO::PARAM_STR);
        $resultat->bindParam(':photo', $_POST['photo'], PDO::PARAM_STR);
        $resultat->bindParam(':id_auteur', $_SESSION['user']['id_user'], PDO::PARAM_STR);
        
        $resultat->execute();
        
        $tab['message'] = '<div class="alert alert-success">Votre article a bien été enregistré.</div>';
    }
  // END if($mode == "enregistrer")
  
} elseif($mode == 'afficher') {

    $query = "
    SELECT 
        titre, 
        categorie, 
        contenu, date_format(date_enregistrement, 'Le %d/%m/%Y à %H:%i:%s') AS date_fr,
        pseudo,
        photo,
        avatar
    FROM 
        user,
        article 
    WHERE 
        id_auteur = id_user
    ORDER BY 
        date_enregistrement DESC";

    // récupération des articles pour affichage
    // $liste = $pdo->query("SELECT titre, categorie, contenu, date_format(date_enregistrement, 'Le %d/%m/%Y à %H:%i:%s') AS date_fr FROM article ORDER BY date_enregistrement DESC");

    $liste = $pdo->query($query);

    $tab['message'] .= '<div class="alert alert-info w-100">Nombre d\'articles : ' . $liste->rowCount() . '</div>';

    while($article_en_cours = $liste->fetch(PDO::FETCH_ASSOC)) {
        
        /*
        // on garde la structure qui suit juste pour une autre utilisation au besoin
        $tab['message'] .= '<div class="col-sm-12 mt-2">';
        $tab['message'] .= '<h3 class="bg-info text-white p-2">' . $article_en_cours['titre'] . '</h3>';
        $tab['message'] .= '<img src="' . $article_en_cours['photo'] . '" class="img-thumbnail">';
        $tab['message'] .= '<hr>' . $article_en_cours['date_fr'] . ' - Catégorie : <a href="" class="filtre_categorie">' . $article_en_cours['categorie']. '</a><hr>';
        $tab['message'] .= '<p>' . $article_en_cours['contenu'] . '</p>';
        $tab['message'] .= '</div>';
        */

        $tab['message'] .= '<div class="col-sm-12 mt-5 border border-info"><div class="row"><h3 class="bg-info text-white p-2 w-100">' . $article_en_cours['titre'] . '</h3>';

        $tab['message'] .= '<div class="col-sm-5 text-center">';
            $tab['message'] .= '<img src="' . $article_en_cours['photo'] . '" class="img-thumbnail w-100 mt-2"><hr>';
            $tab['message'] .= '<img src="' . $article_en_cours['avatar'] . '" class="rounded-circle img-thumbnail mb-2"><br>';
            $tab['message'] .= '&Eacute;crit par : <i>' . $article_en_cours['pseudo'] . '</i><br>';
            $tab['message'] .= $article_en_cours['date_fr'] . '<br>';

        $tab['message'] .= '</div>';

        $tab['message'] .= '<div class="col-sm-7">';
            // $tab['message'] .= '<h3 class="bg-info text-white p-2">' . $article_en_cours['titre'] . '</h3>';
            $tab['message'] .= '<p class="mt-4">' . $article_en_cours['contenu'] . '</p>';

        $tab['message'] .= '</div>';

        $tab['message'] .= '</div></div>';

    }
}

echo json_encode($tab);
