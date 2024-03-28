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


        var nom = document.getElementById("nom").value;
        // prépare la requete
        requeteHttp.open("GET", "script5.php?nom=" + nom, true); // false = synchrone // true = asynchrone

        requeteHttp.onreadystatechange = recevoirReponce
        // envoyer le requete
        requeteHttp.send(null);

    }
}

function recevoirReponce(){
    console.log("Réponse reçu");
}