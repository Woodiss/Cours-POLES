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

$id = $_GET['id_product'];
$productSelect = mysqli_fetch_all(mysqli_query($db_connect, "SELECT * FROM `product` WHERE id_product = $id"), MYSQLI_ASSOC);

echo "<pre>";
print_r($productSelect);
echo "</pre>";

if ($productSelect[0]['hide'] == 0) {

    mysqli_query($db_connect, "UPDATE `product` SET `hide`='1' WHERE id_product = $id");
    header('Location: index.php');
} else {

    mysqli_query($db_connect, "UPDATE `product` SET `hide`='0' WHERE id_product = $id");
    header('Location: index.php');
}
