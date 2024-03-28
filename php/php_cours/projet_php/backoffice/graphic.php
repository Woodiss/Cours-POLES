<?php

$sqlNbVote = "SELECT p.title, v.id_product, COUNT(*) AS nombre_de_votes FROM vote v JOIN product p ON v.id_product = p.id_product GROUP BY v.id_product, p.title";

$sqlRequete = mysqli_query($db_connect, $sqlNbVote);

$tableVote = mysqli_fetch_all($sqlRequete, MYSQLI_ASSOC);

$nbvoteproduct = fopen('log/nbvoteproduct.json', 'w');
fwrite($nbvoteproduct, json_encode($tableVote));
fclose($nbvoteproduct);
