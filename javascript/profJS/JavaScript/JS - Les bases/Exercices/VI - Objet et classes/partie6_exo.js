// [ source: https://github.com/oc-courses/intro-javascript ]

/*
* EXERCICE 1: les objets
*
* Complétez le programme pour ajouter la définition de l'objet chien.
* TODO : ajoutez ici la définition de l'objet chien
*/



let chien = {
    nom: "Lucky",
    race: "Fox",
    taille: "2.5m",
    aboyer: function () {
        console.log("WOUAFFFF!!");
    }
}

console.log(chien.nom + " est un " + chien.race + " mesurant " + chien.taille + " cm");
console.log("Tiens, un chat ! " + chien.nom + " aboie : " + chien.aboyer());

// Le resultat doit être:
// Medor est un berger allemand mesuranr 75 cm
// Tiens, un chat ! Medor aboie : Wouaf ! Wouaf !




/*
* EXERCICE 2: les objets 
* Complétez le programme pour ajouter à l'objet aurora défini 
* une propriété nommée xp représentant son expérience. 
* Sa valeur initiale est de 0.
* L'expérience doit apparaître dans la description du personnage.
*/

// Ajoutez votre code ici
 let aurora = {
    name: Aurora,
    pdv: 150,
    force: 25,
    xp: 0,

    decrire: function() {
        return `${this.name} a ${this.pdv} points de vie, ${this.force} en force et ${this.xp} points d'expérience`
    }

 }

// "Aurora a 150 points de vie, 25 en force et 0 points d'expérience"
console.log(aurora.decrire());

console.log("Aurora apprend une nouvelle compétence");
aurora.xp += 15;

// "Aurora a 150 points de vie, 25 en force et 15 points d'expérience"
console.log(aurora.decrire());




/* 
* EXERCICE 3: les objets
* Complétez le programme en ajoutant la définition de la classe Chien 
* afin d'obtenir le résultat d'exécution désiré.
* Les chiens mesurant plus de 50 cm aboient en faisant "Grrr ! Grrr !", 
* les autres font "Wouaf ! Wouaf !"
*/

// Ajoutez votre code ici

class Chien {
    constructor(param1, param2, param3) {
        this.nom = param1;
        this.race = param2;
        this.taille = param3
    }

    aboyer() {
        if (this.taille < 50) {
            return "Grrr ! Grrr !";
        } else {
            return "Wouaf ! Wouaf !";
        }
    }

    decrire() {
        return `${this.nom} est un ${this.race} mesurant ${this.taille}cm`
    }
}


// "Crockdur est un mâtin de Naples mesurant 75 cm"
console.log(crockdur.decrire());

// "Tiens, un chat ! Crockdur aboie : Grrr ! Grrr !"
console.log("Tiens, un chat ! " + crockdur.nom + " aboie : " + crockdur.aboyer());
let crockdur = new Chien("Crockdur", "mâtin de Naples", 75);

let milou = new Chien("Milou", "fox-terrier", 26);

// "Milou est un fox-terrier mesurant 26 cm"
console.log(milou.decrire());

// "Tiens, un chat ! Milou aboie : Wouaf ! Wouaf !"
console.log("Tiens, un chat ! " + milou.nom + " aboie : " + milou.aboyer());






/* 
* EXERCICE 4: les objets
* Complétez ce programme y ajouter la gestion de l'inventaire des personnages. 
* Voici les améliorations à intégrer :
* L'inventaire d'un personnage se compose d'un nombre de pièces d'or et d'un nombre de clés.
* Tous les personnages possèdent initialement 10 pièces d'or et une clé.
* L'inventaire doit être affiché dans la description d'un joueur.
* Lorsqu'un personnage tue un adversaire, il récupère dans son propre inventaire le nombre 
* de pièces d'or et de clés de cet adversaire.
*/

// Ajoutez votre code ici
class Personnage {
    constructor(param1, param2, param3) {
        this.nom = param1;
        this.pv = param2;
        this.force = param3;
        this.xp = 0;

        this.inventaire = {
            gold: 10,
            key: 1
        }
    }

    decrire() {
        return `${this.nom} a ${this.pv} points de vie, ${this.force} en force et 0 points d'expérience, ${this.inventaire.gold} pièces et ${this.inventaire.key} clé(s)`
    }

    attaquer(agr1) { 
        agr1.pv -= this.force
        // console.log(agr1.pv);
        // console.log(this.force);

        if (agr1.pv <= 0) {
            this.inventaire.gold += 10
            this.inventaire.key += 1
        }
    }
}


// "Aurora a 150 points de vie, 25 en force et 0 points d'expérience, 10 pièces d'or et 1 clé(s)"
let aurora = new Personnage("Aurora", 150, 25);

console.log(aurora.decrire());

let monstre = new Personnage("ZogZog", 20, 10);
monstre.attaquer(aurora);
aurora.attaquer(monstre); // Le monstre est tué

// "Aurora a 140 points de vie, 25 en force et 10 points d'expérience, 20 pièces d'or et 2 clé(s)"
console.log(aurora.decrire());







/*
* EXERCICE 5: les objets
*
* Ecrivez un programme qui crée un objet compte ayant les propriétés suivantes :
*
* Une propriété titulaire valant "Alex".
*
* Une propriété solde valant initialement 0.
*
* Une méthode crediter() ajoutant le montant passé en paramètre au solde du compte.
*
* Une méthode debiter() retirant le montant passé en paramètre du solde du compte.
*
* Une méthode decrire() renvoyant la description du compte.
*
* Utilisez cet objet pour afficher sa description, le créditer puis le débiter de
* montants saisis successivement par l'utilisateur,
* puis afficher de nouveau sa description.
*/

// Voici le résultat à obtenir pour un crédit de 200 puis un débit de 150.
// Titulaire: Alex, solde : 0 euros
// Titulaire : Alex, solde : 50 euros

class Compte {
    constructor (param1) {
        this.titulaire = param1,
        this.solde = 0
    }

    decrite () {
        return `ce compte apparatient a ${this.titulaire}, et à actuellement un solde de ${solde} €`
    }

    crediter (somme) {
        this.solde += somme
    }

    debiter (somme) {
        this.solde -= somme
    }

    transfere (cible, somme) {
        this.solde -= somme
        cible.solde += somme
    }
};

let alex = new Compte("Alex", 0);
let nawfel = new Compte ("Nawfel", 0);


alex.crediter(50);
console.log(alex.solde + " 50");

alex.debiter(5);
console.log(alex.solde + " 45");

alex.transfere(nawfel, 13);
console.log(alex.solde + " 32");
console.log(nawfel.solde + " 13");




let marco = new Compte("Marco", 0)

let tablo = []
tablo.push(alex, nawfel, marco)

// tablo.forEach

console.log(tablo);






/* 
* EXERCICE 6: les objets
* Reprenons le contexte des comptes en banque.
* Un compte bancaire sera modélisé par constructeur définie comme suit :
* Une propriété titulaire initialisée par le constructeur.
* Une propriété solde valant initialement 0.
* Une méthode crediter() ajoutant le montant passé en paramètre (éventuellement négatif) au solde du compte.
* Une méthode decrire() renvoyant la description du compte.

* Ecrivez un programme qui crée 3 comptes bancaires, l'un appartenant à Alex, le deuxième à CLovis et le troisième à Marco. 
* Stockez ces comptes dans un tableau.
* Ensuite, le programme crédite 1000 € et affiche la description de chacun des comptes.
*/

