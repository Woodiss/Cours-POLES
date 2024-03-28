// ====== LES ANIMATIONS ======

// On utilisera le html suivant pour la démonstration


// ==== index.html=====

<style>
    #myDiv {
        width: 10px; 
        height: 100px; 
        background: red; 
        position: absolute; 
        top: 50px; 
        left: 50px
    }
</style>

<button id="start">Lancer l'animation</button>
<div id="maDiv"></div>

// =====================





// I - COMMENT LANCER UNE ANIMATIONNN
// .animate();

$(function(){
    $(selector.animate(arg1,arg2,arg3));
})

// arg1: c'est un objet correspondant au propriete que je veux animer
// arg2: la vitesse, le temps d'execution (slow, fast, ou en milliseconde)
// arg3: fonction callback
// rque: arg2 et arg 3 sont optionnels


$('div').animate({left:'600px'});
// changement de l'arg1
// je modifie la position left de ma div
// .animate() anime le changement de position


$("button").click(function(){
    $('div').animate({left:'600px'},3000);
});
// changement de l'argument 1 et 2. Je met un temps (ici 3sc);
// l'animation de declenche que je clique sur button


$("button").click(function(){
    $('div').animate({left:'600px'},3000,function(){
        $('div').hide();
    });
}); 
// changement de l'argument 1, 2 et 3. J'ajoute un callback

$("button").click(function(){
    $('div').animate({
        left:'600px',
        opacity: 0.2,
        width:'200px', // tester avec +=150px
        height: '200px'// tester avec +=150px
    }); 
});


// II - LANCER DES ANIMATIONS LES UNS A LA SUITE DES AUTRES


$("button").click(function(){
    $('div').animate({left:'600px'}, 3000);
    $('div').animate({opacity: 0.2}, 3000);
    $('div').animate({width: '200px'}, 3000);
    $('div').animate({height:'600px'}, 3000);
    $('div').animate({height:'200px'}, 3000);
});


// index.html - Créons un nouveau bouton

<button id="start"> start animation</button>
<button id= "stop"> stop animation</button>


    $('#start').click(function(){
        $('div').animate({left:'600px'}, 3000);
        $('div').animate({opacity: 0.2}, 3000);
        $('div').animate({width: '200px'}, 3000);
        $('div').animate({height: '600px'}, 3000);
        $('div').animate({height:'200px'}, 3000);
    });

    $("#stop").click(function(){
        $('div').stop();
    })

 // .stop() arrete l'animation où je suis mais les autres ont continué à fonctionner
 // si je veux que tout s'arrete je dois mettre un bolléen ds la fonction stop

 $('div').stop(true); // arrete les animations
//  met en pause l'animation en cours

 $('div').finish(); // arrete les animations et le place à la fin de son cycle d'animation
//  stop les animations



 // arg1 si true arrete l'animation
 // arg2 si true va a la fin de l'animation qd elle est arrete


// III - ENCHAINER LES ANIMATIONS :

// on écrit un point à la fin suivi de la nouvelle animation (ou effet);

$('#start').click(function(){
    $('div').slideUp(3000).slideDown(3000).fadeOut(3000).fadeIn(3000);    
})