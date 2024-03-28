<?php 
require_once 'inc/init.inc.php';

if (empty($_SESSION['user'])) {
    header('location:index.php');
}

include_once 'inc/header.inc.php';
?>

    <main role="main" class="container">
        
        <div class="starter-template">

            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <h1 class="text-center">Mon Blog</h1>
                    <hr>
                    <form action="" id="form_article" class="form" method="POST">
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
                            <input type="text" name="photo" id="photo" value="" class="form-control" placeholder="Photo ...">
                            <small class="form-text text-danger text-right mb-4">Insérer une url valide pour la photo.</small>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="enregistrer" id="enregistrer" class="form-control btn btn-outline-info">Enregistrer</button>
                        </div>
                    </form>
                    <hr>
                </div><!-- mx-auto => margin 0 auto -->
            </div><!-- /.row -->
        </div><!-- /.starter-template -->

        <div class="row"><div class="col-sm-12" id="resultat"></div></div>
    
    </main><!-- /.container -->

<?php
include_once 'inc/footer.inc.php';
