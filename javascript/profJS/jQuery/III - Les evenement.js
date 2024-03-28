// ====== III - LES EVENEMENTS ======
// Documentation (Liste complete): https://api.jquery.com/category/events/



// I - DECLANCHER UN EVENEMENT

// On utilisera le html suivant pour la démonstration
// ==== index.html=====

<h1>Un Titre</h1>
<p id ="p1" style="background: yellow">Paragraphe 1</p>
<p id ="p2" style="background: yellow">Paragraphe 2</p>
<p id ="p3" style="background: yellow">Paragraphe 3</p>
<p id ="p4" style="background: yellow">Paragraphe 4</p>
<p id ="p5" style="background: red">Paragraphe 5</p>

// =====================

// A présent, je veux sélectionner l'élément 1
// Je veux attacher un événement dessus
// Je veux que quand je clique dessus, il disparaisse

$("#p1").click(function(){
    $('#p5').hide();
});

// TEST 1

$("#p1").mouseenter(function(){
    $('#p5').hide();
});

$("#p1").mouseleave(function(){
    $('#p5').show();
});

// TEST 2

$("#p1").hover(function(){
    $('#p5').hide();
},
    function(){ 
        $('#p5').show();
    } 
);



// II - PARTICULATITE DE .on()

// avec "on", on peut faire plusieurs événement sous formes d'objet
// Quand vous utilisez .on(), vous créez ce qu'on appelle "un écouteur d'événement" ("event listener" en anglais),
// ce qui signifie que le code attend l'arrivée de l'événement. 

$('#p1').on({
    mouseenter : function() {
        $("#p5").hide();
    },
    mouseleave: function(){
        $('#p5').show();
    },
    click: function (){
        $('#p4').hide();
    }
});

/*
*  LISTE DES EVENEMENTS LES PLUS COURANTS (voir liste complète dans la documentation)
*
    .click()
    .scroll()
    .hover()
    .mouseover()
    .mouseout()
    .mouseenter()
    .mouseleave()
    .keydown()
    .keyup()
    .keypress()
    .focus()
    .blur()
    .resize()

    .on('click', function() { … }
    .on('scroll', function() { … }
    .on('hover', function() { … }
    .on('mouseover', function() { … }
    .on('mouseenter', function() { … }
    .on('mouse leave', function() { … }
    .on('keydown', function() { … }
    .on('keyup', function() { … }
    .on('keypress', function() { … }
    .on('focus', function() { … }
    .on('blur', function() { … }
    .on('resize', function() { … }
*
*/
