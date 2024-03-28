<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$erreur = "";
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    $erreur .= "le mail " .  $_post['email'] .  " est incorrecte <br>";
}


$nom = preg_replace('/[^A-Za-z0-9À-ÿ ]/u', '', "Stéphane@_é~~");
$prenom = preg_replace('/[^A-Za-z0-9À-ÿ ]/u', '', $_POST['prenom']);

if (!isset($_POST['domaine'])) {
    $erreur .= "Vous devez choisir un domaine<br>";
}

if (!isset($_POST['lang'])) {
    $erreur .= "Vous devez choisir une langue<br>";
}

if (!isset($_POST['sexe'])) {
    $erreur .= "Vous devez choisir un sexe<br>";
}

if ($erreur != "") {
    echo $erreur;
}

?>

<style>
    td {
        width: 150px;
        padding: 10px;
    }

    .none {
        display: none;
    }
</style>

<table border='1' style='border-collapse:collapse;' class="<?php if ($erreur != "") {
                                                                echo "none";
                                                            } ?>">
    <tbody>
        <tr>
            <td>Champs</td>
            <td>Valeurs</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><?php echo $nom ?></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><?php echo $prenom ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_POST['email'] ?></td>
        </tr>
        <tr>
            <td>Sexe</td>
            <td><?php echo $_POST['sexe'] ?></td>
        </tr>
        <tr>
            <td>Domaine</td>
            <td><?php echo implode(",", $_POST['domaine']) ?></td>
        </tr>
        <tr>
            <td>Pays</td>
            <td><?php echo $_POST['pays'] ?></td>
        </tr>
        <tr>
            <td>Langage</td>
            <td><?php echo implode(",", $_POST['lang']) ?></td>
        </tr>
    </tbody>
</table>