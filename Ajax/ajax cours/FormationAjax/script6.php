<?php
$groupe = array("jalal", "naoufal", "stéfane", "bachir", "mickael", "guillaume");
$nom = trim($_GET["nom"]);

if(in_array(strtolower($nom), $groupe))
{
    echo "Salut ".$nom;
}
else if($nom == "")
{
    echo "Bonjour l'inconnu ! Quel est votre nom ?";
}
else
{
    echo "Bonjour ".$nom.". Je ne vous connais pas !";
}

?>