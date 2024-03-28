<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="image_articles/upload/<?= $article['image'] ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body p-5">
                <h5 class="card-title text-end fs-1"><?= $article['title'] ?></h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                <div class="d-flex justify-content-between mt-5 align-items-center">
                    <p class="fs-1 m-0"><?= $article['price'] ?> €</p>

                    <div class="d-flex justify-content-between align-items-center">
                        <form method="POST" class="m-0">
                            <input type="number" name=quantity style="width:50px">
                            <button type="submit" class="btn btn-primary">ADD</button>

                        </form>

                    </div>

                    <?php if (!empty($_SESSION) && $_SESSION['power'] == 1) { ?>
                        <a href="edit_product.php?id=<?= $article['id_article'] ?>" class="btn btn-primary">EDIT</a>
                    <?php } ?>
                </div>

                <!-- <p class="fs-1"><?= $article->price ?> €</p> -->
            </div>
        </div>
    </div>
</div>