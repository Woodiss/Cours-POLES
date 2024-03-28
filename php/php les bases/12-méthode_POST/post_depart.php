<?php
include '../nav_global/nav.php';

// un formulaire codé seulement en HTML et CSS n'a pas d'utilité? On doit lui ajouter un traitement PHP pour pouvoir récupérer les infos renseignées dedans et les utiliser plus tard. C'est PHP qui va rendre dynamique le formulaire, sinon, ce n'est qu'un simple affichage

// pour que le formulaire soit connecté à la méthode POST, il faut absolument ecrire dans la balise form methode=POST, action qui sert a autre chose on verra ça plus tard...
?>

<form method="POST" action="">
    <!-- dans les attributs du champs prénom ci dessous, seul name= prenom est important, obligatoire en PHP, pour que les informations puissent être récupérés et envoyées en BDD for (dans label et ID dans input n'ont aucune importance pour PHP et l'envoi en BDD. Ils sont pat contr eutile en affichage pourl'UX, améliore l'expérience utilisateur) -->
    <!-- l'attribut name est indispensable pour que les données puissent être envoyée en BDD -->

    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
    <br><br>

    <label for="description"></label>
    <textarea name="description" id="description" cols="15" rows="3" placeholder="Votre description"></textarea>
    <br><br>

    <label for="annee">Année de naisance</label>
    <select name="annee" id="annee">
        <?php
        for ($annee = date('Y'); $annee >= date('Y') - 100; $annee--) {
            echo "<option> $annee </option>";
        }
        ?>
    </select>
    <br><br>

    <input type="submit" value="soumettre">
</form>


<!-- je ne n'écrirs pas cette condition if($_POST), j'aurais droit aux warning, undifined key prenom, key description, key annee. C'est normal au premier chargement de la page, le formulaire est vide, aucune info n'a encore transité d'ou le undifined key -->

<!-- ci dessous, syntaxe contractée pour une condition if(). Elle permet de générer plus rapidement du code HTML que si on était dans un grand passage PHP nécessitant beaucoup d'echos -->
<?php if ($_POST) : ?>
    <!-- j'ai besoin de la superglobale $_POST pour récupérer les infos qui ont transité dans le dormulaire. je crochète ensuite à l'incide qui m'interesse(cet indice existe car on l'a renseigné pour l'attribut name dans le formulaire, d'ou l'utilité du name) -->
    <ul>
        <li>Prénom : <?= $_POST['prenom'] ?></li>
        <li>description : <?= $_POST['description'] ?></li>
        <li>Année de naisance : <?= $_POST['annee'] ?></li>
    </ul>

    <!-- la syntaxe contractée if() est nécessaire pour fermer mon endif sinon erreur PHP -->
<?php endif; ?>