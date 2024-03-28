<?php
// require_once('../lib/db.php');

$sqlSelectUser = "SELECT p.id_product, p.title, AVG(v.note) AS moyenne_vote FROM  product p LEFT JOIN  vote v ON p.id_product = v.id_product GROUP BY  p.id_product, p.title;";

$tableSelectUser = mysqli_query($db_connect, $sqlSelectUser);

$rows = mysqli_fetch_all($tableSelectUser, MYSQLI_ASSOC);

// Réindexez le tableau en utilisant l'ID du produit comme index
$indexedRows = array_column($rows, null, 'id_product');

// echo "<pre>";
// print_r($indexedRows);
// echo "</pre>";
