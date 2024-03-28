<?php

session_start();

session_unset();
// Détruire toutes les données de la session
session_destroy();
// Détruire la session elle-même
header('location: ../index.php');
