// ====== II - LES SELECTEURS ======


// jQuery utilise les sélecteurs CSS
// MEMO DE RAPPEL: https://developer.mozilla.org/fr/docs/Web/CSS/S%C3%A9lecteurs_CSS
// Documentation jQuery (liste complète des sélecteurs): https://api.jquery.com/category/selectors/



// Créer un fichier index.html et main.js. Les lier.

// On utilisera le html suivant pour la démonstration


// ==== index.html=====

<h1>Mon Titre</h1>
<p class="p1">Paragraphe 1</p>
<p id ="p2">Paragraphe 2</p>


// ==== main.js =====

$(document).ready(function() {
    // document (dc le html) execureta la fonction quand il y aura ready
});

/*
* REMARQUE:
* document (correspondant à la sélection du html) n'a pas de guillement. 
* L'objet document est probablement l'un des objets les plus importants du modèle objet JavaScript.
* Il permet d'accéder à tous les éléments affichés sur la page, 
* de contrôler les saisies, de modifier l'apparence et le contenu.
* C'est une expression particulier comme window
*
* window L'objet window est l'objet principal dans le modèle objet du JavaScript. 
* Il permet d'accéder à l'ensemble des éléments du document
*/


// TESTER 
// Rque: hide.() permet de cacher un element

$(document).ready(function() {
    $("h1").hide(); // cacher h1
});

$("p").hide(); // cacher tous les p

$(".p1").hide(); // cacher la class p1

$("#p2").hide(); //cacher l'id p2

/*
* RAPPEL: 
* selecteur d'une class: un point .
* selecteur d'un id: un dieze #
* les tags: h1, h2 , p ...
*/


// Sélectionner les enfants d'un élément (exemple)

$(document).ready(function() {
    $("p:nth-child(2)").hide(); // cacher le premier element p
});


// Sélectionner plusieurs éléments en même temps

$('.p1, #p2').click(function() {
    $('p').remove()
})

