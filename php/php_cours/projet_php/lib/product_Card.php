<?php



$moyenne = $indexedRows[$value['id_product']]['moyenne_vote'];
$moyenneArrondie = number_format($moyenne, 1); // Arrondir à une décimale
// echo $moyenneArrondie . "<br>";

$demi = false;
if ($moyenneArrondie - floor($moyenneArrondie) >= 0.5) {
    $demi = true;
}

$star = "";
$nbStar = 5;

for ($i = 0; $i < $moyenneArrondie; $i++) {
    $star .= "<div class='bi-star-fill text-warning'></div>";
    $nbStar--;
}

if ($demi) {
    $star .= "<div class='bi-star-half text-warning'></div>";
    $nbStar--;
}

while ($nbStar > 0) {
    $star .= "<div class='bi-star text-warning'></div>";
    $nbStar--;
}

if ($value['hide'] == 1) { ?>

    <div class="col mb-5">
        <div class="card h-100">
            <!-- Sale badge-->
            <?php if ($value['discount'] != 0) { ?>
                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale <?php echo "-" . $value['discount'] . "%" ?></div>
            <?php } ?>

            <?php if ($value['stock'] == 0) { ?>
                <div class="badge bg-dark text-white position-absolute" style="top: 25%; right: 50%; transform: translateX(50%)">RUPTURE DE STOCK </div>
            <?php } ?>
            <!-- Product image-->
            <img class="card-img-top" style="height: 250px" src="<?php echo "backoffice/image_product/" . $value['image']; ?>" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder"><?php echo $value['title'] ?></h5>
                    <!-- Product reviews-->
                    <div class="d-flex justify-content-center small mb-2">
                        <?php echo $star ?>
                    </div>
                    <!-- Product price-->

                    <?php if ($value['discount'] != 0) { ?>
                        <span class="text-muted text-decoration-line-through"><?php echo $value['price'] . " €"; ?></span>
                    <?php
                        echo $value['price'] - (($value['discount'] / 100) * $value['price']) . " €";
                    } else {
                        echo $value['price'] . " €";
                    } ?>
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="product_consult.php?id=<?php echo $value['id_product'] ?>">Consulter</a></div>
            </div>
        </div>
    </div>
<?php
}

?>