// alert("uu");



// structure de base IF
if (true) {// par défaut la condition à vérifier le IF vérifie si elle est vraie
    //..... code .....
}

var delia = 10;
if (delia < 50){
    // console.log("delia est bien inférieur à 50");
}

// ELSE

if(true){
    //....code si VRAI
} else{
    //....code si FAUX
}



if (delia > 50){
    // console.log("delia est bien supérieur à 50");
} else{
    // console.log("delia est bien inférieur à 50");
}


// EXERCISE 

// on utilise le IF pour vérifier l'age de l'internaute
// => s'il est majeur je lui souhaite la bienvenue
// => s'il est mineur je lui [1]signale [2]le renvoie vers un autre site





// 1 -- je déclare la majorité légale
var majo = 18;





// 2 -- demander l'age en sarrurant que nous avon un NUMBER
var age = parseInt(prompt("Indiquez votre age"))



// 3 -- je vérifie su mon enternaute est majeur
if (age >= majo) {
    alert("bienvenue, vous êtes majeur")
} else
    alert("tu est mineur change de site")

    // envoyer sur un autre site
    document.location.href="https://darty.fr/"


