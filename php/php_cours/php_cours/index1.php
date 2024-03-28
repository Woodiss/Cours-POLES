<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <h2>Premier cours !</h2>

    <style>
        h1{
            color:red;
        }

        .bloc {
            height:50px;
            width:50px;  
        }

    </style>

    <script>
        var toto = "toto tata"
        console.log(toto);

        var age = 19; // int
        var prix = 20.99; // float

    </script>

    <?php

        // Introduction Variable

        $prenom = "boris"; // string
        echo $prenom;

        $vrai = TRUE; // BOOL
        $float = 19.99; // float
        $age = 19; // int

        // Condition
        
        if( $age >= 18 ){
            echo "<br> L'utilisateur est majeur";
        }else{
            echo "<br> L'utilisateur est mineur";
        } 

        // Boucles et tableau

        for($i=1; $i < 10; $i++){
            echo " <div>Produit numéro ".$i."</div> ";
        }
        
        $color = array('red','blue','green','yellow');
        print_r($color);
        echo "<br>";
        var_dump($color);

        foreach($color as $c){
            echo "<br>".$c;
        }
        
        for($o = 0; $o < count($color); $o++){
            echo "<br>".$color[$o];
        }


        $nbrDiv = 4;
        $color = array('red','purple','green','yellow'); 
        // créer 4($nbrDiv) bloc html : 50px largeur,50px longueur
        // avec comme background-color: les valeurs
        // du tableau Color.
        
        for( $i = 0; $i < $nbrDiv; $i++){ 
            echo "<div class='bloc' style='background-color:".$color[$i]."'>".$i."</div>";
        }
    
        // Fonction
    
        function verifAge( $age ){
            // $age est supérieur ou égal à 18
            if( $age >= 18){
                echo "OK";
            }else{
                echo "Refusé";
            }
        }

        verifAge(22);
        echo "<br>";
        verifAge(16);

        echo "<br>";
        echo "<br>";
        echo "<hr>";
        echo "<br>";
        echo "<br>";

        // Créer une fonction "initiales" qui prend 
        // en paramêtre votre Nom & prénom
        // et qui renvoie la première lêttre de chaque chaîne.

        // exemple

        function nameInit($prenom, $nom){
            //   substr( $string, position, longueur ou combien de lettre tu veux )
            echo substr($prenom, 0, 1); 
            echo substr($nom, 0, 1);  

            // methode express et + simple
            echo $prenom[0]; // abcdef -> la première lettre soit a = 0
            echo $nom[0];  

        }    

        nameInit("Boris", "Aubrun");
        echo "<br>";
        nameInit("Cécile", "Weiss");
        echo "<br>";
        nameInit("Mathieu", "Darmon");
        // resultat : BA

 
        $mots = "abcdef";
        echo "<br>";
        echo $mots;
        echo "<br>";
        echo $mots[0];
        echo "<br>";


        function dice(){
           $result =  random_int(0, 20);
           if( $result == 20 ){
            echo "<br>réussite";
           }elseif( $result == 0 ){
             echo "<br>échec";
           }else{
            echo "<br>".$result;
           }
        }

        dice();


        // Créer une fonction qui prend en parametre "Couleur"
        // qui aura pour but de créer un bloc html (div) avec 
        // les dimensions précédement données via les parametres
        // Largeur devra être aléatoire entre 10px et 140px
        // Longueur devra être aléatoire entre 10px et 140px
        // Couleur devra être défini par vos soins

        function createDiv($bgcolor){
            
            $height = random_int(10, 140);
            $width = random_int(10, 140);


            echo "<div style='height:".$height."px;width:".$width."px;background-color:".$bgcolor."'></div>";

        }

        createDiv('red'); // resultat : un bloc rouge


        // Exo bonus
        // Créer une fonction Calculatrice !


        function calculette($nombre1, $nombre2, $operation){
            
            if($operation == "+"){
                $resultat = $nombre1 + $nombre2;
                echo $resultat."<br>";
            }elseif( $operation == "-"){
                $resultat = $nombre1 - $nombre2;
                echo $resultat."<br>";
            }elseif( $operation == "/"){
                $resultat = $nombre1 / $nombre2;
                echo $resultat."<br>";
            }elseif( $operation == "*"){
                $resultat = $nombre1 * $nombre2;
                echo $resultat."<br>";
            }else{
                echo "Error calcul";
            }

        }

        calculette(5, 3, '+'); // 8
        calculette(11, 5, '-'); // 6
        calculette(577, 33, '*'); // 19041
        calculette(200, 5, '/'); // 40

        calculette(100, 33, 'ù'); // error calcul


    ?>
   
   <p>Cécile</p>   
</body>
</html>