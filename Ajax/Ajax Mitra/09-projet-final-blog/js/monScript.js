$(document).ready(function () {

    /* -- 1 -- CONNEXION -- */
    // bouton submit du formulaire dans footer.inc.php
    $('#validation').on('click', function (e) {
        
        e.preventDefault();
        
        var params = $('#form_connexion').serialize();
        params += '&mode=connexion';
        console.log(params);
        
        $.post('ajax.php', params, function (data) {
            console.log(data);
            $('#message').html(data.message);
            
            if (data.validation == 'OK') {
                window.location = 'index.php';
            }
            
        }, 'json'); // END $.post('ajax.php', params, function()
    }); // END $('#validation').on('click', function()
    
    
    /* -- 2 -- ENREGISTREMENT DES ARTICLES -- */
    $('#form_article').on('submit', function (e) { // on écoute l'envoi de tout le formulaire. on pourrait écouter le clic sur le bouton mais il vaut mieux prendre la validation de tout le formulaire

        e.preventDefault(); // on bloque la validation du formulaire

        var fichier = 'ajax.php'; // fichier cible pour traitement ajax
        var params = $('#form_article').serialize(); // récupère les différentes infos du formulaire en paramètres comme s'ils étaient écrits en GET
        // on pourrait aussi rajouter des paramètres pour par ex enregistrer en BDD via le PHP : var params .= '&mode=enregistrer';

        // Ajout d'un paramètre pour décider côté PHP si on enregistre ou son in récupère les articles
        params += '&mode=enregistrer';

        console.log(params);

        $.post(fichier, params, function (reponse) {
            $('#resultat').html(reponse.message);
            $('#form_article').trigger('reset'); // on vide les champs du formulaire
            // $('#titre').val('');
            // $('#categorie').val('');
            // $('#contenu').val('');
        }, 'json'); // END $.post(fichier, params, function ()


    }); // END $('#form').on('submit', function(e)

    /* -- 3 -- AFFICHAGE DES ARTICLES -- */
    /** Ajax pour récupérer la liste des articles selon un timer */
    setInterval(affichage_article, 5000);

    function affichage_article() {
        $.post('ajax.php', 'mode=afficher', function (reponse) {
            $('#affichage_article').html(reponse.message);
        }, 'json');
    }

}); // END $(document).ready(function()