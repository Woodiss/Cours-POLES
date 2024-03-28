<?php
include '../nav_global/nav.php';
?>

<?php

// syntaxe au dessus pour ouvirir un passage php
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP.
// c'est plus facile pour debug
// on peut aussi le fermer mais plus difficile à corriger en cas de problème


// instruction d'affichage très souvent utilisée

echo "Bonjour, Je suis Delia. <br>";

// le ; est un fin d'instruction, il est obligatoire pour signifier cet ordre au navigateur, sinon erreur php
// une secobde instruction est possibme en PHP avec le mot print, mais il n'est que très peu utilisé, dans pratiquement aucun script ou tutoriel

?>

<!-- Passage contracaté en PHP -->
<!--  il necessite pas d'echo, il est implicite, il ne sert que pour afficher -->

<?= "Nous sommes lundi <br>" ?>

<?php
// Affichage non conventionnel (print_r et var_dump)
// l'affichage non conventionnel ne sert que durant la période de développement du site.Il est utile pour le développeur, pas pour le visiteur du site.
// !!!!!!!! le jour où le site est mis en ligne, il faut mettre tous les print_r et var_dump en commentaire ou les supprimer !!!!!!!!!

// je déclare un variable pour ensuite la tester
$prenom = 'Delia';

//la balise <pre></pre> qui entoure le print_r est utile pour mieux lire les informations que l'on veut récupérer 
echo "<pre>";
print_r(gettype($prenom));
echo "</pre>";

// les commentaire en php

// 1er type de commentaire

/*
2éme type de commentaire sur plusiseurs lignes
*/

# 3éme type de commentaire

// mix PHP et HTML

echo '<h1> Salut </h1>';
echo 'Nous somme <strong>lundi</strong><br>';
echo '<div class="heure">L\'ecole commence a 9h00<br></div>';

?>

<!-- les syntaxes en dessus ne sont pas tolérées, même si elles fonctionnents. Elles alternant trop les passages d'une langage à l'autre.C'est dit code "sale" -->

<h1><?php echo "Bonjour"; ?></h1>
<?php echo "Nous sommes " ?> <strong>lundi</strong> <?php echo " et il est 15h"; ?>

<!-- Le code PHP n'est pas visible dans le code source de la page. C'est la preuve que le navigateur ne peut pas gérér ce langage, seulement les langages du front -->
</body>

</html>

<?php

// syntaxe au dessus pour ouvirir un passage php
// il est conseillé de le laisser ouvert si on ne fait que du traitement PHP.
// c'est plus facile pour debug
// on peut aussi le fermer mais plus difficile à corriger en cas de problème


// instruction d'affichage très souvent utilisée

echo "Bonjour, Je suis Delia. <br>";

// le ; est un fin d'instruction, il est obligatoire pour signifier cet ordre au navigateur, sinon erreur php
// une secobde instruction est possibme en PHP avec le mot print, mais il n'est que très peu utilisé, dans pratiquement aucun script ou tutoriel

?>

<!-- Passage contracaté en PHP -->
<!--  il necessite pas d'echo, il est implicite, il ne sert que pour afficher -->

<?= "Nous sommes lundi <br>" ?>

<?php
// Affichage non conventionnel (print_r et var_dump)
// l'affichage non conventionnel ne sert que durant la période de développement du site.Il est utile pour le développeur, pas pour le visiteur du site.
// !!!!!!!! le jour où le site est mis en ligne, il faut mettre tous les print_r et var_dump en commentaire ou les supprimer !!!!!!!!!

// je déclare un variable pour ensuite la tester
$prenom = 'Delia';

//la balise <pre></pre> qui entoure le print_r est utile pour mieux lire les informations que l'on veut récupérer 
echo "<pre>";
print_r(gettype($prenom));
echo "</pre>";

// les commentaire en php

// 1er type de commentaire

/*
2éme type de commentaire sur plusiseurs lignes
*/

# 3éme type de commentaire

// mix PHP et HTML

echo '<h1> Salut </h1>';
echo 'Nous somme <strong>lundi</strong><br>';
echo '<div class="heure">L\'ecole commence a 9h00<br></div>';

?>

<!-- les syntaxes en dessus ne sont pas tolérées, même si elles fonctionnents. Elles alternant trop les passages d'une langage à l'autre.C'est dit code "sale" -->

<h1><?php echo "Bonjour"; ?></h1>
<?php echo "Nous sommes " ?> <strong>lundi</strong> <?php echo " et il est 15h"; ?>

<!-- Le code PHP n'est pas visible dans le code source de la page. C'est la preuve que le navigateur ne peut pas gérér ce langage, seulement les langages du front -->