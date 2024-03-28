<?php
if (!empty($_POST)) {
    if ((empty($_POST['prenom'])) || (empty($_POST['nom']))) {
        echo "<p>Les champs ne sont pas remplie</p>";
    } else {
        echo "<p>Bienvenue " . $_POST['prenom'] . " " . $_POST['nom'] . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <label for="prenom">Prénom: </label>
        <input type="text" id="prenom" name="prenom">

        <label for="nom">Nom: </label>
        <input type="text" id="nom" name="nom">

        <input type="submit">
    </form>

</body>

</html>