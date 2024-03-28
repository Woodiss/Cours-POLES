// NIVEAU 1 CREATION DES PERSO

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

let joueur = prompt("Bonjour, quel est ton nom ?")

joueur = new Perso(joueur, "60", "20");
// creation du jouer avec le pseudo fournie par l'utilisateur

let dragon = new Perso("Dragon", "100", "10");
let phoenix = new Perso("Phoenix", "70", "10")
let chien = new Perso("Chien", "50", "5")
// creation des trois mobs


let choixPortes = parseInt(prompt(`Bonjour ${joueur.nom}, tu es un chevalier parti à l’aventure pour sauver la princesse du donjon. Tu es devant le donjon et il y a 3 portes. Laquelle choisis-tu ?\n1 – porte bleu\n2 – porte rouge\n3 – porte verte `))

while ((choixPortes !== 1) && (choixPortes !== 2) && (choixPortes !== 3)) {
  choixPortes = parseInt(prompt(`Ne n'est pas compris ton choix de porte. Laquelle choisis-tu ?\n1 – porte bleu\n2 – porte rouge\n3 – porte verte`))
}


function random(max) {
  return Math.floor(Math.random() * max )
}



let adversaire = random(3)

if (adversaire == 0) {
  adversaire = dragon
} else if (adversaire == 1) {
  adversaire = phoenix
} else if (adversaire == 2) {
  adversaire = chien
}

console.log(adversaire.pdv);

alert(`Tu as choisi la porte numéro ${choixPortes} derrière elle se trouve...`)
alert(`Le ${adversaire.nom} !`)


let attaqueDefJoueur = "";
let attaqueDefAdversaire = "";

let defJoueur = false;
let defAdversaire = false


while ((joueur.pdv > 0) && (adversaire.pdv > 0)) {
  attaqueDefJoueur = prompt(`Que veux tu faire ? tu peux, ou attaquer, ou te protéger ? \nAttaquer \nProtéger`).toLowerCase()
  while ((attaqueDefJoueur !== "attaquer") && (attaqueDefJoueur !== "protéger")) {
    attaqueDefJoueur = prompt(`Je n'est pas compris ton choix, vérifie ton écriture \nAttaquer \nProtéger`).toLowerCase()
  }
  
  if (attaqueDefJoueur === "attaquer") {
    joueur.attaque(adversaire)
    defJoueur = false
  } else {
    defJoueur = true
  }
  console.log(`l'ennemi a encore ${adversaire.pdv} point de vie`);

  if (adversaire.pdv === 0) {
    break
  }
  
  attaqueDefAdversaire = random(2)
  // 0 = attaque, 1 = deff
  
  if (attaqueDefAdversaire === 0) {
    adversaire.attaque(joueur)
    alert(`l'ennemi à choisi d'attaquer`)
    defAdversaire = false
  } else {
    alert(`l'ennemi à choisi de se protéger`)
    defAdversaire = true
  }

  console.log(`il te reste encore ${joueur.pdv} point de vie`)
}



if (joueur.pdv <= 0) {
  alert(`Tu as perdu ! le ${adversaire} a été plus fort que toi cette fois`)
} else if (adversaire.pdv <= 0) {
  alert(`Bien joué a toi ${joueur.nom} ! Tu as réussi a vaincre le ${adversaire}, et sauver la princesse !`)
}


