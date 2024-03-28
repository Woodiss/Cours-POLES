<?php

session_start();
require_once('../lib/db.php');
require_once('../lib/select_product.php');



if (empty($_SESSION)) {
    header('Location: login.php');
    exit;
}

if ($_SESSION['user_statut'] == 0) {
    header('Location: ../index.php');
    exit;
}

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if (!empty($_POST)) {
    // récup l'image
    $image = $_FILES["image"];
    $image_nom = $image["name"];
    $image_tmp = $image["tmp_name"];


    // Déplacez l'image dans le dossier d'images


    if ((!empty($_POST['firstName'])) && (!empty($_POST['lastName'])) && (!empty($_POST['mail'])) && (!empty($image_nom))) {

        move_uploaded_file($image_tmp, "../backoffice/image_profile/" . $image_nom);
        extract($_POST);
        $id_user = $_SESSION['id_user'];

        $sqlProfil = "UPDATE `user` SET `firstname`='$firstName',`lastname`='$lastName',`email`='$mail',`profile_image`='$image_nom' WHERE id_user = $id_user";

        if (mysqli_query($db_connect, $sqlProfil)) {

            $selectUser = "SELECT * FROM `user` WHERE id_user = $id_user";

            $tableSelectUser = mysqli_query($db_connect, $selectUser);

            if (mysqli_num_rows($tableSelectUser) == 1) {

                $user = mysqli_fetch_assoc($tableSelectUser);

                $_SESSION['firstname'] = $user['firstname'];
                $_SESSION['lastname'] = $user['lastname'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['profile_image'] = $user['profile_image'];
            } else {

                echo "erreur au reset de la session ! ";
            }

            header('Location: index.php');
        } else {
            echo "erreur au moment de l'envoie";
        }
    } else {

        header('Location: edit_profile.php?erreur=true');
    }
} else {

    header('Location: edit_profile.php');
}
