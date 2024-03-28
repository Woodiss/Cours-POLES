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



function envoyerRequete() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utilsier ajax sur ce navigateur")
    } else {


        // prépare la requete
        requeteHttp.open("GET", "donnees.xml", true); // false = synchrone // true = asynchrone

        requeteHttp.onreadystatechange = function () { recevoirReponse(requeteHttp) }
        // envoyer le requete
        requeteHttp.send(null);

    }
}

function recevoirReponse(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {
            // alert(requeteHttp.responseText);
            data = requeteHttp.responseXML;
            console.log(data);
            var tab = data.getElementsByTagName("produit");


            for (var i = 0; i < tab.length; i++) {
                var produit = tab[i];
                var ref = produit.getElementsByTagName("ref")[0].textContent;
                var des = produit.getElementsByTagName("des")[0].textContent;

                document.getElementById("table").innerHTML += `<tr><td> ${ref} </td><td> ${des} </td></tr>`
            }

        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}