<?php

// --1-- connexion BDD
// ⚡️ pour Mac ⚡️
$host = 'localhost';
$bdd = 'blog';
$user = 'root';
$mdp = ''; // pour WINDOWS le mdp est vide
// $mdp = 'root'; // ⚡️ pour MAC ⚡️ le mdp est root

$options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

# variable de réception pour la connexion à la BDD
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $bdd, $user, $mdp, $options);

// --2-- ouverture de la session
session_start();
