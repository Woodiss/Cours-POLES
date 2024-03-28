<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formation AJAX</title>
    <script src="script7.js"></script>
</head>
<body>
    <h1>Choisir une catégorie</h1>

  <form>
    <select id="cat" onchange="envoyerRequete()">
      <?php
        $bdd = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $reponse = $bdd->query("select * from categorie");

        while($ligne = $reponse->fetch())
        {
            echo '<option value="'.$ligne['id'].'">'.$ligne['label'].'</option>';
        }

        $reponse->closeCursor();
      ?>
    </select>
  </form>

    <div>
       Nombre de produits de cette catégorie est :
        <span id="nbrProduits" style="color: red"></span>
    </div>
</body>
</html>