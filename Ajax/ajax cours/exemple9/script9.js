function getRequeteHttp() {

    var requeteHttp;

    // vérif si on utilise Mozilla
    if (window.XMLHttpRequest) {
        requeteHttp = new XMLHttpRequest();

        if (requeteHttp.overrideMimeType) {
            requeteHttp.overrideMimeType("text/xml");
        }
    } else {
        //vérif si ont utilise internet explorer
        if (window.ActiveXObject) {
            try {
                requeteHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                requeteHttp = null;
            }
        }
    }
    return requeteHttp;

}


function envoyerRechecheCategories() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utiliser ajax sur ce navigateur")
    } else {

        var cat = document.getElementById("saisie").value;
        // prépare la requete
        // console.log(cat);
        requeteHttp.open("POST", "script9.php", true); // false = synchrone // true = asynchrone
        requeteHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        requeteHttp.onreadystatechange = function () { recevoirReponce(requeteHttp) }
        // envoyer le requete
        requeteHttp.send("get=cat&cat=" + cat);

    }
}


function recevoirReponce(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {

            // méthode 1 avec les <option></option> déja créer
            // document.getElementById("cat").innerHTML = requeteHttp.responseText;

            // méthode 2 avec la chaine de caractère r'envoyer
            // requeteHttp.responseText = réponse du script php
            var chaine = requeteHttp.responseText;
            // je sépare la chaine reçu en utilisant ";" comme séparateur
            var tab = chaine.split(";");
            // j'initialise une variable vide
            var contenueSelect = "";
            // je fait une boucle pour faire passer chaque élément maintenant séparer dans un tableau
            for (var i = 0; i < tab.length; i++) {
                // une condition pour que le dernier éléments ne soit pas pris en compte (car la chaine de caractère reçu fini par ;)
                if (tab[i].trim() != "") {
                    // je resépare pour faire des sous tableau en utilisant le séparateur , 
                    var attributs = tab[i].split(',');
                    // je concaténe des balises <option> avec les bonnes valeurs
                    contenueSelect += "<option value='" + attributs[0] + "'>" + attributs[1] + "</option>";
                }
            }
            // j'ajoute ma chaine de caractère "contenueSelect" (qui est du coup plusieurs balises <option>) a l'élément qui ç l'id "cat"
            document.getElementById("cat").innerHTML = contenueSelect;
            envoyerRequete1();


        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}
// -------------------------------------------------------------------------------------------------------

function envoyerRequete1() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utiliser ajax sur ce navigateur")
    } else {
        var selectcat = document.getElementById("cat").value;
        // prépare la requete
        // console.log(cat);
        requeteHttp.open("POST", "script9.php", true); // false = synchrone // true = asynchrone
        requeteHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        requeteHttp.onreadystatechange = function () { recevoirReponce1(requeteHttp) }
        // envoyer le requete
        requeteHttp.send("get=produit&selectcat=" + selectcat);

    }
}

function recevoirReponce1(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {

            // console.log(requeteHttp.responseText);
            document.getElementById("produits").innerHTML = requeteHttp.responseText;
            envoyerRequete2();
        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}

// ---------------------------------------------------------------------------------------------------------------


function envoyerRequete2() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utiliser ajax sur ce navigateur")
    } else {
        var produit = document.getElementById("produits").value;
        // prépare la requete
        // console.log(cat);
        requeteHttp.open("POST", "script9.php", true); // false = synchrone // true = asynchrone
        requeteHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        requeteHttp.onreadystatechange = function () { recevoirReponce2(requeteHttp) }
        // envoyer le requete
        requeteHttp.send("get=price&produit=" + produit);

    }
}

function recevoirReponce2(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {

            // console.log(requeteHttp.responseText);
            document.getElementById("prix-produit").innerHTML = requeteHttp.responseText + "€";
        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}