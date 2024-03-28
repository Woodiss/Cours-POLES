<?php
$date = date("d/m/Y");
if (date("G") > 18) {
    echo $date . " Bonsoir";
} else {
    echo $date . " Bonjour";
}
