<?php
session_start();
require_once('../lib/db.php');

if (empty($_SESSION)) {
    header('Location: login.php');
    exit;
}

if ($_SESSION['user_statut'] == 0) {
    header('Location: ../index.php');
    exit;
}

if (!empty($_GET)) {
    $id = $_GET['id_product'];

    $sqlDelete = "DELETE FROM `product` WHERE id_product = $id";
    if (mysqli_query($db_connect, $sqlDelete)) {
        header('Location: index.php');
    } else {
        echo "ERREUR";
    }
}
