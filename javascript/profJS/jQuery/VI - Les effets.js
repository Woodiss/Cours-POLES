// ====== LES EFFETS ======
// DOC https://api.jquery.com/category/effects/


// I - PARTICULARITE DES EFFETS

// hide(), show() sont des effets qui cache et montre.
// Il peuvent prendre des arguments
// exemple: on peut exprimer la duree.
// on compte toujours en milliseconde !!!

$("#p1").click(function (){
    $('#p5').hide(5000); // mettra 5 secondes pr disparaitre
});


// II - LES FONCTIONS CALLBACK

/*
* Définition: Un callback, c’est une fonction passée en paramètre, 
* qui va être appelée à une condition. 
* La condition est la plus souvent “quand ceci arrive” 
* et “ceci” est le plus souvent “quand le traitement est terminé”. 
* Donc la grande majorité des callbacks sont des fonctions qu’on passe 
* à d’autres fonctions pour qu’elles soient exécutées quand le traitement est terminé.
 */

    $("#p1").click(function (){
        $('#p2').hide(5000, function(){ // fonction callback qui va s'executer une fois que ce sera fini
            $('#p3').hide(1000); 
        });
    });

// Quand je clique sur le paragraphe 1 il me cache le paragraphe 2 puis 3


/*
*  LISTE DE QUELQUES EFFETS (voir liste complète dans la documentation)
*
* .show() : affiche le(s) élément(s) sélectionné(s).
* .hide() : masque le(s) élément(s) sélectionné(s).
* .toggle() : affiche ou masque le(s) élément(s) sélectionné(s) en fonction de son/leur état actuel.
* .fadeIn() : fait apparaître en fondu le(s) élément(s) sélectionné(s).
* .fadeOut() : fait disparaître en fondu le(s) élément(s) sélectionné(s).
* .fadeTo() : amène progressivement le(s) élément(s) sélectionné(s) à une opacité donnée.
* .slideUp() : masque le(s) élément(s) sélectionné(s) avec un défilement vers le haut.
* .slideDown() : masque le(s) élément(s) sélectionné(s) avec un défilement vers le bas.
* .slideToggle() : affiche ou masque le(s) élément(s) sélectionné(s) avec un défilement en fonction de son/leur état actuel.
*/