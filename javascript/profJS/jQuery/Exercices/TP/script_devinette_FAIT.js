nbrTry = 0
resultat = Math.floor(Math.random() * 100) + 1
console.log(resultat);

// alert('testt')

function reset() {
    $(".reset").toggleClass("hide");
}

$('.reset').click(function(){
    nbrTry = 0
    $('p').text("")
    $(".reset").toggleClass("hide");
    resultat = Math.floor(Math.random() * 100) + 1;
    console.log(resultat);
})



$('.propo').click(function () {
    propoJoueur = $('input').val()
    // alert(propoJoueur)
    $('input').val("")
    // console.log(nbrTry);
    if (nbrTry < 6) {
        if (propoJoueur < resultat) {
            $('p').text("ton nombre est trop petit")
            nbrTry++
        } else if (propoJoueur > resultat) {
            $('p').text("ton nombre est trop grand")
            nbrTry++
        } else if ( propoJoueur = resultat) {
            $('p').text("tu as trouver le bon nombre")
            nbrTry = 10
            reset()
        }
    } else {
        $('p').text("Tu as atteind le nombre d'essaie MAX !")
        reset()
    }
})

