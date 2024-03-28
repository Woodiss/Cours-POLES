<?php foreach ($articles as $a) { ?>

    <!-- Start Column 1 -->
    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <a class="product-item" href="single_article.php?idarticle=<?= $a['id_article'] ?>">
            <img src="image_articles/upload/<?= $a['image'] ?>" class="img-fluid product-thumbnail">
            <h3 class="product-title"><?= $a['title'] ?></h3>
            <strong class="product-price"><?= $a['price'] ?>€</strong>
            <span class="icon-cross">
                <img src="images/cross.svg" class="img-fluid">
            </span>


        </a>
    </div>
    <!-- End Column 1 -->

<?php } ?>