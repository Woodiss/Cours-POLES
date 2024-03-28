<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Mon Blog</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
            <h1 class="text-center mt-4">Mon Blog</h1>
                <hr>
                <form action="" id="form" class="form" method="POST">
                    <div class="form-group">
                        <input type="text" name="titre" id="titre" value="" class="form-control" placeholder="Titre ...">
                    </div>
                    <div class="form-group">
                        <input type="text" name="categorie" id="categorie" value="" class="form-control" placeholder="Catégorie ...">
                    </div>
                    <div class="form-group">
                        <textarea name="contenu" id="contenu" class="form-control" placeholder="Contenu ..."></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="enregistrer" id="enregistrer" class="form-control btn btn-outline-info">Enregistrer</button>
                    </div>
                </form>
                <hr>
            </div><!-- mx-auto => margin 0 auto -->
        </div>
        <div class="row"><div class="col-sm-12" id="resultat"></div></div>
        <div class="row"><div class="col-sm-12" id="liste_article"></div></div>
      
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- APPEL AJAX PERSO AVEC jQuery -->
    <script>
        $(document).ready(function() {

            $('#form').on('submit', function(e){ // on écoute l'envoi de tout le formulaire. on pourrait écouter le clic sur le bouton mais il vaut mieux prendre la validation de tout le formulaire

                e.preventDefault(); // on bloque la validation du formulaire

                var fichier = 'ajax.php'; // fichier cible pour traitement ajax
                var params = $('#form').serialize(); // récupère les différentes infos du formulaire en paramètres comme s'ils étaient écrits en GET
                // on pourrait aussi rajouter des paramètres pour par ex enregistrer en BDD via le PHP : var params .= '&mode=enregistrer';

                // Ajout d'un paramètre pour décider côté PHP si on enregistre ou son in récupère les articles
                params += '&mode=enregistrer';

                console.log(params);

                $.post(fichier, params, function (reponse) {
                    $('#resultat').html(reponse.message);
                    $('#form').trigger('reset'); // on vide les champs du formulaire
                    // $('#titre').val('');
                    // $('#categorie').val('');
                    // $('#contenu').val('');
                }, 'json'); // END $.post(fichier, params, function ()


            }); // END $('#form').on('submit', function(e)


            /** Ajax pour récupérer la liste des articles selon un timer */
            setInterval(liste_article, 5000);

            function liste_article() {
                $.post('ajax.php', 'mode=afficher', function (reponse) {
                    $('#liste_article').html(reponse.message);
                }, 'json');
            }


        }); // END $(document).ready(function()
    </script>
  </body>
</html>