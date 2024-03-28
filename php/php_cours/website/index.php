<?php

if (!empty($_POST)) {
    $color = $_POST['color'];

    $colorFile = fopen('log/file_log.txt', 'w');
    fwrite($colorFile, $color);
    fclose($colorFile);

    $contenu = file_get_contents('log/file_log.txt');

    echo "<style>.weshwesh { background-color: $contenu!important;} </style>";

    $donnees = array(
        'color' => $_POST['color'],
        'titre' => $_POST['titre'],
        't_header' => $_POST['t_header'],
        's_header' => $_POST['s_header'],
        // 'imgProd' => $_POST['imgProd'],
    );
    print_r($_FILES);

    file_put_contents("log/donnees.json", json_encode($donnees));



    $infoJson = json_decode(file_get_contents("log/donnees.json"), true);


    // $destination = 'log/' . $_FILES['image']['name'];


    // echo $infoJson['color'];
    // echo $infoJson['titre'];
    // echo $infoJson['t_header'];
    // echo $infoJson['s_header'];
    // echo $infoJson['imgProd'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!"> <?php echo $infoJson['titre'] ?> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5" style="background-color:<?php echo $infoJson['color'] ?>!important">
        <div class="container px-4 px-lg-5 my-5">
            <div class=" text-center text-white">
                <h1 class="display-4 fw-bolder"><?php echo $infoJson['t_header'] ?></h1>
                <p class="lead fw-normal text-white-50 mb-0"><?php echo $infoJson['s_header'] ?></p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">


            <form method="POST" id="form_user">
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" placeholder="insérer votre Email">
                <br>
                <label for="firstname">Prenom :</label>
                <input type="text" id="firstname" name="firstname" placeholder="votre prénom">
                <br>
                <label for="lastname">Nom : </label>
                <input type="text" id="lastname" name="lastname" placeholder="votre nom">
                <br>

                <input type="submit" name="validate" value="Je m'inscris">
            </form>


            <hr>
            <hr>
            <form method="POST" id="form_color" enctype="multipart/form-data">
                <label for="color">coleur header</label>
                <input type="color" id="color" name="color">
                <br>
                <label for="titre">titre du site</label>
                <input type="text" id="titre" name="titre">
                <br>
                <label for="t_header">titre du header</label>
                <input type="text" id="t_header" name="t_header">
                <br>
                <label for="s_header">sous titre du header</label>
                <input type="text" id="s_header" name="s_header">
                <br>
                <label for="imgProd">Image du produit</label>
                <input type="file" id="imgProd" name="imgProd">
                <br>
                <input type="submit" name="validate" value="Mettre a jour">
            </form>

            <?php

            echo "<pre>";
            print_r($_POST);
            echo "</pre>";

            // echo $_POST['email'];

            // si mon prénom fait moin de 5 caractères
            // afficher un message d'erreur


            // if (!empty($_POST)) {

            //     if (strlen($_POST['firstname']) <= 5) {
            //         echo "prénom trop cours !";
            //     } else {
            //         echo "prénom correcte !";

            //         $file = fopen('log/log.txt', 'w');

            //         $log = "L'utilisateur : " . $_POST['email'] . " à réussi à s'increire";
            //         // fwrite($file, date("d/m/y ") . $log . " " . $color . PHP_EOL);
            //         fwrite($file, $color . PHP_EOL);
            //         fclose($file);
            //     }
            // }






            ?>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo $_FILES['tmp_name'] ?>" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
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