<?php 
require_once 'inc/init.inc.php';
include_once 'inc/header.inc.php';

// echo '<pre>'; var_dump($_SESSION); echo '</pre>';

?>

    <main role="main" class="container">
        
        <div class="starter-template">
            <h1>Bienvenue sur notre Blog</h1>
            <p class="lead">Singapura ragdoll. Lion egyptian mau for bobcat jaguar but leopard sphynx panther. Burmese thai norwegian forest for puma scottish fold so bombay. Cheetah singapura or russian blue.</p>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h3>Catégories</h3>
                <ul class="list-group list-group-flush list-group-item-action">
                    <li class="list-group-item list-group-item-action">Cras justo odio</li>
                    <li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
                    <li class="list-group-item list-group-item-action">Morbi leo risus</li>
                    <li class="list-group-item list-group-item-action">Porta ac consectetur ac</li>
                    <li class="list-group-item list-group-item-action">Vestibulum at eros</li>
                </ul>

            </div>
            <!-- /.col-sm-3 -->
            <div class="col-sm-9">
                <div class="row" id="affichage_article">

                </div>
            </div>
            <!-- /.col-sm-9 -->
        </div>
        <!-- /.row -->
    
</main><!-- /.container -->

<?php
include_once 'inc/footer.inc.php';