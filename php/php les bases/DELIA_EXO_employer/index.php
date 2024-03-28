<?php

require_once('lib/db_connect.php');
require_once('objects/Employer.php');

if (!empty($_GET['delete'])) {
    $deleteEmployer = new Employer($db);
    $deleteEmployer->delete($_GET['delete']);
}

$employerAll = new Employer($db);
$arrayEmployer = $employerAll->selectALL();

// echo "<pre>";
// print_r($arrayEmployer);
// echo "</pre>";

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

    <table>
        <tr class="headTable">
            <th>id Employer</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Service</th>
            <th>Date d'embauche</th>
            <th>Salaire</th>
            <th>Id secteur</th>
            <th>Voir</th>
            <th>Modif</th>
            <th>Supp</th>
        </tr>
        <?php foreach ($arrayEmployer as $singleEmployer) { ?>
            <tr class="listEmployer">
                <td><?= $singleEmployer['idEmploye'] ?></td>
                <td><?= $singleEmployer['prenom'] ?></td>
                <td><?= $singleEmployer['nom'] ?></td>

                <?php if ($singleEmployer['sexe'] == "m") { ?>
                    <td><i class="fa-solid fa-mars" style="color: #1086e0;"></i></td>
                <?php } else { ?>
                    <td><i class="fa-solid fa-venus" style="color: #cf59a4;"></i></td>
                <?php } ?>


                <td><?= $singleEmployer['service'] ?></td>
                <td><?= $singleEmployer['dateEmbauche'] ?></td>
                <td><?= $singleEmployer['salaire'] ?></td>
                <td><?= $singleEmployer['idSecteur'] ?></td>

                <td><a href="single_employer.php?select=<?= $singleEmployer['idEmploye'] ?>">
                        <div class="see icons"><i class="fa-solid fa-eye"></i></div>
                    </a></td>

                <td><a href="modifier_employer.php?edit=<?= $singleEmployer['idEmploye'] ?>">
                        <div class="edit icons"><i class="fa-solid fa-pen"></i></div>
                    </a></td>

                <td><a href="index.php?delete=<?= $singleEmployer['idEmploye'] ?>">
                        <div class="trash icons"><i class="fa-solid fa-trash-can"></i></div>
                    </a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>