<?php
require_once('db_connect.php');
$id = $_GET['id_product'];

$sqlProduct = "SELECT * FROM `produit` WHERE id_product = $id";

$productSelect = mysqli_fetch_all(mysqli_query($db_connect, $sqlProduct), MYSQLI_ASSOC);
$valide = true;




if (!empty($_POST)) {

    if (!empty($_POST['title']) && (!empty($_POST['description'])) && (!empty($_POST['price'])) && (!empty($_POST['city'])) && (!empty($_POST['postal_code'])) && (!empty($_FILES['image']))) {

        extract($_POST);

        // récup l'image
        $image = $_FILES["image"];
        $image_nom = $image["name"];
        $image_tmp = $image["tmp_name"];
        $date = date('Y-m-d H:i:s');

        // Déplacez l'image dans le dossier d'images
        move_uploaded_file($image_tmp, "image_products/" . $image_nom);

        $insertProduct = "UPDATE `produit` SET `title`='$title',`description`='$description',`image`='$image_nom',`price`='$price',`city`='$city',`postal_code`='$postal_code' WHERE id_product = $id";

        mysqli_query($db_connect, $insertProduct);

        header('Location: index.php');
    } else {
        $valide = false;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
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
                <a href="index.php" class="border rounded px-2 nav-link" target="_blank">
                    <i class="fab fa-github me-2"></i>MDB GitHub
                </a>
            </div>
            <!-- Right elements -->

        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->


    <div class="container-fluid col-6" style="margin-top: 100px;">

        <form method="POST" enctype="multipart/form-data">

            <?php if ($valide == false) { ?>
                <h4 class="sale text-center">Veuillez completez tout les champs correctements !</h4>
            <?php } ?>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="<?= $productSelect[0]['title'] ?>" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" placeholder="<?= $productSelect[0]['description'] ?>" name="description" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" placeholder="<?= $productSelect[0]['price'] ?>" name="price" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" placeholder="<?= $productSelect[0]['city'] ?>" name="city" required>
            </div>

            <div class="form-group">
                <label for="postal_code">Postal Code</label>
                <input type="number" class="form-control" id="postal_code" placeholder="<?= $productSelect[0]['postal_code'] ?>" name="postal_code" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>

    </div>
</body>

</html>