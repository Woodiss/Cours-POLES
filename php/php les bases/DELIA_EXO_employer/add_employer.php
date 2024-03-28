<?php
require_once('lib/db_connect.php');
require_once('objects/Employer.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (!empty($_POST)) {
    extract($_POST);

    if (!empty($prenom) && !empty($nom) && !empty($sexe) && !empty($service) && !empty($dateembauche) && !empty($salaire) && !empty($idsecteur)) {

        $addEmployer = new Employer($db);
        $addEmployer->add($prenom, $nom, $sexe, $service, $dateembauche, $salaire, $idsecteur);

        header("Location: index.php");
    }
}

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
            <h1>Formulaire</h1>
            <h2>d'ajout</h2>
        </div>

        <form method="POST" class="form">
            <label for="prenom">Prenom :</label>
            <input type="text" id="prenom" name="prenom">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">

            <label for="sexe">Sexe :</label>
            <input type="text" id="sexe" name="sexe">

            <label for="service">Services :</label>
            <input type="text" id="service" name="service">

            <label for="dateembauche">Date d'emchauche :</label>
            <input type="date" id="dateembauche" name="dateembauche">

            <label for="salaire">Salaire :</label>
            <input type="number" id="salaire" name="salaire">

            <label for="idsecteur">Id secteur :</label>
            <input type="number" id="idsecteur" name="idsecteur">

            <button class="btn">Envoyer</button>
        </form>
    </div>
</body>

</html>