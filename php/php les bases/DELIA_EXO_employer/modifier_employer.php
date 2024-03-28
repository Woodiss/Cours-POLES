<?php
require_once('lib/db_connect.php');
require_once('objects/Employer.php');
if (!empty($_GET['edit'])) {

    $selectById = new Employer($db);
    $selectEmployer = $selectById->selectById($_GET['edit']);
} else {
    header("Location: index.php");
}


if (!empty($_POST)) {
    extract($_POST);

    if (!empty($prenom) && !empty($nom) && !empty($sexe) && !empty($service) && !empty($dateembauche) && !empty($salaire) && !empty($idsecteur)) {

        $editEmployer = new Employer($db);
        $editEmployer->editById($_GET['edit'], $prenom, $nom, $sexe, $service, $dateEmbauche, $salaire, $idSecteur);
        header("Location: index.php");
    }
}


echo "<pre>";
print_r($selectEmployer);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes des employer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="" href="style/style.css">
</head>

<body>

    <?php require_once('components/nav.php') ?>

    <div class="container">
        <div class="title">
            <h1>Formulaire</h1>
            <h2>d'ajout</h2>
        </div>

        <form method="POST" class="form">
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom" value="<?= $selectEmployer['prenom'] ?>">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="<?= $selectEmployer['nom'] ?>">

            <label for="sexe">Sexe :</label>
            <input type="text" id="sexe" name="sexe" value="<?= $selectEmployer['sexe'] ?>">

            <label for="service">Services :</label>
            <input type="text" id="service" name="service" value="<?= $selectEmployer['service'] ?>">

            <label for="dateembauche">Date d'emchauche :</label>
            <input type="date" id="dateembauche" name="dateembauche" value="<?= $selectEmployer['dateEmbauche'] ?>">

            <label for="salaire">Salaire :</label>
            <input type="number" id="salaire" name="salaire" value="<?= $selectEmployer['salaire'] ?>">

            <label for="idsecteur">Id secteur :</label>
            <input type="number" id="idsecteur" name="idsecteur" value="<?= $selectEmployer['idSecteur'] ?>">

            <button class="btn">Envoyer</button>
        </form>
    </div>
</body>

</html>