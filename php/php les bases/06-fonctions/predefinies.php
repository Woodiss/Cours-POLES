<?php
include '../nav_global/nav.php';
?>

<?php

// les fonctione predefinies sont celles qui sont deja codées, mises à notre dispositions par PHP (par exemple isset() )

// 01 - strlen() et iconv_strlen()
// les deux permettent de tester la longeur d'une chaine de caractères (pour que par exemple on n'entre pas 200 caractères pour un pseudo, on va limiter au maximum à 20)

$phrase = "こんにちは Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, quas.";

echo iconv_strlen($phrase) . "<br>";
// affiche le nombre de caractères 

echo strlen($phrase) . "<br>";
// affiche le nombre d'octe

// 02 - substring
// fonction prédéfinie qui permet de sélectionner une chaine de caractères à des endroits précis et supprimer le reste
// elle prend 3 paramètre. la chaine à décuper, le point de départ et le point d'arrivée
// je veux conserve la première moitié de ma chaine de caractères
$phrase = "こんにちは lepoles2023poissyStephane";

echo substr($phrase, 0, 20) . "<br>";
// récupére le string "phrase" et garde les caractère (octets) de 0 au 20eme

echo substr($phrase, 0, -4) . "<br>";
// récupére le string "phrase" et supprime les 4 dernier caractères


// 03 - date()
// celle ci permet de récupérer l'année en cours

echo date("d/m/Y") . "<br>";

echo "&copy" . date('Y') . " Woodis" . "<br>";

echo date("D-M-Y") . "<br>";



// 04 - empty, contrairement à isset, la fonction vérifié si la variable (qui exeste) contient une valeur
// c'est le contraire de isset

$phrase3 = ""; // la variable n'a pas de contenue
$phrase4 = " "; // la variable a un contenue

if (empty($phrase3)) {
    echo "La variable n'a pas de contenue <br>";
} else {
    echo "La variable à reçu du contenu";
}

if ($phrase3 !== "") {
    echo "La variable à reçu du contenu";
} else {
    echo "La variable n'a pas de contenue <br>";
}
