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
        requeteHttp.open("POST", "script13b.php", true); // false = synchrone // true = asynchrone
        requeteHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        requeteHttp.onreadystatechange = function () { recevoirReponceCategories(requeteHttp) }
        // envoyer le requete
        requeteHttp.send("get=cat&cat=" + cat);

    }
}


function recevoirReponceCategories(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {


            var obj = JSON.parse(requeteHttp.responseText);
            console.log(obj);

            contenueSelect = "";
            for (let i = 0; i < obj.length; i++) {
                var categorie = obj[i];
                contenueSelect += '<option value="' + categorie['id'] + '">' + categorie['label'] + '</option>';
            }
            document.getElementById('cat').innerHTML = contenueSelect;

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
        requeteHttp.open("POST", "script13b.php", true); // false = synchrone // true = asynchrone
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

            var obj = JSON.parse(requeteHttp.responseText);
            console.log(obj);

            contenueSelect = "";
            for (let i = 0; i < obj.length; i++) {
                var categorie = obj[i];
                contenueSelect += '<option value="' + categorie['id'] + '">' + categorie['label'] + '</option>';
            }

            document.getElementById("produits").innerHTML = contenueSelect;

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
        requeteHttp.open("POST", "script13b.php", true); // false = synchrone // true = asynchrone
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