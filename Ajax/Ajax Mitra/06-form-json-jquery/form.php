<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AJAX avec Json</title>
        <style>
            form{ width: 50%; margin: 0 auto; padding: 20px; }
            select{ width: 100%; height: 30px; border: 1px solid #333; margin-bottom: 20px; }
        </style>
    </head>
    <body>
        <div style="width: 1000px; margin: 0 auto; padding: 20px;">
        <!-- form>label{Choisir une personne}+select#personne[onchange="monAjax()"]>option*7^^hr+div#resultat -->

            <?php
            $fichier = file_get_contents('fichier.json');
            // $tableau = json_decode($fichier); // format array / object
            $tableau = json_decode($fichier, true); // format array / array


            ?>

            <form method="POST" action="ajax.php" id="form">
                <label for="personne">Choisir une personne</label>
                <select name="choix" id="personne"> 
                    <option>...</option>
                    <?php 
                        foreach($tableau AS $valeur) {
                            echo '<option>' . $valeur['nom'] . '</option>';
                        }
                    ?>
                </select>
            </form>
            <hr>
            <div id="resultat"></div>
            
            <?php
            
            // On a commencé par écrire le code ici pour voir ce qui se passe
            // $fichier = file_get_contents('fichier.json');
            // $tableau = json_decode($fichier); // format array / object
            // $tableau = json_decode($fichier, true); // format array / array
            // echo '<pre>'; var_dump($tableau); echo '</pre>'; 
            
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>


        <script>
            $(document).ready(function() {
                $('#personne').on('change', function() {
                    
                    /* -- EN JS --
                    var fichier = 'ajax.php';
                    var valeur = $(this).val();
                    var params = 'choix='+valeur;

                    console.log(fichier);
                    console.log(valeur);
                    console.log(params);
                    */

                    /** -- EN jQuery -- */
                    var fichier = $('#form').attr('action');
                    var methode = $('#form').attr('method');
                    var params = $('#form').serialize();

                    console.log(fichier);
                    console.log(methode);
                    console.log(params);

                    // avec la méthode jQuery .post()
                    $.post(fichier, params, function(response) {
                        $('#resultat').html(response.contenu);
                    }, 'json');

                    // ordre des arguments avec .post()
                    // 1 seul paramètre :
                   // $.post('fichier_cible', 'param=valeur', 'function en cas de succes', 'type de données');
                    // avec plusieurs paramètres
                  //  $.post('fichier_cible', { param1: 'valeur1', param2: 'valeur2', ...}, 'function en cas de succes', 'type de données');

                    // avec la méthode jQuery .ajax()
                    /*
                    $.ajax( {
                        url: fichier, // le fichier cible, celui qui fera le traitement 
                        type: methode, // la méthode utilisée 
                        data: params, // les argumenst à fournir 
                        success: function(response) {
                            console.log(response);
                            $('#resultat').html(response.contenu);
                            // la fonction qui doit s'exécuter lors de la réussite de la communication ajax 
                        },
                        dataType: 'json' // le format des données attendues 
                    });
                    */

                });
            });
        </script>
        
    </body>
</html>