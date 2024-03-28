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
        requeteHttp.open("GET", "donnees.xml", true);
        requeteHttp.onreadystatechange = function(){recevoirReponse(requeteHttp)};
        requeteHttp.send();
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
            var data = requeteHttp.responseXML;
            var produits = data.getElementsByTagName("produit");

            var datas = "";

            for(var i=0; i<produits.length; i++)
            {
                var produit = produits[i];
                datas += "<tr>";
                var attributs = produit.querySelectorAll("*");
                for(var j=0; j<attributs.length; j++)
                {
                    datas += "<td>"+attributs[j].textContent+"</td>";
                }
                datas += "</tr>";
            }
            document.getElementById("tbody").innerHTML = datas;
        }
        else
        {
            alert("La requête ne s'est pas correctement exécutée.");
        }
    }
}
