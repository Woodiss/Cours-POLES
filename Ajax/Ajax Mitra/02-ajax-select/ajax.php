<!-- <option>TEST</option> -->
<?php

//
if(isset($_POST['pays']) && strtolower($_POST['pays']) == 'france') {
    echo '<option>Paris</option><option>Marseille</option><option>Lyon</option>';

} elseif (isset($_POST['pays']) && strtolower($_POST['pays']) == 'angleterre') {
    echo '<option>Londres</option><option>Aberyswyth</option><option>Leeds</option>';

} elseif (isset($_POST['pays']) && strtolower($_POST['pays']) == 'espagne') {
    echo '<option>Madrid</option><option>Barcelone</option><option>Turin</option>';

} else {
    echo '<option>Veuillez choisir un pays...</option>';
}
