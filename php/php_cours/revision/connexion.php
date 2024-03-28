<?php
$serveurName = "localhost";
$loginDB = "root";
$passwordDB = "";
$DBname = "shop";

// $db_connect = mysqli_connect($serveurName, $loginDB, $passwordDB, $DBname);
$db_connect = new mysqli($serveurName, $loginDB, $passwordDB, $DBname);

if ($db_connect->connect_error) {
    die("La connexion à échoué : " . $db_connect->connect_error);
}
