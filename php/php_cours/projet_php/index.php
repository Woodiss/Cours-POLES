<?php
session_start();

require_once('lib/db.php');
require_once('lib/select_product.php');
require_once('backoffice/moyenne.php');



// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";


$sqlCategory = mysqli_fetch_all(mysqli_query($db_connect, "SELECT * FROM `category` c WHERE EXISTS ( SELECT 1 FROM `product` p WHERE p.`id_category` = c.`id_category` );"), MYSQLI_ASSOC);

// echo "<pre>";
// print_r($product);
// echo "</pre>";


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MyShop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>



<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">MyShop</a>
            <div class="dropdown ms-5">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="index.php">Afficher tout les produits</a>
                    <?php foreach ($sqlCategory as $value) {


                        echo '<a class="dropdown-item" href="index.php?category=' . $value['id_category'] . '">' . $value['category'] . '</a>';
                    } ?>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </ul>
                <?php if (empty($_SESSION)) { ?>

                    <form class="d-flex" style="margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="backoffice/login.php">
                            <i class="bi-box-arrow-in-right me-1"></i>
                            connexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="backoffice/register.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            inscription
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>

                <?php } else { ?>

                    <?php if ($_SESSION['user_statut'] == 2) { ?>

                        <form class="d-flex" style="margin-right: 10px;">
                            <a class="btn btn-outline-dark" href="backoffice/index.php">
                                <i class="bi-file-earmark-diff me-1"></i>
                                BackOffice
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>

                    <?php } ?>

                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="lib/deconnexion.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            déconnexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>

                <?php } ?>

            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



                <?php foreach ($product as $value) {

                    require('lib/product_Card.php');
                } ?>


            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>