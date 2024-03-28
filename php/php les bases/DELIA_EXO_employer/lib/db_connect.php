<?php

session_start();

$server = "localhost";
$db_name = "employer";
$user = "root";
$pwd = "";

try {
    $db = new PDO("mysql:host=$server;dbname=$db_name", $user, $pwd);
} catch (PDOException $e) {
    if ($_SERVEUR['HTTP_HOST'] == "localhost") {
        $error_msg = "<p style='color: red'>" . $e->getMessage() . "</p>";
    }
    // echo $error_msg;
}
