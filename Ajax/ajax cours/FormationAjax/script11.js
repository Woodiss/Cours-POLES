
function getRequeteHttp() {
    var requeteHttp;

    if (window.XMLHttpRequest) {//Navigateurs basés sur Mozilla
        requeteHttp = new XMLHttpRequest()
        if (requeteHttp.overrideMimeType) //si ça exige que le type de données utilisé par le serveur soit text/xml
        {
            requeteHttp.overrideMimeType("text/xml");
        }
    } else {
        if (window.ActiveXObject) // C'est internet explorer
        {
            try {
                requeteHttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
                requeteHttp = null;
            }
        }
    }
    return requeteHttp
}

function envoyerRequete()
{
    var requeteHttp = getRequeteHttp();

    if(requeteHttp == null)
    {
        alert("Impossible d'utiliser Ajax sur ce navigateur");
    }
    else
    {
        requeteHttp.open("GET", "donnees.json", true);
        requeteHttp.onreadystatechange = function(){recevoirReponse(requeteHttp);};
        requeteHttp.send(null);
    }
}

function recevoirReponse(requeteHttp)
{
    // la requête est achevée, le résultat a été transmis
    if(requeteHttp.readyState==4)
    {
        // si la requête s'est correctement déroulée
        if(requeteHttp.status==200)
        {
            var obj = JSON.parse(requeteHttp.responseText);
            console.log(obj);
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée.");
        }
    }
}