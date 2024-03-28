<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP AJAX</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body onload="envoyercheckPresta()">
    <div class="container">
        <div class="top-facture">
            <div class="left-top">
                <p>ski club</p>
                <p>à votre service</p>
            </div>

            <div class="right-top">
                <p><?php echo date("d/m/Y") ?></p>
                <div>FACTURE</div>
                <div><span>Votre code client : </span><input onkeyup="envoyerRechecheClient()" type="text" id="select-client"></div>

                <div class="info-cleint">
                    <p class="info1"></p>
                    <p class="info2"></p>
                    <p class="info3"></p>
                </div>
            </div>
        </div>

        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Code prestation</th>
                        <th>désignation</th>
                        <th>prix</th>
                        <th>quantité</th>
                        <th>montant</th>
                    </tr>
                </thead>

                <tbody id="ttbody">

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>