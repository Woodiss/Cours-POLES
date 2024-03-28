<?php


require_once('db_connect.php');

$sqlProduct = "SELECT * FROM `produit` ORDER BY `id_product` DESC LIMIT 15;";

$tableSelectProduct = mysqli_query($db_connect, $sqlProduct);
$products = mysqli_fetch_all($tableSelectProduct, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tout les produit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="" href="assets/style/style.css">
</head>

<body>




    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-sm-0" href="index.php">
                    <img src="logo/Capture.PNG" height="40" alt="MyShop Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Consulter tous tout produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="add_product.php">Ajouter un produit</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="nav-link me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>

                <a class="nav-link me-3" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="nav-link me-3" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="border rounded px-2 nav-link" target="_blank">
                    <i class="fab fa-github me-2"></i>MDB GitHub
                </a>
            </div>
            <!-- Right elements -->

        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg" class="d-block w-100" alt="Wild Landscape" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-sm-block mb-5">
                    <h1 class="mb-4">
                        <strong>Learn Bootstrap 5 with MDB</strong>
                    </h1>

                    <p>
                        <strong>Best & free guide of responsive web design</strong>
                    </p>

                    <p class="mb-4 d-none d-md-block">
                        <strong>The most comprehensive tutorial for the Bootstrap 5. Loved by over 3 000 000 users. Video and written versions
                            available. Create your own, stunning website.</strong>
                    </p>

                    <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fas fa-graduation-cap ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg" class="d-block w-100" alt="Camera" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1 class="mb-4">
                        <strong>Learn Bootstrap 5 with MDB</strong>
                    </h1>

                    <p>
                        <strong>Best & free guide of responsive web design</strong>
                    </p>

                    <p class="mb-4 d-none d-md-block">
                        <strong>The most comprehensive tutorial for the Bootstrap 5. Loved by over 3 000 000 users. Video and written versions
                            available. Create your own, stunning website.</strong>
                    </p>

                    <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fas fa-graduation-cap ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg" class="d-block w-100" alt="Exotic Fruits" />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"></div>
                <div class="carousel-caption d-none d-md-block mb-5">
                    <h1 class="mb-4">
                        <strong>Learn Bootstrap 5 with MDB</strong>
                    </h1>

                    <p>
                        <strong>Best & free guide of responsive web design</strong>
                    </p>

                    <p class="mb-4 d-none d-md-block">
                        <strong>The most comprehensive tutorial for the Bootstrap 5. Loved by over 3 000 000 users. Video and written versions
                            available. Create your own, stunning website.</strong>
                    </p>

                    <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">Start free tutorial
                        <i class="fas fa-graduation-cap ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Main layout-->
    <main>
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark mt-3 mb-5 shadow p-2" style="background-color: #607D8B">
                <!-- Container wrapper -->
                <div class="container-fluid">

                    <!-- Navbar brand -->
                    <a class="navbar-brand" href="#">Categories:</a>

                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <!-- Link -->
                            <li class="nav-item acitve">
                                <a class="nav-link text-white" href="#">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Shirts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Sport wears</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Outwears</a>
                            </li>

                        </ul>

                        <!-- Search -->
                        <form class="w-auto py-1" style="max-width: 12rem">
                            <input type="search" class="form-control rounded-0" placeholder="Search" aria-label="Search">
                        </form>

                    </div>
                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->

            <!-- Products -->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                        <!-- boucle affichage des produits -->
                        <?php foreach ($products as $product) { ?>

                            <div class="relative col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">

                                        <?php if ($product['reservation_text'] != null) { ?>
                                            <img src="image_products/<?= $product['image'] ?>" class="w-100" style="filter: grayscale(80%);" />
                                            <h5><span class="reserver badge sale-badge ms-2">PRODUIT RESERVER</span></h5>
                                            <a href="#!">
                                            <?php } else { ?>
                                                <img src="image_products/<?= $product['image'] ?>" class="w-100" />
                                            <?php } ?>


                                            <div class="hover-overlay">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                            </div>
                                            </a>
                                    </div>
                                    <div class="card-body">
                                        <a href="" class="text-reset">
                                            <h5 class="card-title mb-2"><?= strtoupper($product['title']) ?></h5>
                                        </a>
                                        <a href="" class="text-reset ">
                                            <p>Outwear</p>
                                        </a>

                                        <h6 class="mb-3 price">
                                            <strong class="ms-2"><?= $product['price'] . " €" ?></strong>
                                        </h6>
                                    </div>
                                    <div class="m-auto mb-3">
                                        <a class="btn btn-primary" href="consult_product.php?id_produit=<?= $product['id_product'] ?>">Consulter l'article</a>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </section>


        </div>
    </main>
    <!--Main layout-->

    <footer class="text-center text-white mt-4" style="background-color: #607D8B">

        <!--Call to action-->
        <div class="pt-4 pb-2">
            <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
                <i class="fas fa-download ms-2"></i>
            </a>
            <a class="btn btn-outline-white footer-cta mx-2" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
                <i class="fas fa-graduation-cap ms-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="text-dark">

        <div class="container">
            <!-- Section: Social media -->
            <section class="mb-3">

                <!-- Facebook -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                <!-- YouTube -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-youtube"></i></a>
                <!-- Github -->
                <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: #E0E0E0">
            © 2022 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>