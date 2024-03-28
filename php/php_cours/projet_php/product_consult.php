<?php

session_start();
require_once('lib/db.php');
require_once('lib/select_product.php');
require_once('backoffice/moyenne.php');

$id = $_GET['id'];

$productSelect = mysqli_fetch_all(mysqli_query($db_connect, "SELECT * FROM `product` WHERE id_product = $id"), MYSQLI_ASSOC);


echo "<pre>";
print_r($productSelect);
echo "</pre>";

$idUser = $_SESSION['id_user'];

$voteCheck = "SELECT * FROM VOTE WHERE id_user = '$idUser' AND id_product = '$id'";

$tableSelectVote = mysqli_query($db_connect, $voteCheck);

if (mysqli_num_rows($tableSelectVote) != 0) {
    $vote = true;
} else {
    $vote = false;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Product consult</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.php">Eshop</a>
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
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="backoffice/image_product/<?php echo $productSelect[0]['image'] ?>" alt="..." /></div>
                <div class="col-md-6">
                    <div class="d-flex position-relative">
                        <h1 class="display-5 fw-bolder"><?php print_r($productSelect[0]['title']); ?></h1>
                        <?php if ($productSelect[0]['discount'] != 0) { ?>
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.6rem; right: 3rem; font-size:1.5rem;">- <?php echo $productSelect[0]['discount'] ?> %</div>
                        <?php } ?>
                    </div>
                    <div class="fs-5 mb-5">

                        <?php if ($productSelect[0]['discount'] != 0) { ?>
                            <span class="text-muted text-decoration-line-through"><?php echo $productSelect[0]['price'] . " €"; ?></span>
                        <?php
                            echo $productSelect[0]['price'] - (($productSelect[0]['discount'] / 100) * $productSelect[0]['price']) . " €";
                        } else {
                            echo $productSelect[0]['price'] . " €";
                        } ?>

                    </div>
                    <p class="lead"><?php echo $productSelect[0]['description'] ?></p>

                    <?php
                    if ($vote == false && !empty($_SESSION['id_user'])) { ?>
                        <form class="d-flex" action="traitement_vote.php" method="POST">
                            <input type="num" class="form-control text-center me-3" id="inputQuantity" name="note" min="0" max="5" value="5" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="submit" name="id_product" value="<?php echo $productSelect[0]['id_product'] ?>">
                                Voter
                            </button>
                        </form>
                    <?php } ?>

                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Related products</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                $o = 0;
                foreach ($product as $value) {

                    if (($value['id_product'] != $_GET['id']) && ($productSelect[0]['id_category'] == $value['id_category']) && ($o < 4)) {

                        require('lib/product_Card.php');
                        $o++;
                    }
                } ?>


            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>