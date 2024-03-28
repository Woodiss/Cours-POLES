<?php
session_start();
include '../nav_global/nav.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil de <?= $_SESSION['prenom'] ?></title>
</head>

<body>

    <?php if (isset($_SESSION)) : ?>

        <h1>Bienvenue <?= $_SESSION['prenom'] ?></h1>
        <p>Sur ce site, vous avez le status d'<?= $_SESSION['statut'] ?></p>

    <?php endif; ?>


</body>

</html>