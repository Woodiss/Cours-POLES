// ====== JQUERY ET HTML ======


// On utilisera le html suivant pour la démonstration
// ==== index.html=====
<div style="background: red"></div>
<p id="p1">Mon <b>paragraphe</b> 1</p>
<p id="p2">Mon paragraphe 2</p>
<p id="p3">Mon paragraphe 3</p>



// I - .text()
// Permet de récupérer le contenu

// .text équivalent de .textContent
var myVar = $('#p1').text();
alert(myVar);



// II - .html()

// Si je veux connaitre ce qu'il y a ds le paragraphe ac les elements html j'utilise
// Permet de récupérer le HTML et pas que le contenu comme .text()

// .html équivalent de innerHTML
var myVar = $('#p1').html();
alert(myVar);



//  III - CONNAITRE LA VALEUR D'UN INPUT (FORMULAIRE)

// val() : recupere les attributs

// attr() : recupere valeur d'un attribut
// comme getAttribut()

// Ajouter au html
<input type="text" id="myInput"></input>
<button id="start">Start</button>

// Je veux obtenir la valeur de mon input
// écrire "Hello World !" dans le input

$('#start').click(function(){
    var myVar = $('#myInput').val();
    alert(myVar); // affiche Hello World !
    // récupére le text de l'input et le stock dans "myVar"
});


$('#start').click(function(){
    var myVar = $('div').attr("style");
    console.log(myVar); // affiche background: red
});



// IV - CHANGER LES INFORMATIONS

// je veux changer le contenu du paragraphe 1
// .html()


$('#start').click(function(){
    $('#p1').text("voila mon nouveau texte");
    // essayer ac $('#p1').html("voila mon <b>nouveau</b> texte")
    // essayer ac $('#myInput').val("nouvelle valeur");
    // même chose avec .val()
});


// AJOUTER UN NOUVEL ELEMENT
// .append() ajoute à la fin


$('#start').click(function(){
    $('div').append("<p>Mon nouveau paragraphe</p>")
});


// . prepent() ajoute au début

$('#start').click(function(){
    $('div').prepend("<p>Mon nouveau paragraphe</p>")
});


// .after() met après la div à l'extérieur !


$('#start').click(function(){
    $('div').after("<p>Mon nouveau paragraphe</p>")
});


// .before() met avant la div à l'extérieur de celle ci !


$('#start').click(function(){
    $('div').before("<p>Mon nouveau paragraphe</p>")
});


// V - SUPPRIMER UN ELEMENT

// .remove() enleve element + son contenu

    $('#start').click(function(){
        $('#p1').remove();
    });

    
// .empty vide le contenu mais ne supprime pas l'élément


    $('#start').click(function(){
        $('#p1').empty();
    });



/*
* ==== MANIPULATION DU CONTENU ====
* Changer le texte, les éléments et les attributs d'une page. 
*

    .html() : remplace le contenu HTML de la page
    .text() : remplace le texte de la page
    .replaceWith() : remplace le(s) élément(s) sélectionné(s) entièrement, pas juste le texte ou le HTML à l'intérieur
    .remove() : supprime les éléments de la page
    .before() : insère du contenu avant le(s) élément(s) sélectionné(s)
    .after() : insère du contenu après le(s) élément(s) sélectionné(s)
    .prepend() : insère du contenu à l'intérieur du/des élément(s) sélectionné(s) (après la balise HTML ouvrante)
    .append() : insère du contenu à l'intérieur du/des élément(s) sélectionné(s) (avant la balise HTML fermante)
    .attr() : définit un attribut et sa valeur ou simplement récupère sa valeur
    .removeAttr() : supprime un attribut
    .addClass() : ajoute une nouvelle classe à/aux élément(s) sélectionné(s) (sans remplacer sa classe actuelle)
    .removeClass() : supprime une classe du/des élément(s) sélectionné(s)
    .css() : mon préféré. Récupère ou définit les propriétés CSS d'un élément, même plusieurs propriétés à la fois.


* ==== PARCOURS DU DOM ====
* Modifier des éléments relatifs à d'autres éléments au sein du DOM. 
* En identifiant les éléments de cette manière, il est possible de modifier
* uniquement ceux qui sont à l'intérieur d'autres éléments, 
* ceux qui descendent d'autres éléments, etc.


    .find() : trouve un/des élément(s) correspondant au paramètre dans la sélection actuelle
    .parent() : accède au parent direct d'un/des élément(s) ou à ses parents si on utilise .parents()
    .children() : accède aux enfants de(s) élément(s)



* ==== TAILLE ET POSITION ====
* Permet d'ajuster les proportions et la disposition des éléments.

    .height() : hauteur d'un cadre sans les marges intérieures, extérieurs ni les bords
    .width (): largeur d'un cadre sans les marges intérieures, extérieurs ni les bords


* Prennent en compte les bords, les marges intérieures et extérieures, ensemble ou séparément.

    .innerHeight() : hauteur en comptant les marges intérieures
    .innerWidth() : largeur en comptant les marges intérieures
    .outerHeight() : hauteur en comptant les marges intérieures et les bords
    .outerWidth() : largeur en comptant les marges intérieures et les bords
    .outerHeight(true) : même méthode que ci-dessus, mais en envoyant le paramètre true, vous incluez également les marges extérieures.
    .outerWidth(true) : même méthode que ci-dessus, mais en envoyant le paramètre true, vous incluez également les marges extérieures.

*Le positionnement des éléments peut être géré grâce à deux méthodes :

    .offset() : définit les coordonnées d'un élément relativement au coin en haut à gauche de l'objet document
    .position() : définit les coordonnées d'un élément relativement à son parent direct, ce qui peut être utile pour positionner des éléments au sein du même élément DOM. Mais vous utiliserez probablement .offset  plus souvent.

*/