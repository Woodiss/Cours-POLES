// alert("ee")

const para = document.querySelector("#consigne p");
const monElement = document.getElementById("perso");
const divInput = document.querySelector(".nomjoueur")
const btn = document.querySelector(".nomjoueur button");
const inputJoueur = document.querySelector(".nomjoueur input");
const next = document.getElementById("next")
const attaque = document.getElementById("attaque")
const defense = document.getElementById("defense")
const ennemiDiv = document.querySelector(".ennemi")
const imgHtml = document.querySelector(".ennemi img")
const pdvJoueur = document.querySelector(".pdvjoueur")
const pdvAdversaire = document.querySelector(".pdvadversaire")

let text = "Bonjour, quel est ton nom ?"
let adversaire = ""





var y = 500
var x = 950

// Y = vertical
// X = horizontal

function move() {
    if (y < 100) {
        y = 100
    } else if (y > 700) {
        y = 700
    } else if (x < 50) {
        x = 50
    } else if (x > 1800) {
        x = 1800
    } else {
        monElement.style.top = y + 'px';
        monElement.style.left = x + 'px';
        console.log(`y = ${y} & x = ${x}`);
    }
}
move()


function ecrire() {
    let i = 0;

    function ajouterCaractere() {
        para.textContent += text[i];
        i++;
        if (i < text.length) {
            setTimeout(ajouterCaractere, 30);
        }
    }
    ajouterCaractere();
}
ecrire()




function porteCheck() {
    if ((y === 100)) {
        if ((x === 750) || (x === 800)) {
            text = `Tu as choisi la porte VERTE derriére elle ce cache...`
            // console.log("tu as choisi la porte VERTE");
            choixAdversaire()
        } else if (x === 950) {
            text = `Tu as choisi la porte BLEU derriére elle ce cache...`
            choixAdversaire()
            // console.log("tu as choisi la porte BLEU");
        } else if (x === 1100) {
            text = `Tu as choisi la porte VIOLET derriére elle ce cache...`
            choixAdversaire()
            // console.log("tu as choisi la porte VIOLET");
        }
        para.textContent = ""
        ecrire()

    }
}




function random(max) {
    return Math.floor(Math.random() * max)
}


function choixAdversaire() {
    adversaire = random(3)

    if (adversaire == 0) {
        adversaire = dragon
        imgHtml.src = "img/dragon.png"
    } else if (adversaire == 1) {
        adversaire = phoenix
        imgHtml.src = "img/phoenix.png"
    } else if (adversaire == 2) {
        adversaire = chien
        imgHtml.src = "img/chien.png"
    }

    next.classList.remove("none")
}

function ennemiattaque() {}


function pdv() {
    pdvJoueur.classList.remove("none")
    pdvAdversaire.classList.remove("none")
    pdvJoueur.textContent = joueur.pdv + " PV"
    pdvAdversaire.textContent = adversaire.pdv + " PV"
}





class Perso {
    constructor(nom, pdv, force) {
        this.nom = nom
        this.pdv = pdv
        this.force = force
    }

    attaque(ennemi) {
        if (ennemi === adversaire) {
            if (defAdversaire === true) {
                adversaire.pdv -= this.force / 2
                defAdversaire = false
            } else {
                adversaire.pdv -= this.force
            }
        }
        
        if (ennemi === joueur) {
            if (defJoueur === true) {
                joueur.pdv -= this.force / 2
                defJoueur = false
            } else {
                joueur.pdv -= this.force
            }
        }
    }
}

// creation du jouer avec le pseudo fournie par l'utilisateur

let dragon = new Perso("Dragon", "100", "10");
let phoenix = new Perso("Phoenix", "70", "10")
let chien = new Perso("Chien", "50", "5")
// creation des trois mobs




btn.addEventListener("click", function () {
    joueur = inputJoueur.value
    console.log(joueur);
    joueur = new Perso(joueur, "60", "20");
    divInput.style.display = "none"

    text = `Bonjour ${joueur.nom}, tu es un chevalier parti à l’aventure pour sauver la princesse du donjon. Tu es devant le donjon et il y a 3 portes. Laquelle choisis-tu ? Déplace toi sûr la porte de ton choix et appuie sur ENTER`
    para.textContent = ""
    ecrire()
})





document.addEventListener('keydown', function (event) {
    // console.log(event.key);
    switch (event.key) {
        // détecte les 4 fléches directionnelles
        case 'ArrowUp':
            y -= 50;
            break;
        case 'ArrowDown':
            y += 50;
            break;
        case 'ArrowLeft':
            x -= 50;
            break;
        case 'ArrowRight':
            x += 50;
            break;


    }
    move()
});




let tour = "joueur";

document.addEventListener("keydown", function (event) {
    // vérifie si une porte a deja étais sélectionner
    if ((event.key === "Enter") && (adversaire === "")) {
        porteCheck()
    }

    // détection de l'attaque
    if ((event.key === "Enter") && (y === 250) && (x === 500) && (tour === "joueur")) {
        joueur.attaque(adversaire)
        tour = "pasjoueur"
        pdv()

    }
})



next.addEventListener("click", function() {
    para.textContent = ""
    text = `le ${adversaire.nom} ! Prépare toi au combat !`
    next.classList.add("none")
    attaque.classList.remove("none")
    defense.classList.remove("none")
    ennemiDiv.classList.add("deplacement")
    ecrire()
    pdv()
})




let attaqueDefJoueur = "";
let attaqueDefAdversaire = "";

let defJoueur = false;
let defAdversaire = false;








function testattaque() {
    joueur.attaque(adversaire)
    pdv()
}

