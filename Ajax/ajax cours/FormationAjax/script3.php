<?php
    $d = date("d/m/Y");

    if(date('G')>18)
    {
        echo $d. ". Bonsoir.";
    }else{
        echo $d. ". Bonjour.";
    }
?>
