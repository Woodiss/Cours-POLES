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


function envoyerReponse() {
    var requeteHttp = getRequeteHttp();

    if (requeteHttp == null) {
        alert("impossible d'utiliser ajax sur ce navigateur")
    } else {


        requeteHttp.open("GET", "donnes.json", true); // false = synchrone // true = asynchrone
        requeteHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        requeteHttp.onreadystatechange = function () { recevoirReponse(requeteHttp) }
        // envoyer le requete
        requeteHttp.send(null);

    }
}


function recevoirReponse(requeteHttp) {
    if (requeteHttp.readyState == 4) {
        // si la requete s'est correctement déroulée
        if (requeteHttp.status == 200) {

            let obj = JSON.parse(requeteHttp.responseText);

            console.log(obj);


        } else {
            alert("La requête ne s'est pas correctement éxécutée.");
        }
    }
}