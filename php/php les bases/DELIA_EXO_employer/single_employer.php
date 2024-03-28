<?php
require_once('lib/db_connect.php');
require_once('objects/Employer.php');

if (!empty($_GET['select'])) {

    $employerId = new Employer($db);
    $singleEmployer = $employerId->selectById($_GET['select']);
} else {
    header('Location: index.php');
}

// echo "<pre>";
// print_r($singleEmployer);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un employer</title>
    <link rel="stylesheet" type="" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php require_once('components/nav.php') ?>


    <div class="container">
        <div class="title">
            <h1>Profil de </h1>
            <h2><?= ucfirst($singleEmployer['prenom']) . " " . ucfirst($singleEmployer['nom']) ?></h2>
        </div>

        <div class="card">
            <p>Prenom : <?= $singleEmployer['prenom'] ?></p>
            <p>Nom : <?= $singleEmployer['nom'] ?></p>
            <p>Sexe : <?= $singleEmployer['sexe'] ?></p>
            <p>Service : <?= $singleEmployer['service'] ?></p>
            <p>Date d'embauche : <?= $singleEmployer['dateEmbauche'] ?></p>
            <p>Salaire : <?= $singleEmployer['salaire'] ?>€/mois</p>
            <p>Secteur : <?= $singleEmployer['idSecteur'] ?></p>
        </div>

    </div>
</body>

</html>