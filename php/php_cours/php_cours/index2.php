<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP</h1>
    <h2>Premier cours !</h2>

    <?php
    mb_internal_encoding("UTF-8");


    $prenom = "Woodis";
    echo $prenom;

    $age = 25;
    $vrai = true;
    $float = 19.99;

    if ($age >= 18) {
        echo "<br> L'utilisateur est majeur <br>";
    } else {
        echo "<br> L'utilisateur est mineur <br>";
    }


    for ($i = 0; $i < 200; $i++) {
        // echo "<div>Produit numéro $i</div>";
    }

    echo "<hr>";
    $color = array('red', 'blue', 'green', 'yellow');
    print_r($color);
    echo "<br>";
    var_dump($color);

    foreach ($color as $c) {
        echo "<br> $c";
    }

    for ($i = 0; $i < count($color); $i++) {
        echo "<br> $color[$i]";
    }

    // crée 4 bloc html : 50px largeur, 50px longueur
    // avec comme bgc les valeurs
    // du tableau $color

    echo "<div class='box'>";
    foreach ($color as $c) {
        echo "<div class='yolo' style='background-color:$c'></div>";
    }
    echo "</div>";

    echo "<hr>";

    function verifAge($age)
    {

        if ($age >= 18) {
            echo "<br>OK";
        } else {
            echo "<br>Refusé";
        }
    }

    verifAge(22);
    verifAge(16);
    echo "<hr>";



    // créer une fonction "nameInit" qui prend en paramètre votre nom & prenom et qui renvoie la premiere lettre de chaque chaine

    function nameInit($prenom, $nom)
    {
        echo "<br> $prenom[0] . $nom[0]";

        echo "<br>";

        //            substr($string, position, taille)
        echo "<br>" . substr($prenom, 0, 1) . " . " . substr($nom, 0, 1);
    }

    nameInit("Steph", "Descarpentries");

    echo "<br>";
    echo "<hr>";

    function dice($min, $max)
    {
        $result = random_int($min, $max);

        // echo $result

        // if ($result == $max) {
        //     echo "GG";
        // } else if ($result == 0) {
        //     echo "Noob";
        // } else {
        //     echo "$result";
        // }
    }

    dice(0, 5);
    echo "<hr>";

    // créer une fonction qui prend en parametre "largeur" "longeur" et "couleur" qui aura pour but de créer un bloc html (div) avec les dimensions précédement données via les parametres

    function divCustom($hauteur, $largeur, $color)
    {
        $witdh = random_int(10, $largeur);
        $height = random_int(10, $hauteur);
        echo "largeur: $witdh, hauteur: $height";

        echo "<div style='height:" . $hauteur . "px; width:" . $largeur . "'>";
        echo "<div style='height:" . $height . "px; width:" . $witdh . "px; background-color:" . $color . ";'></div>";
        echo "</div>";
    }


    divCustom(100, 100, 'red');
    divCustom(100, 100, 'purple');


    // eco bonus créer une fonction calculatrice ! 

    echo "<hr>";
    function calculette($chiffre1, $chiffre2, $ope)
    {
        if ($ope == "+") {
            echo $chiffre1 + $chiffre2;
        } else if ($ope == "-") {
            echo $chiffre1 - $chiffre2;
        } else if ($ope == "/") {
            echo $chiffre1 / $chiffre2;
        } else if ($ope == "*") {
            echo $chiffre1 * $chiffre2;
        }
    }

    calculette(2, 10, "+");
    echo "<br>";
    calculette(2, 10, "-");
    echo "<br>";
    calculette(2, 10, "/");
    echo "<br>";
    calculette(2, 10, "*");


    echo "<hr>";
    ?>

    <style>
        .box {
            display: flex;
        }

        .yolo {
            transition: all 2s;
            width: 50px;
            height: 50px;
            margin: 10px;
        }

        .yolo:hover {
            transition: all 2s;
            transform: scale(2.2);
            z-index: 1;
        }
    </style>

</body>

</html>