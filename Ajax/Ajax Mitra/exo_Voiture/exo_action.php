<?php

if (isset($_POST['voitures'])) {
    $voitures = strtolower($_POST['voitures']);

    if ($voitures == 'tesla') {
        echo '<option>Model S</option><option>Model X</option><option>Model Y</option>';
    } elseif ($voitures == 'ferrari') {
        echo '<option>Roma</option><option>Purosangue</option><option>SF90</option>';
    } elseif ($voitures == 'peugeot') {
        echo '<option>3008</option><option>208</option><option>Traveller</option>';
    } else {
        echo '<option>Veuillez choisir une voiture...</option>';
    }
}
