<?php

session_start();
require_once('../lib/db.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";


if (!empty($_POST)) {
    if (!empty($_POST['note']) && !empty($_POST['id_product'])) {

        extract($_POST);

        $idUser = $_SESSION['id_user'];
        $sqlAddVote = "INSERT INTO `vote`(`id_user`, `id_product`, `note`) VALUES ('$idUser','$id_product','$note')";

        if (mysqli_query($db_connect, $sqlAddVote)) {
            header('Location: product_consult.php?id=' . $id_product);
        } else {
            echo "erreur";
        }
    }
}
