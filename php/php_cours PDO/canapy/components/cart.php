<?php foreach ($userCart as $article) { ?>

    <tr>
        <td class="product-thumbnail">
            <img src="image_articles/upload/<?= $article['image'] ?>" alt="Image" class="img-fluid">
        </td>
        <td class="product-name">
            <h2 class="h5 text-black"><?= $article['title'] ?></h2>
        </td>
        <td><?= $article['price'] ?> €</td>
        <td>
            <div class="input-group mb-3 d-flex align-items-center quantity-container m-auto" style="max-width: 120px;">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-black decrease" type="button" onclick="minus(<?= $article['id_cart'] . ', ' . $article['price'] ?>)">&minus;</button>
                </div>
                <input type="text" class="form-control text-center quantity-amount <?= $article['id_cart'] ?>" name="<?= $article['id_cart'] ?>" value="<?= $article['quantity'] ?>" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                    <button class="btn btn-outline-black increase" type="button" onclick="plus(<?= $article['id_cart'] . ', ' . $article['price'] ?>)">&plus;</button>
                </div>
            </div>

        </td>
        <td class="total" id="<?= $article['id_cart'] ?>"><?php echo $article['price'] * $article['quantity'] ?> €</td>
        <td>
            <form method=" POST">
                <button class="btn btn-black btn-sm" name="id_cart" value="<?= $article['id_cart'] ?>">X</button>
            </form>
        </td>
    </tr>
    <?php $totalPrice += $article['price'] * $article['quantity'] ?>

<?php } ?>