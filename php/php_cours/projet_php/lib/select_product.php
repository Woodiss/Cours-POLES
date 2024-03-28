<?php




if (empty($_GET['category'])) {

    $sqlSelectProduct = "SELECT p.*, u.* FROM `product` p INNER JOIN `user` u ON p.id_user = u.id_user";
} else {

    $category = $_GET['category'];

    $checkId = "SELECT * FROM `product` WHERE `id_category` = $category";
    $sqlCheckId = mysqli_query($db_connect, $checkId);

    if (mysqli_num_rows($sqlCheckId) > 0) {

        $sqlSelectProduct = "SELECT p.*, u.* FROM `product` p INNER JOIN `user` u ON p.id_user = u.id_user WHERE p.`id_category` = $category";
    } else {
        header('Location: index.php');
        exit;
    }
}

$tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);
$product = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);


