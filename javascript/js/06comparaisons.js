// alert("testt")

// L'opérateur de comparaison == signifie "égal à"

var nb1 = 123;
var nb2 = "123";

console.log(nb1 == nb2); // return "true"

// L'opérateur de comparaison === signifie "strictement égal à"
// il permet de vérifier la VALEUR et le TYPE

console.log(nb1 === nb2); // return "false"


// L'opérateur != signifie "différent de ... en VALEUR " 

console.log(nb1 != nb2); // return "false"

// L'opérateur !== signifie "strictement différent de ... en TYPE et en VALEUR"
console.log(nb1 !== nb2); // return "true"


// EXERCICE
// j'arrive sur un espace sécurisé au moyen du prénom et de l'âge.
// je dois saisir mon prénom et mon age pour être authentifié sur le site
// en cas d'échec une alerte m'informe du problème
// si tout se passe bien, un message de bienvenue m'accueille.

var prenom, monAge;
prenom = "Stephane";
monAge = 25;


// 1. Demander son prénom a l'utilisateur avec un prompt
var prenomlog = prompt("Quel est votre prénom ?");

// 2. Je vérifie si le prenom saisi (prenomlog) correspond a (prenom)

if (prenom === prenomlog){
    // 2.1 Je vérifie si le prenom saisi(prenomlog) correspond à (prenom)
    var agelog = parseInt(prompt("Votre âge")); // 2.2 Je demande a l'utilisateur son age via un prompt
    if(agelog === monAge){
        alert(`Bienvenue ${prenom}`);
        }else{
        // 2.3 si les ages ne correspondent pas, le lance une alert
        alert("erreur d'âge");
        }

    }else {
    alert("attention, prénom non reconnu");
    // 2.4 si les prénom ne correspondent pas, je lance une ALERT
}

alert()





